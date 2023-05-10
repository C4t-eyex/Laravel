@extends('layout/template')

@section('title', 'Estudiantes | GESTOR NEKO')

@section('encabezado')

<link rel="shortcut icon" href="{{ asset('pink_icon.png') }}" type="image/png">

@section('contenido')

<main>
    <style>
        .container.py-4 {
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 10px;
        }    
    </style> 
    <blockquote class="blockquote" style="padding: 4%; background-color: #e4a162; width: 100%; margin: 0;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="display-2"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                      </svg>   Listado de estudiantes</h2>
                    
                </div>
                
            </div>
        </div>
    </blockquote>
    <div class="container py-4">

        <div class="container" style="padding: 2%">
            <div class="col-md-12">
                <a href="{{ url('administradores')}}" class="btn btn-secondary">Regresar</a>
                <a href="{{ url('estudiantes/create')}}" class="btn btn-primary ml-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                  </svg>  Nuevo estudiante</a>
            </div>
       </div>

       <div class="container py-1">
            <table class="table tale-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Fecha de inicio</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Grupo</th>
                        <th></th>
                        <th></th>
                    </tr>  
                </thead>

                <tbody>
                    <tr>
                        @foreach($estudiantes as $estudiante)
                        <tr>
                            <td>{{ $estudiante->id}}</td>
                            <td>{{ $estudiante->matricula}}</td>
                            <td>{{ $estudiante->nombre}}</td>
                            <td>{{ $estudiante->fecha_inicio}}</td>
                            <td>{{ $estudiante->telefono}}</td>
                            <td>{{ $estudiante->email}}</td>
                            <td>{{ $estudiante->grupo->nombre}}</td>
                            <td><a href="{{ url('estudiantes/'.$estudiante->id.'/edit') }}" class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>  Editar</a></td>
                            <td>
                                <form action="{{ url('estudiantes/'.$estudiante->id) }}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                      </svg>  Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tr>
                </tbody>
            </table>
       </div>
        
    </div>
</main>