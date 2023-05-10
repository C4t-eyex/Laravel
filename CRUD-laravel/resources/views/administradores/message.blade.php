@extends('layout/template')

@section('title', 'Registrar administrador | GESTOR NEKO')

@section('encabezado')

<link rel="shortcut icon" href="{{ asset('pink_icon.png') }}" type="image/png">

@section('contenido')

<main>
    <blockquote class="blockquote" style="padding: 1%; background-color: #565E64; width: 100%; margin: 0; color:aliceblue">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="display-2"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg>  {{ $msg}}</h2>     
                </div>
                
            </div>
        </div>
    </blockquote>

    <div class="container py-10">
        <div class="container" style="padding: 2%">
            <div class="col-md-12">
                <a href="{{ url('administradores') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</main>