<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

use App\Http\Controllers\DetallesActividadController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ActividadesProfesorGrupoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

// Rutas para DetallesActividad
Route::resource('detalles_actividades', DetallesActividadController::class);

// Rutas para Profesor
Route::resource('profesores', ProfesorController::class);

// Rutas para Actividad
Route::resource('actividades', ActividadController::class);

// Rutas para Grupo
Route::resource('grupos', GrupoController::class);

// Rutas para Alumno
Route::resource('alumnos', AlumnoController::class);

// Rutas para ActividadesProfesorGrupo
Route::resource('actividades_profesor_grupo', ActividadesProfesorGrupoController::class);






// Rutas de registro e inicio de sesión
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



