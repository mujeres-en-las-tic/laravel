@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')
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
