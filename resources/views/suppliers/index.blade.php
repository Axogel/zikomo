@extends('layouts.dashboard')

@section('title', 'Proveedores')

@section('content')
    <div class="bg-orange-200 p-6 rounded-lg shadow-lg shadow-orange-300">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-white border-b">
                                <tr class = "border  border-gray-400">
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        NOMBRE
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        CORREO
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        PRODUCTO
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        TELEFONO
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        DIRECCION
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        EMPRESA
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-orange-300 border-b border border-gray-400">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        No hay registros disponibles
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <button class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 my-2 px-4 rounded">
            <a href="{{ url('suppliers/create') }}" class="text-white">Añadir Proveedor</a>
        </button>
    </div>
@endsection
