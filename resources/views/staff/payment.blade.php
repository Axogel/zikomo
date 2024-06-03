@extends('layouts.dashboard')

@section('title', 'Ordenes')

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
                                        Nombre
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Apellido
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Cédula de Identidad
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Horas Trabajadas
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Monto a Pagar
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-orange-300 border-b border border-gray-400">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        No hay registros disponibles
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
