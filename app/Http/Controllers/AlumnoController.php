<?php

// app/Http/Controllers/ActividadesProfesorGrupoController.php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Grupo;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumno.index', compact('alumnos'));
    }

    public function create()
    {
        $grupos = Grupo::all();
        return view('alumno.create', compact('grupos'));
    }

    public function store(Request $request)
    {
        $alumno = Alumno::create($request->all());
        return redirect()->route('alumno.index');
    }

    public function show(Alumno $alumno)
    {
        return view('alumno.show', compact('alumno'));
    }

    public function edit(Alumno $alumno)
    {
        $grupos = Grupo::all();
        return view('alumno.edit', compact('alumno', 'grupos'));
    }

    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        return redirect()->route('alumno.index');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumno.index');
    }
}