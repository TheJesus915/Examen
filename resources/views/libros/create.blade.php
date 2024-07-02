@extends('layout')

@section('content')
<div class="container">
    <h1>Crear Libro Nuevo</h1>
    <h2>NO REPETIR NOMBRE DE LIBRO</h2>
    <br>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <br>
        <div class="form-group">
            <label for="fecha_publicacion">fecha de Publicación</label>
            <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" required>
        </div>
        <br>
        <div class="form-group">
            <label for="autor_id">autor</label>
            <select class="form-control" id="autor_id" name="autor_id" required>
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}">{{ $autor->nombre }} {{ $autor->apellido }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="precio">precio</label>
            <input type="text" class="form-control" id="precio" name="precio" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">guardar</button>
    </form>
</div>
@endsection
