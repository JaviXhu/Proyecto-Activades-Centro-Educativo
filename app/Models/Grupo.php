<?php

// app/Models/Grupo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['numeroAlumnos'];

    // Relación uno a muchos con la tabla Alumno
    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
}
