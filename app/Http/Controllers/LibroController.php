<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{

    public function index()
    {
        $libros = Libro::with('autor')->get();
        return view('libros.index', compact('libros'));
    }


    public function create() //conesto puedes crear los Libros
    {
        $autores = Autor::all();
        return view('libros.create', compact('autores'));
    }


    public function store(Request $request) //conesto puedes crear los Libros
    {
        $request->validate([
            'titulo' => 'required|max:100',
            'fecha_publicacion' => 'required|date',
            'autor_id' => 'required|exists:autors,id',
            'precio' => 'required|numeric',
        ]);

        Libro::create($request->all());

        return redirect()->route('libros.index')->with('success', 'Libro creado con éxito');
    }

    public function edit($id)
    {
        $libro = Libro::find($id);
        $autores = Autor::all();
        return view('libros.edit', compact('libro', 'autores'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:100',
            'fecha_publicacion' => 'required|date',
            'autor_id' => 'required|exists:autors,id',
            'precio' => 'required|numeric',
        ]);

        $libro = Libro::find($id);
        $libro->update($request->all());

        return redirect()->route('libros.index')->with('success', 'Libro actualizado con éxito');
    }

    public function destroy($id)
    {
        Libro::find($id)->delete();
        return redirect()->route('libros.index')->with('success', 'Libro eliminado con éxito');
    }

    public function buscar(Request $request)
    {
        $consulta = $request->input('consulta');
        $libros = DB::select('CALL BuscarLibros2(?)', [$consulta]);

        return view('libros.index', compact('libros'));
    }
}
