@extends('layouts.dashboard')

@section('title', 'Nueva Orden')

@section('content')
<div class="bg-gray-100 p-6 rounded-lg shadow-lg ">
    <h2 class="text-2xl font-bold mb-4">Crear Orden de Pedido</h2>
    <form>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="cliente">Cliente</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cliente" type="text" placeholder="Ingrese el Nombre del Cliente">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="cedula">Cédula del Cliente</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cedula" type="text" placeholder="Ingrese la Cédula del Cliente">
      </div>
    <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Seleccione El Tipo De Producto</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option>Selecione una Opcion</option>
                <option>Pastel</option>
                <option>Empanada</option>
                <option>Tequeño</option>
                <option>Bebida</option>
            </select>
    </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="cantidad">Cantidad</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cantidad" type="number" placeholder="Ingrese la Cantidad a Ordenar">
      </div>

      <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="fecha_entrega">Fecha de Entrega</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha_entrega" type="date" placeholder="Ingrese la Fecha de Entrega">
      </div>

      <div class="flex items-center justify-between">
        <button class="bg-zinc-600 hover:bg-zinc-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Crear Orden
        </button>
        <button class="bg-zinc-600 hover:bg-zinc-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Cancelar
        </button>
      </div>
    </form>
  </div>

@endsection
