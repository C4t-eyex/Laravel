@extends('layout/template')

@section('title', 'Editar estudiantes | GESTOR NEKO')

@section('encabezado')

<link rel="shortcut icon" href="{{ asset('pink_icon.png') }}" type="image/png">

@section('contenido')

<main>
    <style>
        input:invalid,
        select:invalid {
            border: 2px solid red;
        }

        input:valid,
        select:valid {
            border: 2px solid green;
        }
    </style>
    <blockquote class="blockquote" style="padding: 4%; background-color: #4058FC; width: 100%; margin: 0;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="display-2"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                      </svg>   Editar administrador</h2>
                    
                </div>
                
            </div>
        </div>
    </blockquote>
    <div class="container py-4">

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ url('administradores/' .$administrador->id)}}" method="post">
            @method("PUT")
            @csrf
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Correo Electrónico:</label>
                    <div class="col-sm-5">
                        <input ttype="email" class="form-control" id="email" name="email" maxlength="50" value="{{ $administrador->email }}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control "name="nombre" id="nombre" maxlength="120" value="{{ $administrador->nombre }}" required>
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Contraseña:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control "name="password" id="password" value="{{ $administrador->contrasena }}" required>
                    </div>
            </div>

            <a href="{{ url('estudiantes')}}" class="btn btn-secondary">Regresar</a>
            <button type="sbmit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>