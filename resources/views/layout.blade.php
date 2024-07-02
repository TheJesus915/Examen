<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>App de Libros y Autores</title>
</head>
<body>
    <h1>Escoge para ver</h1>

    <nav>
        <ul>
            <li><a href="{{ route('autores.index') }}">Autores</a></li>
            <li><a href="{{ route('libros.index') }}">Libros</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
