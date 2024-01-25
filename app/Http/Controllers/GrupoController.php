<?php

// app/Http/Controllers/GrupoController.php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index()
    {
        $grupos = Grupo::all();
        return view('grupo.index', compact('grupos'));
    }

    public function create()
    {
        return view('grupo.create');
    }

    public function store(Request $request)
    {
        $grupo = Grupo::create($request->all());
        return redirect()->route('grupo.index');
    }

    public function show(Grupo $grupo)
    {
        return view('grupo.show', compact('grupo'));
    }

    public function edit(Grupo $grupo)
    {
        return view('grupo.edit', compact('grupo'));
    }

    public function update(Request $request, Grupo $grupo)
    {
        $grupo->update($request->all());
        return redirect()->route('grupo.index');
    }

    public function destroy(Grupo $grupo)
    {
        $grupo->delete();
        return redirect()->route('grupo.index');
    }
}
