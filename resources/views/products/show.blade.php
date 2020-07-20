@extends('layouts.app')

@section('title', 'Detalles del Producto')

@section('content')
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


@endsection
