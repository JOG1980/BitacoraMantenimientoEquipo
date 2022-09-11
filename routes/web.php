<?php

use Illuminate\Support\Facades\Route;

//referenciamos los controladores ------------------
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\OrdenController;


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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//rutas para el equipo ----------
Route::get('/equipos', [EquipoController::class,'index']);
Route::get('equipos/create', [EquipoController::class,'create']);
Route::get('equipos/{equipo}', [EquipoController::class,'show']);

//rutas para la orden ----------
Route::get('orden', OrdenController::class);  //por default llama invoke() del controlador


