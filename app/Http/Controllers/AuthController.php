<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Mostrar formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Procesar registro
    public function register(Request $request)
    {
        // Validación de datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Crear usuario
        $user = \App\Models\User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Iniciar sesión después del registro
        Auth::login($user);

        // Redirigir a la ruta deseada después del registro
        return redirect('/dashboard');
    }

    // Mostrar formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar inicio de sesión
    public function login(Request $request)
    {
        // Validación de datos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Intentar iniciar sesión
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->intended('/dashboard'); // Redirigir a la ruta deseada
        } else {
            // Autenticación fallida
            return back()->with('error', 'Credenciales incorrectas')->withInput($request->only('email'));
        }
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
