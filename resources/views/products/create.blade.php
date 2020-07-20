@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
  <h1>Crear Producto</h1>  
  <a href="{{ route('products.index') }}">Todos los Productos</a>

  <form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">

    @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="description">Descripción</label>
    <input type="text" name="description" id="description" value="{{ old('description') }}">

    @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="price">Precio</label>
    <input type="number" name="price" id="price" value="{{ old('price') }}">

    @error('price')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="submit" value="Guardar Producto">

  </form>


@endsection
