<?php

use App\Http\Controllers\ConsumibleController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::resource('usuarios', UsuarioController::class);
Route::resource('locals', LocalController::class);
Route::resource('consumibles', ConsumibleController::class);
Route::resource('eventos',EventoController::class);