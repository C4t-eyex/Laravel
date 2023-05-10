<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([   
            'email' => 'required|unique:administradores|email',
            'password' => 'required|max:20',
        ]);

        $administradors = Administrador::all();

        foreach ($administradors as $administrador)
            if ($administrador->email == 'email' && $administrador->contrasena == 'password')
                return view("administradores");
            else
                return redirect()->back()->withErrors(['email' => 'Los datos de inicio de sesión no son válidos']);

    }
}