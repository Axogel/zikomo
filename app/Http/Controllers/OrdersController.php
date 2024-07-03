<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::with('products')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::where('unidades', '>', 0)->get();
        return view('orders.create', compact('products'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $products = Product::all();
        return view('orders.edit', compact('order', 'products'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required|string|max:255',
            'cedula' => 'required|string|max:255',
            'productos' => 'required|array',
            'productos.*.producto_id' => 'required|exists:products,id',
            'productos.*.cantidad' => 'required|integer|min:1',
            'fecha_entrega' => 'required|date',
        ]);

        try {
            DB::beginTransaction();

            $order = new Order();
            $order->cliente = $request->cliente;
            $order->cedula = $request->cedula;
            $order->fecha_entrega = $request->fecha_entrega;
            $order->save();

            foreach ($request->productos as $producto) {
                $order->products()->attach($producto['producto_id'], ['quantity' => $producto['cantidad']]);
                $product = Product::find($producto['producto_id']);
                $product->unidades -= $producto['cantidad'];
                $product->save();
            }

            DB::commit();

            return redirect()->route('orders.index')->with('success', 'Orden creada correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->withErrors(['error' => 'Error al crear la orden: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente' => 'required|string|max:255',
            'cedula' => 'required|string|max:255',
            'productos' => 'required|array',
            'productos.*.producto_id' => 'required|integer|exists:products,id',
            'productos.*.cantidad' => 'required|integer|min:1',
            'fecha_entrega' => 'required|date',
        ]);

        DB::transaction(function () use ($request, $id) {
            $order = Order::findOrFail($id);
            $order->update([
                'cliente' => $request->input('cliente'),
                'cedula' => $request->input('cedula'),
                'fecha_entrega' => $request->input('fecha_entrega'),
            ]);

            // Restore previous inventory
            foreach ($order->products as $product) {
                $product->unidades += $product->pivot->quantity;
                $product->save();
            }

            $order->products()->detach();

            foreach ($request->input('productos') as $producto) {
                $product = Product::findOrFail($producto['producto_id']);
                if ($product->unidades < $producto['cantidad']) {
                    throw new \Exception('La cantidad solicitada excede el stock disponible.');
                }

                $order->products()->attach($producto['producto_id'], ['quantity' => $producto['cantidad']]);
                $product->unidades -= $producto['cantidad'];
                $product->save();
            }
        });

        return redirect()->route('orders.index')->with('success', 'Orden actualizada correctamente.');
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $order = Order::findOrFail($id);

            // Restore inventory before deleting the order
            foreach ($order->products as $product) {
                $product->unidades += $product->pivot->quantity;
                $product->save();
            }

            // Detach products and delete the order
            $order->products()->detach();
            $order->delete();

            // Temporarily disable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            // Reorder the IDs
            $orders = Order::orderBy('id')->get();
            $startId = 1;

            foreach ($orders as $order) {
                $currentId = $order->id;
                DB::table('orders')->where('id', $currentId)->update(['id' => $startId]);

                // Update the foreign key in the order_product table
                DB::table('order_product')->where('order_id', $currentId)->update(['order_id' => $startId]);

                $startId++;
            }

            // Re-enable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            // Reset the auto-increment value
            $maxId = Order::max('id') + 1;
            DB::statement("ALTER TABLE orders AUTO_INCREMENT = $maxId");

            DB::commit();

            return redirect()->route('orders.index')->with('success', 'Orden eliminada y IDs reordenados correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Error al eliminar la orden: ' . $e->getMessage()]);
        }
    }
}
