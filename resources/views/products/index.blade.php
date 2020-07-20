@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
  <h1>Lista de Productos</h1> 
  
  <div class="flex flex-col">
  <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
      <table class="min-w-full">
        <thead>
          <tr>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Name
            </th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Title
            </th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Email
            </th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Role
            </th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
              Bernard Lane
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Director, Human Resources
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              bernardlane@example.com
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Owner
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
              <a href="#" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
            </td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
              Bernard Lane
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Director, Human Resources
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              bernardlane@example.com
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Owner
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
              <a href="#" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
              Bernard Lane
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Director, Human Resources
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              bernardlane@example.com
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Owner
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
              <a href="#" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
            </td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
              Bernard Lane
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Director, Human Resources
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              bernardlane@example.com
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Owner
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
              <a href="#" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
            </td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
              Bernard Lane
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Director, Human Resources
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              bernardlane@example.com
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
              Owner
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
              <a href="#" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

  <a href="{{ route('products.create') }}">Crear Producto</a>
  
  @foreach ($products as $product)
    
    <h4><strong>Producto:</strong> {{ $product->name }} </h4>
    <p><strong>Descripción:</strong> {{ $product->description }} </p>
    <strong>Precio:</strong> {{ $product->price }}
    <br>
    <a href="{{ route('products.edit', [$product]) }}">Editar Producto</a>

    <form action="{{ route('products.destroy', [$product] ) }}" method="POST">
      @csrf

      @method('delete')
      
      <input type="submit" value="Eliminar Producto">

    </form>

    <hr>
    
  @endforeach

@endsection
