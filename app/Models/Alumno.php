<?php

// app/Models/Alumno.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['grupo_id', 'telefono', 'correo', 'apellido', 'nombre'];

    // Relación muchos a uno con la tabla Grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
