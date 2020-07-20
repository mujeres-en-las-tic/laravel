@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
  <h1>Lista de Productos</h1>  
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
