@extends('layout')

@section('content')
<div class="container">
    <h1>Autores</h1>
    <a href="{{ route('autores.create') }}" class="btn btn-primary">añadir autor</a>
<br>
<br>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($autores as $autor)
                <tr>
                    <td>{{ $autor->id }}</td>
                    <td>{{ $autor->nombre }}</td>
                    <td>{{ $autor->apellido }}</td>
                    <td>{{ $autor->fecha_nacimiento }}</td>
                    <td>
                        <a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-warning">editar</a>
                        <form action="{{ route('autores.destroy', $autor->id) }}" method="POST" style="display:inline-block;">
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
