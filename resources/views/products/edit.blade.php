@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')

<form action="{{ route('products.update', [$product]) }}" method="POST">
    @csrf

    @method('PUT')

  <div>
    <div>
      <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          Crear Producto
        </h3>
        <p class="mt-1 text-sm leading-5 text-gray-500">
          
        </p>
      </div>
      <div class="mt-6 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
        
        <div class="sm:col-span-3">
          <label 
          for="name" 
          class="block text-sm font-medium leading-5 text-gray-700">
            Nombre
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <input 
            type="text"
            id="name" 
            name="name"
            value="{{ old('name', $product->name) }}"
            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
            />
          </div>
          @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div class="sm:col-span-3">
          <label for="price" class="block text-sm font-medium leading-5 text-gray-700">
            Precio
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <input 
            type="number"
            id="price" 
            name="price"
            value="{{ old('price', $product->price) }}"
            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          </div>
          @error('price')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div class="sm:col-span-6">
          <label for="description" class="block text-sm font-medium leading-5 text-gray-700">
            Descripción
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <textarea 
            id="description" 
            name="description"
            rows="3" 
            class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
              {{ old('description', $product->description) }}
              </textarea>
          </div>
          
          <p class="mt-2 text-sm text-gray-500">Detalles del producto.</p>

          @error('description')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>
  </div>
  <div class="mt-8 border-t border-gray-200 pt-5">
    <div class="flex justify-end">
      <span class="inline-flex rounded-md shadow-sm">
      <a href="{{ route('products.index') }}" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
          Cancelar
      </a>
      </span>
      <span class="ml-3 inline-flex rounded-md shadow-sm">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
          Guardar Producto
        </button>
      </span>
    </div>
  </div>
</form>

  <h1>Editar Producto</h1>

  <a href="{{ route('products.index') }}">Todos los Productos</a>

  <form action="{{ route('products.update', [$product]) }}" method="POST">
    @csrf

    @method('PUT')

    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}">

    @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="description">Descripción</label>
    <input type="text" name="description" id="description" value="{{ old('description', $product->description) }}">

    @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="price">Precio</label>
    <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}">

    @error('price')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="submit" value="Actualizar Producto">

  </form>
  
@endsection
