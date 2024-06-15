@extends('layouts.dashboard')

@section('title', 'Mi Perfil')

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
                                        Correo
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Rol
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Fecha de Creación
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-x border-gray-400">
                                        Ultima Modificacion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-orange-300 border-b border border-gray-400">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $user->id }}
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                        {{ $user->name }}
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                        {{ $user->email }}
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                        {{ $user->roles->pluck('name')->implode(', ') }}
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                        {{ $user->created_at->format('d/m/Y') }}
                                    </td>
                                    <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                                        {{ $user->updated_at->format('d/m/Y') }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('profile.edit', $user->id) }}"
            class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 my-2 px-4 rounded inline-block">
            Editar Mi Perfil
        </a>
    </div>
@endsection
