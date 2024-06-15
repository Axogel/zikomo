<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'proveedor' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'unidades' => 'required|integer',
            'tipo' => 'required|string|max:255',
            'tienda' => 'required|string|max:255',

        ]);
        $product = new Product();
        $product->nombre = $request->input('nombre');
        $product->descripcion = $request->input('descripcion');
        $product->proveedor = $request->input('proveedor');
        $product->precio = $request->input('precio');
        $product->unidades = $request->input('unidades');
        $product->tipo = $request->input('tipo');
        $product->tienda = $request->input('tienda');

        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto creado correctamente.');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'proveedor' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'unidades' => 'required|integer',
            'tipo' => 'required|string|max:255',
            'tienda' => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->nombre = $request->input('nombre');
        $product->descripcion = $request->input('descripcion');
        $product->proveedor = $request->input('proveedor');
        $product->precio = $request->input('precio');
        $product->unidades = $request->input('unidades');
        $product->tipo = $request->input('tipo');
        $product->tienda = $request->input('tienda');

        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente.');
    }
}
