<?php

// app/Http/Controllers/ActividadController.php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\DetallesActividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades.index', compact('actividades'));
    }

    public function create()
    {
        $detallesActividades = DetallesActividad::all();
        return view('actividades.create', compact('detallesActividades'));
    }

    public function store(Request $request)
    {
        $actividad = Actividad::create($request->all());
        return redirect()->route('actividades.index');
    }

    public function show(Actividad $actividad)
    {
        return view('actividades.show', compact('actividad'));
    }

    public function edit(Actividad $actividad)
    {
        $detallesActividades = DetallesActividad::all();
        return view('actividades.edit', compact('actividad', 'detallesActividades'));
    }

    public function update(Request $request, Actividad $actividad)
    {
        $actividad->update($request->all());
        return redirect()->route('actividades.index');
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades.index');
    }
}
