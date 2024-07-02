@extends('layout')

@section('content')
<div class="container">
    <h1>Editar Libro</h1>
    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $libro->titulo }}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="fecha_publicacion">fecha de publicación</label>
            <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" value="{{ $libro->fecha_publicacion }}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="autor_id">autor</label>
            <select class="form-control" id="autor_id" name="autor_id" required>
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}" {{ $autor->id == $libro->autor_id ? 'selected' : '' }}>
                        {{ $autor->nombre }} {{ $autor->apellido }}
                    </option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" value="{{ $libro->precio }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">actualizar</button>
    </form>
</div>
@endsection
