<?php

// app/Models/Profesor.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $fillable = ['nombre', 'apellido', 'correo', 'telefono'];

    // Relación muchos a muchos con la tabla Actividades
    public function actividades()
    {
        return $this->belongsToMany(Actividad::class, 'actividades_profesor_grupo');
    }
}
