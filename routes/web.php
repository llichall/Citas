<?php

use Illuminate\Support\Facades\Route;


use App\Models\User;
use App\Http\Controllers\UserControler;
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

Route::view('/perfil', 'perfil');
Route::get('/perfil', [UserControler::class, "mostrar"]);

Route::view('/usuarios', 'usuarios');
Route::get('/usuarios', [UserControler::class, "mostrarusuarios"]);


/*

------------------------admin gaaa------------------------------
*/

Route::view('/administrar-usuarios', 'vadmi');
Route::get('/administrar-usuarios', [UserControler::class, "mostraradm"]);
