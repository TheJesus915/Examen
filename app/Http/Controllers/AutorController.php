<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{

    public function index()
    {
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }


    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request) //conesto puedes crear los autores
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'fecha_nacimiento' => 'required|date',
        ]);

        Autor::create($request->all());

        return redirect()->route('autores.index')->with('success', 'Autor creado con éxito');
    }


    public function edit($id) //conesto puedes edita los autores
    {
        $autor = Autor::find($id);
        return view('autores.edit', compact('autor'));
    }


    public function update(Request $request, $id) //conesto puedes edita los autores
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'fecha_nacimiento' => 'required|date',
        ]);

        $autor = Autor::find($id);
        $autor->update($request->all());

        return redirect()->route('autores.index')->with('success', 'Autor actualizado con éxito');
    }


    public function destroy($id) //conesto puedes edita los autores
    {
        Autor::find($id)->delete();
        return redirect()->route('autores.index')->with('success', 'Autor eliminado con éxito');
    }
}

