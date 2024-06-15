@extends('layouts.dashboard')

@section('title', 'Editar Perfil')

@section('content')
    <div class="bg-orange-300 p-6 rounded-lg shadow-lg shadow-orange-400">
        <h2 class="text-2xl font-bold mb-4">Editar Perfil</h2>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Nombre</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="name" name="name" type="text" value="{{ $user->name }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Correo</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="email" name="email" type="email" value="{{ $user->email }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">Contraseña</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="password" name="password" type="password" placeholder="Ingrese una nueva contraseña (opcional)">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password_confirmation">Confirmar Contraseña</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="password_confirmation" name="password_confirmation" type="password"
                    placeholder="Confirme la nueva contraseña (opcional)">
            </div>
            @role('admin')
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="role">Rol Seleccionado</label>
                    <select name="role" id="role"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200">
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                {{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endrole
            <div class="flex items-center justify-between">
                <button
                    class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Actualizar
                </button>
                <a href="{{ route('profile') }}"
                    class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
