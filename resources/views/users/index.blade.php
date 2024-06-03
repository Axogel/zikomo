@extends('layouts.dashboard')

@section('title', 'Usuarios')

@section('content')
    <div class="bg-orange-200 p-6 rounded-lg shadow-lg shadow-orange-300">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-white border-b">
                                <tr class="border  border-gray-400">
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Nombre del Propietario
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Nombre de Usuario
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Contraseña
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Correo
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Fecha de Creacion
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-orange-300 border-b border border-gray-400">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        000
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                        Administrador
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                        Admin
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                        contraseña
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                        admin@admin.com
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                        29/05/2024
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <button class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 my-2 px-4 rounded">
            <a href="{{ url('users/create') }}" class="text-white">Agregar Usuario</a>
        </button>
    </div>
@endsection
