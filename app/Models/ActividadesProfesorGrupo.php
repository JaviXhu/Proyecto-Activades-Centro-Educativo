<?php

// app/Models/ActividadesProfesorGrupo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadesProfesorGrupo extends Model
{
    protected $fillable = ['grupo_id', 'actividad_id', 'profesor_id'];

    // Puedes agregar otras relaciones o métodos según sea necesario
}
