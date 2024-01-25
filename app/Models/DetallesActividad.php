<?php

// app/Models/DetallesActividad.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallesActividad extends Model
{
    protected $fillable = ['nombre', 'lugar', 'duracion'];

    // Relación uno a muchos con la tabla Actividades
    public function actividades()
    {
        return $this->hasMany(Actividad::class);
    }
}