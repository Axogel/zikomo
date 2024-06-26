@extends('layouts.dashboard')

@section('title', 'Nuevo Proveedor')

@section('content')
    <div class="bg-orange-300 p-6 rounded-lg shadow-lg shadow-orange-400">
        <h2 class="text-2xl font-bold mb-4">Crear Proveedor</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="nombre">Nombre</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="nombre" type="text" placeholder="Ingrese el Nombre del Proveedor">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="apellido">Apellido</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="apellido" type="text" placeholder="Ingrese el Apellido del Proveedor">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="direccion">Direccion</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="direccion" type="text" placeholder="Ingrese la Dirección del Proveedor">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="cedula">Cédula de Identidad</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="cedula" type="text" placeholder="Ingrese la Cédula de Identidad del Proveedor">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Correo del Proveedor</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="email" type="email" placeholder="Ingrese el Correo Electrónico del Proveedor">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="empresa">Empresa</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="empresa" type="text" placeholder="Ingrese la Empresa Proveedora">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="telefono">Telefono</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                    id="telefono" type="tel" placeholder="Ingrese el Número de Teléfono del Proveedor">
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline "
                    type="button">
                    Crear
                </button>
                <button
                    class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
@endsection
