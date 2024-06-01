@extends('layouts.dashboard')

@section('title', 'Nueva Factura')

@section('content')
<div class="bg-gray-100 p-6 rounded-lg shadow-lg ">
    <h2 class="text-2xl font-bold mb-4">Crear Factura</h2>
    <form>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="cliente">Nombre Cliente</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cliente" type="text" placeholder="Ingrese el Nombre del Cliente">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="cliente">Cédula Cliente</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cedula" type="text" placeholder="Ingrese la Cédula del Cliente">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="descripcion">Descripción</label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" placeholder="Ingrese la Descripción de la Factura"></textarea>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="monto">Monto</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="monto" type="number" placeholder="Ingrese el Monto de la Factura">
      </div>

      <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="fecha">Fecha</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha" type="date" placeholder="Ingrese la Fecha de la Factura">
      </div>

      <div class="flex items-center justify-between">
        <button class="bg-zinc-600 hover:bg-zinc-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Crear
        </button>
        <button class="bg-zinc-600 hover:bg-zinc-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Cancelar
        </button>
      </div>
    </form>
  </div>
@endsection
