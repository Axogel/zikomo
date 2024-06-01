@extends('layouts.dashboard')

@section('title', 'Nuevo Usuario')

@section('content')
<div class="bg-gray-100 p-6 rounded-lg shadow-lg ">
    <h2 class="text-2xl font-bold mb-4">Crear Usuario</h2>
    <form>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="nombre">Nombre</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" placeholder="Ingrese el Nombre del Usuario">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="apellido">Apellido</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="apellido" type="text" placeholder="Ingrese el Apellido del Usuario">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="direccion">Nombre de Usuario</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="direccion" type="text" placeholder="Ingrese la Dirección del Usuario">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="cedula">Correo</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Ingrese el Correo del Usuario">
      </div>

      <div class="mb-6">
        <label class="block text-gray-700 font-bold mb-2" for="telefono">Telefono</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telefono" type="tel" placeholder="Ingrese el Número de Teléfono del Usuario">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="password">Contraseña</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="Ingrese la Contraseña del Usuario">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="password">Confirmar Contraseña</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="Confirme la Contraseña del Usuario">
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
