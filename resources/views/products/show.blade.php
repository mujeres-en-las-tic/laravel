@extends('layouts.app')

@section('title', 'Detalles del Producto')

@section('content')

<div>
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Detalles de {{ $product->name }}
    </h3>
     <p class="max-w-2xl text-sm leading-5 text-gray-500">
      Sku: {{ $product->sku }}
    </p>
  </div>
  <div class="mt-5 border-t border-gray-200 pt-5">
    <dl>
      <div class=" sm:grid sm:grid-cols-3 sm:gap-4">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Nombre
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $product->name }}
        </dd>
      </div>
      <div class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Precio
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $product->price }}
        </dd>
      </div>
     
      <div class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Descripción
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $product->description }}
        </dd>
      </div>

      <div class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Categoría
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $product->category->name }}
        </dd>
      </div>

      <div class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          Fotografias
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          <ul class="border border-gray-200 rounded-md">
            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
              <div class="w-0 flex-1 flex items-center">
                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"/>
                </svg>
                <span class="ml-2 flex-1 w-0 truncate">
                  resume_back_end_developer.pdf
                </span>
              </div>
              <div class="ml-4 flex-shrink-0">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                  Download
                </a>
              </div>
            </li>
            <li class="border-t border-gray-200 pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
              <div class="w-0 flex-1 flex items-center">
                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"/>
                </svg>
                <span class="ml-2 flex-1 w-0 truncate">
                  coverletter_back_end_developer.pdf
                </span>
              </div>
              <div class="ml-4 flex-shrink-0">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                  Descargar
                </a>
              </div>
            </li>
          </ul>
        </dd>
      </div>
    </dl>
  </div>
</div>

{{-- 
  <h1>Detalles del Producto</h1>  

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
--}}

@endsection
