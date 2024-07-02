@extends('layout')

@section('content')
<div class="container">
    <h1>Editar Autor</h1>
    <form action="{{ route('autores.update', $autor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $autor->nombre }}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="apellido">apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $autor->apellido }}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="fecha_nacimiento">fecha de nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $autor->fecha_nacimiento }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">actualizar</button>
    </form>
</div>
@endsection
