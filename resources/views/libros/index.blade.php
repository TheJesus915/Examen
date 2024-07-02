@extends('layout')

@section('content')
<div class="container">
    <h1>Libros</h1>

    <form action="{{ route('libros.buscar') }}" method="GET" class="form-inline mb-3">
        <input type="text" name="consulta" class="form-control mr-2" placeholder="Buscar por título o por autor">
        <button type="submit" class="btn btn-primary">buscar</button>
    </form>
    <br>
    <a href="{{ route('libros.create') }}" class="btn btn-primary mb-3">añadir libro</a>

    <br>
    <br>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Fecha de Publicación</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->fecha_publicacion }}</td>
                    <td>{{ $libro->autor_nombre }} {{ $libro->autor_apellido }}</td>
                    <td>{{ $libro->precio }}</td>
                    <td>
                        <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning">editar</a>
                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

