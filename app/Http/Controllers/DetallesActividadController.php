<?php

// app/Http/Controllers/DetallesActividadController.php

namespace App\Http\Controllers;

use App\Models\DetallesActividad;
use Illuminate\Http\Request;

class DetallesActividadController extends Controller
{
    public function index()
    {
        $detallesActividad = DetallesActividad::all();
        return view('detalles_actividad.index', compact('detallesActividad'));
    }

    public function create()
    {
        return view('detalles_actividad.create');
    }

    public function store(Request $request)
    {
        $detalleActividad = DetallesActividad::create($request->all());
        return redirect()->route('detalles_actividad.index');
    }

    public function show(DetallesActividad $detalleActividad)
    {
        return view('detalles_actividad.show', compact('detalleActividad'));
    }

    public function edit(DetallesActividad $detalleActividad)
    {
        return view('detalles_actividad.edit', compact('detalleActividad'));
    }

    public function update(Request $request, DetallesActividad $detalleActividad)
    {
        $detalleActividad->update($request->all());
        return redirect()->route('detalles_actividad.index');
    }

    public function destroy(DetallesActividad $detalleActividad)
    {
        $detalleActividad->delete();
        return redirect()->route('detalles_actividad.index');
    }
}
