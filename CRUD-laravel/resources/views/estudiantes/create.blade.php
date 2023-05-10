@extends('layout/template')

@section('title', 'Registrar estudiantes | GESTOR NEKO')

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
    <blockquote class="blockquote" style="padding: 1%; background-color: #FCE01B; width: 100%; margin: 0;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="display-2"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                      </svg>   Registrar estudiante</h2>
                    
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

        <form action="{{ url('estudiantes')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control "name="matricula" id="matricula" maxlength="10" value="{{ old('matricula')}}" required>
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control "name="nombre" id="nombre" maxlength="120" value="{{ old('nombre')}}" required>
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="fecha_inicio" class="col-sm-2 col-form-label">Fecha de Inicio:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control "name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio')}}" required>
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                    <div class="col-sm-5">
                        <input type="tel" class="form-control" id="telefono" name="telefono" maxlength="20" value="{{ old('telefono')}}" required>
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Correo Electrónico:</label>
                    <div class="col-sm-5">
                        <input ttype="email" class="form-control" id="email" name="email" maxlength="50" value="{{ old('email')}}">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Contraseña:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control "name="password" id="password" value="{{ old('password')}}" required>
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="grupo" class="col-sm-2 col-form-label">Grupo:</label>
                <div class="col-sm-5">
                    <select name="grupo" id="grupo" class="form-select" required>
                        <option value="">Seleccionar grupo</option>
                        @foreach($grupos as $grupo)
                        <option value="{{ $grupo->id}}">{{$grupo->nombre}}</option>
                        @endforeach
                    </select>
                </div>        
            </div>

            <a href="{{ url('estudiantes')}}" class="btn btn-secondary">Regresar</a>
            <button type="sbmit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>