@extends('layout/template')

@section('title', 'Gestor univesitario NEKO')

@section('encabezado')

<link rel="shortcut icon" href="{{ asset('pink_icon.png') }}" type="image/png">
<link href="style.css" rel="stylesheet">

@section('contenido')

<main>
    <div class="container py-4" style="display: flex; justify-content: center; padding: 2%;">
        <div class="row" style="padding-top: 15%;">
            <div class="col-md-12">
                <div class="jumbotron card card-block py-4" style="padding: 8%; background-color: #0D6EFD;">
                    <h2 style="color: #fff;">
                        Bienvenido al Gestor NEKO (CRUD hecho en Laravel 10)
                    </h2>
                    <p style="color: #fff;">
                        Este CRUD tiene el propósito de almacenar los datos básicos de los administradores, de los estudiantes, y seleccionar los grupos, los cuales se pueden ingresar, visualizar, editar y eliminar
                    </p>
                </div>
                <div class="row" style="padding: 4%"">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">                      
                                <a href="https://github.com/Fuze7-11/Laravel.git" class="btn btn-secondary active btn-lg">Repositorio en Git hub
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <a href="{{ url('/login')}}" class="btn btn-warning active btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                  </svg>Iniciar sesion</a>                              
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>