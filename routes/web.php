<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/crear/usuario', 'UsuarioController@crear');
Route::get('/listar/usuarios', 'UsuarioController@listar');
Route::get('/editar/usuario/{id}', 'UsuarioController@edit');
Route::get('/crear/documento', 'DocumentosController@crear');
Route::get('/perfildelusuario', 'UsuarioController@perfildelusuario');



