<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Grupo;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', ['estudiantes' => $estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.create', ['grupos' => Grupo::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricula' => 'required|unique:estudiantes|max:10',
            'nombre' => 'required|max:255',
            'fecha_inicio' => 'required|date',
            'telefono' => 'required',
            'email' => 'nullable|email',
            'password' => 'required|max:10',
            'grupo' => 'required',
        ]);

        $estudiante = new Estudiante();
        $estudiante->matricula = $request->input('matricula');
        $estudiante->nombre = $request->input('nombre');
        $estudiante->fecha_inicio = $request->input('fecha_inicio');
        $estudiante->telefono = $request->input('telefono');
        $estudiante->email = $request->input('email');
        $estudiante->contrasena = $request->input('password');
        $estudiante->grupo_id = $request->input('grupo');
        $estudiante->save();

        return view("estudiantes.message", ['msg' => "Estudiante guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiantes.edit', ['estudiante' => $estudiante, 'grupos' => Grupo::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'matricula' => 'required|max:10|unique:estudiantes,matricula,' .$id,
            'nombre' => 'required|max:255',
            'fecha_inicio' => 'required|date',
            'telefono' => 'required',
            'email' => 'nullable|email',
            'password' => 'required|max:10',
            'grupo' => 'required',
        ]);

        $estudiante = Estudiante::find($id);
        $estudiante->matricula = $request->input('matricula');
        $estudiante->nombre = $request->input('nombre');
        $estudiante->fecha_inicio = $request->input('fecha_inicio');
        $estudiante->telefono = $request->input('telefono');
        $estudiante->email = $request->input('email');
        $estudiante->contrasena = $request->input('password');
        $estudiante->grupo_id = $request->input('grupo');
        $estudiante->save();

        return view("estudiantes.message", ['msg' => "Estudiante modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        return redirect("estudiantes");
    }
}
