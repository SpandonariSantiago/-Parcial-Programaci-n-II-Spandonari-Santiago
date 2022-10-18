<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticacion;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Inicio');
});

Route::post('/', [UsersController::class,'Logout']);

Route::get('/Login', function () {
    return view('Login');
})-> middleware(Autenticacion::class);

Route::post('/Login', [UsersController::class,'Login']);

Route::get('/Registro', function () {
    return view('Registro');
})-> middleware(Autenticacion::class);

Route::post('/Registro', [UsersController::class,'AltaUsuario']);
