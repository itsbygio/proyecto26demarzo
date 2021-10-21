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

/*usuarios*/
Route::get('/crear/usuario', 'UsuarioController@crear');
Route::get('/listar/usuarios', 'UsuarioController@listar');
Route::get('/editar/usuario/{id}', 'UsuarioController@edit');
Route::get('/perfildelusuario', 'UsuarioController@perfildelusuario');
/*Fin usuarios*/

/*documentos*/
Route::get('/crear/documento', 'DocumentosController@crear');
/*Fin documentos*/

/*docentes*/
Route::get('/crear/docente', 'DocentesController@crear');
Route::get('/editar/docente/{id}', 'DocentesController@editar');
Route::get('/listar/docentes', 'DocentesController@listar');
/*Fin docentes*/


/*Estudiantes*/
Route::get('/crear/estudiante', 'EstudiantesController@crear');
Route::get('/editar/estudiante', 'EstudiantesController@editar');
Route::get('/listar/estudiantes', 'EstudiantesController@listar');

/*Fin estudiantes*/