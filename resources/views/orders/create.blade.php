@extends('layouts.dashboard')

@section('title', 'Nueva Orden')

@section('content')
    <div class="bg-orange-300 p-6 rounded-lg shadow-lg shadow-orange-400">
        <h2 class="text-2xl font-bold mb-4">Crear Orden de Pedido</h2>
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="cliente">Cliente</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="cliente" name="cliente" type="text" placeholder="Ingrese el Nombre del Cliente" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="cedula">Cédula del Cliente</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="cedula" name="cedula" type="text" placeholder="Ingrese la Cédula del Cliente" required>
            </div>

            <div class="mb-4 flex">
                <div class="w-1/2 pr-2">
                    <label class="block text-gray-700 font-bold mb-2">Productos</label>
                    <div class="producto-item mb-2 flex">
                        <select id="producto-select"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700 mr-2">
                            <option value="">Seleccione un producto</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" data-stock="{{ $product->unidades }}">
                                    {{ $product->nombre }} - Stock: {{ $product->unidades }}
                                </option>
                            @endforeach
                        </select>
                        <input id="producto-cantidad"
                            class="shadow appearance-none border rounded w-1/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                            type="number" placeholder="Cantidad" min="1">
                    </div>
                    <button type="button" id="add-producto"
                        class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Añadir
                        Producto</button>
                </div>
                <div class="w-1/2 pl-2">
                    <label class="block text-gray-700 font-bold mb-2">Productos Seleccionados</label>
                    <div id="productos-seleccionados"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight bg-orange-200">
                        <!-- Productos seleccionados se mostrarán aquí -->
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="tipo">Tipo de Orden</label>
                <select id="tipo" name="tipo"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    required>
                    <option value="">Seleccione el tipo de orden</option>
                    <option value="Para llevar">Para llevar</option>
                    <option value="Para comer aquí">Para comer aquí</option>
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Crear Orden
                </button>
                <button
                    class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button" onclick="window.location.href='{{ route('orders.index') }}'">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('add-producto').addEventListener('click', function() {
            const select = document.getElementById('producto-select');
            const cantidadInput = document.getElementById('producto-cantidad');
            const selectedContainer = document.getElementById('productos-seleccionados');

            const productoId = select.value;
            const productoTexto = select.options[select.selectedIndex].text;
            const cantidad = cantidadInput.value;

            if (productoId && cantidad > 0) {
                const selectedItem = document.createElement('div');
                selectedItem.className = 'producto-seleccionado flex mb-2';
                selectedItem.innerHTML = `
                    <span class="w-full py-2 px-3 text-gray-700">${productoTexto}</span>
                    <span class="w-1/4 py-2 px-3 text-gray-700">${cantidad}</span>
                    <input type="hidden" name="productos[${selectedContainer.children.length}][producto_id]" value="${productoId}">
                    <input type="hidden" name="productos[${selectedContainer.children.length}][cantidad]" value="${cantidad}">
                    <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="this.parentElement.remove()">Quitar</button>
                `;
                selectedContainer.appendChild(selectedItem);

                // Reset the select and input fields
                select.value = '';
                cantidadInput.value = '';
            }
        });
    </script>
@endsection
