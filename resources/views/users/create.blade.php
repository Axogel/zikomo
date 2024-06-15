@extends('layouts.dashboard')

@section('title', 'Nuevo Usuario')

@section('content')
    <div class="bg-orange-300 p-6 rounded-lg shadow-lg shadow-orange-400">
        <h2 class="text-2xl font-bold mb-4">Crear Usuario</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Nombre</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3  text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="name" name="name" type="text" placeholder="Ingrese el Nombre del Usuario" required>
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Correo</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="email" name="email" type="email" placeholder="Ingrese el Correo del Usuario" required>
                @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">Contraseña</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="password" name="password" type="password" placeholder="Ingrese la Contraseña del Usuario" required>
                @error('password')
                    <p class="text-gray-500 text-s italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password_confirmation">Confirmar Contraseña</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="password_confirmation" name="password_confirmation" type="password"
                    placeholder="Confirme la Contraseña del Usuario" required>
                @error('password_confirmation')
                    <p class="text-gray-500 text-s italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="role">Rol Seleccionado</label>
                <select name="role" id="role"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200">
                    <option value="" disabled selected>Seleccione una Opción</option>

                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>



            <div class="flex items-center justify-between">
                <button
                    class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Crear
                </button>
                <button
                    class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button" onclick="window.location.href='{{ route('users.index') }}'">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
@endsection
