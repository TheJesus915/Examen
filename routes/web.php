<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;

//son todas las rutas para los autores y Libros

Route::resource('autores', AutorController::class); 

Route::resource('libros', LibroController::class);

Route::get('/', function () {
    return view('layout');
});

Route::resource('autores', AutorController::class);

Route::resource('libros', LibroController::class);

Route::get('buscar-libros', [LibroController::class, 'buscar'])->name('libros.buscar');
