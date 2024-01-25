<?php

// app/Models/Actividad.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = ['descripcion', 'detalle_id'];

    // Relación muchos a uno con la tabla DetallesActividad
    public function detallesActividad()
    {
        return $this->belongsTo(DetallesActividad::class, 'detalle_id');
    }

    // Relación muchos a muchos con la tabla Profesor
    public function profesores()
    {
        return $this->belongsToMany(Profesor::class, 'actividades_profesor_grupo');
    }
}
