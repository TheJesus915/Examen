@extends('layout')

@section('content')
<div class="container">
    <h1>Crear Autor Nuevo</h1>
    <form action="{{ route('autores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <br>
        <div class="form-group">
            <label for="apellido">apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <br>
        <div class="form-group">
            <label for="fecha_nacimiento">fecha de nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">guardar</button>
    </form>
</div>
@endsection
