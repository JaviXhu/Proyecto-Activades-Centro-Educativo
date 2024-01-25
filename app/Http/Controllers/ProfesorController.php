<?php

// app/Http/Controllers/ProfesorController.php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesor.index', compact('profesores'));
    }

    public function create()
    {
        return view('profesor.create');
    }

    public function store(Request $request)
    {
        $profesor = Profesor::create($request->all());
        return redirect()->route('profesor.index');
    }

    public function show(Profesor $profesor)
    {
        return view('profesor.show', compact('profesor'));
    }

    public function edit(Profesor $profesor)
    {
        return view('profesor.edit', compact('profesor'));
    }

    public function update(Request $request, Profesor $profesor)
    {
        $profesor->update($request->all());
        return redirect()->route('profesor.index');
    }

    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->route('profesor.index');
    }
}
