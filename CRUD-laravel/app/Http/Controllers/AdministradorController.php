<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administradors = Administrador::all();
        return view('administradores.index', ['administradores' => $administradors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administradores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([   
            'email' => 'required|unique:administradores|email',
            'nombre' => 'nullable|max:255',
            'password' => 'required|max:10',
        ]);

        $administrador = new Administrador();
        $administrador->email = $request->input('email');
        $administrador->nombre = $request->input('nombre');
        $administrador->contrasena = $request->input('password');
        $administrador->save();

        return view("administradores.message", ['msg' => "Administrador guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $administrador = Administrador::find($id);
        return view('administradores.edit', ['administrador' => $administrador]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:administradores,email,' .$id,
            'nombre' => 'nullable|max:255',
            'password' => 'required|max:10',
        ]);

        $administrador = Administrador::find($id);
        $administrador->email = $request->input('email');
        $administrador->nombre = $request->input('nombre');
        $administrador->contrasena = $request->input('password');
        $administrador->save();

        return view("administradores.message", ['msg' => "Administrador modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $administrador = Administrador::find($id);
        $administrador->delete();

        return redirect("administradores");
    }
}
