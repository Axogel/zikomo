@extends('layouts.dashboard')

@section('title', 'Nuevo Empleado')

@section('content')
<div class="bg-gray-100 p-6 rounded-lg shadow-lg ">
    <h2 class="text-2xl font-bold mb-4">Crear Empleado</h2>
    <form>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="nombre">Nombre</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" placeholder="Ingrese el Nombre del Empleado">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="apellido">Apellido</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="apellido" type="text" placeholder="Ingrese el Apellido del Empleado">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="direccion">Direccion</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="direccion" type="text" placeholder="Ingrese la Dirección del Empleado">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="cedula">Cédula de Identidad</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cedula" type="text" placeholder="Ingrese la Cédula de Identidad del Empleado">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email">Correo</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Ingrese el Correo Electrónico del Empleado">
      </div>

      <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="fecha">Fecha de Nacimiento</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha" type="date" placeholder="Ingrese la Fecha de Nacimiento del Empleado">
        </div>

      <div class="mb-6">
        <label class="block text-gray-700 font-bold mb-2" for="telefono">Telefono</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telefono" type="tel" placeholder="Ingrese el Número de Teléfono del Empleado">
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
