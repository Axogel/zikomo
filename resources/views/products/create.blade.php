@extends('layouts.dashboard')

@section('title', 'Nuevo Producto')

@section('content')
    <div class="bg-orange-300 p-6 rounded-lg shadow-lg shadow-orange-400">
        <h2 class="text-2xl font-bold mb-4">Crear Productos</h2>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="nombre">Producto</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3  text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                id="producto" type="text" placeholder="Ingrese el Nombre del Producto">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="nombre">Proveedor</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                id="nombre" type="text" placeholder="Ingrese el Proveedor del Producto">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="precio">Precio</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                id="precio" type="text" placeholder="Ingrese el Precio del Producto">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="talla">Unidades</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-orange-200 placeholder-gray-700"
                id="unidades" type="text" placeholder="Ingrese las Unidades del Producto">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Seleccione El Tipo De Producto</label>
            <select
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  bg-orange-200">
                <option>Selecione una Opcion</option>
                <option>Producto Final</option>
                <option>Materia Prima</option>
            </select>
        </div>
        <div class="flex items-center justify-between">
            <button
                class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button">
                Crear
            </button>
            <button
                class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button">
                Cancelar
            </button>
        </div>
    </div>
@endsection
