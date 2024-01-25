<?php

// app/Http/Controllers/ActividadesProfesorGrupoController.php

namespace App\Http\Controllers;

use App\Models\ActividadesProfesorGrupo;
use Illuminate\Http\Request;

class ActividadesProfesorGrupoController extends Controller
{
    public function index()
    {
        $actividadesProfesorGrupo = ActividadesProfesorGrupo::all();
        return view('actividades_profesor_grupo.index', compact('actividadesProfesorGrupo'));
    }

    public function create()
    {
        // Puedes personalizar según tus necesidades
    }

    public function store(Request $request)
    {
        // Puedes personalizar según tus necesidades
    }

    public function show(ActividadesProfesorGrupo $actividadesProfesorGrupo)
    {
        return view('actividades_profesor_grupo.show', compact('actividadesProfesorGrupo'));
    }

    public function edit(ActividadesProfesorGrupo $actividadesProfesorGrupo)
    {
        // Puedes personalizar según tus necesidades
    }

    public function update(Request $request, ActividadesProfesorGrupo $actividadesProfesorGrupo)
    {
        // Puedes personalizar según tus necesidades
    }

    public function destroy(ActividadesProfesorGrupo $actividadesProfesorGrupo)
    {
        $actividadesProfesorGrupo->delete();
        return redirect()->route('actividades_profesor_grupo.index');
    }
}
