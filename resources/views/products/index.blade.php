@extends('layouts.dashboard')

@section('title', 'Productos')

@section('content')
    <div class="bg-orange-200 p-6 rounded-lg shadow-lg shadow-orange-300">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <div class="flex justify-between mb-4">
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-900">Lista de Productos</h2>
                            </div>
                            <div class="relative">
                                <input type="text" id="search" placeholder="Buscar..."
                                    class="block w-full py-2 px-4 rounded-md bg-white border border-gray-300   focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 ">
                                <span class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 15l-5-5m0 0l-5 5m5-5V3"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <table class="min-w-full">
                            <thead class="bg-white border-b">
                                <tr class="border border-gray-400">
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        PRODUCTO
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        PROVEEDOR
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        PRECIO
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        DESCRIPCION
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        UNIDADES
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        TIPO
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        TIENDA
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">

                                    </th>
                                </tr>
                            </thead>
                            <tbody class=" border border-gray-400" id="table-body">
                                @foreach ($products as $product)
                                    <tr class="bg-orange-300 border-b border-gray-400">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">
                                            {{ $product->id }}
                                        </td>
                                        <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                            {{ $product->nombre }}
                                        </td>
                                        <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                            {{ $product->proveedor }}
                                        </td>
                                        <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                            {{ $product->precio }}
                                        </td>
                                        <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                            {{ $product->descripcion }}
                                        </td>
                                        <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                            {{ $product->unidades }}
                                        </td>
                                        <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                            {{ $product->tipo }}
                                        </td>
                                        <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                            {{ $product->tienda }}
                                        </td>
                                        <td
                                            class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap border-x border-gray-400">
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                                    onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <button class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 my-2 px-4 rounded">
            <a href="{{ url('products/create') }}" class="text-white">Añadir Producto</a>
        </button>
    </div>

    <script>
        const searchInput = document.getElementById('search');
        const tableBody = document.getElementById('table-body');

        searchInput.addEventListener('keyup', function() {
            const searchTerm = searchInput.value.toLowerCase();
            const rows = tableBody.getElementsByTagName('tr');

            Array.from(rows).forEach(row => {
                const tdText = row.innerText.toLowerCase();
                if (tdText.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
@endsection
