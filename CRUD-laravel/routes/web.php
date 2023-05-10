<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\AdministradorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/estudiantes', EstudianteController::class);
Route::resource('/administradores', AdministradorController::class);

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.submit');


//Route::get('estudiante', [EstudianteController::class, 'index']);
//Route::get('estudiante/create', [EstudianteController::class, 'create']);

