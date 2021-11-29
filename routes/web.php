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
Route::post('/store/usuario', 'UsuarioController@store');
Route::post('/update/usuario/{id}', 'UsuarioController@update');
Route::get('/listar/usuarios', 'UsuarioController@listar');
Route::get('/editar/usuario/{id}', 'UsuarioController@edit');
Route::get('/perfildelusuario', 'UsuarioController@perfildelusuario');
Route::post('/editar/perfil','UsuarioController@edit_profile');
Route::post('/editar/password','UsuarioController@cambiar_contraseña');
Route::post('/change/password/{id}','UsuarioController@other_change_password');
Route::post('/delete/usuario','UsuarioController@destroy');

/*Fin usuarios*/

/*documentos*/
Route::get('/crear/documento', 'DocumentosController@crear');
Route::get('/listar/documentos', 'DocumentosController@listar');
Route::get('/estadisticas/documentos', 'DocumentosController@estadisticas');
Route::get('/consultar/documentos', 'DocumentosController@consultar');
Route::get('/dropzone/upload', 'DocumentosController@dropzone');
Route::get('/editar/documento', 'DocumentosController@editar');
Route::post('/generar/estadistica', 'DocumentosController@mostrar_estadistica');
Route::post('/consultas/doc', 'DocumentosController@consultar_documento');




/*Generacion*/
Route::post('/generar/actas_reunion', 'GenerateController@actas_reunion');
Route::post('/generar/permisos_docentes', 'GenerateController@permisos_docentes');
Route::post('/generar/certificado_notas', 'GenerateController@certificado_notas');
Route::post('/generar/constancia_estudio', 'GenerateController@constancia_estudio');
Route::post('/generar/circular', 'GenerateController@circular');

/*Fin Generacion*/

/*docentes*/
Route::get('/crear/docente', 'DocentesController@crear');
Route::get('/editar/docente/{id}', 'DocentesController@editar');
Route::get('/listar/docentes', 'DocentesController@listar');
Route::post('/store/docente ', 'DocentesController@store');
Route::post('/update/docente/{id}','DocentesController@update');
Route::post('/delete/docente','DocentesController@destroy');
/*Fin docentes*/


/*Estudiantes*/
Route::get('/crear/estudiante', 'EstudiantesController@crear');
Route::get('/editar/estudiante/{id}', 'EstudiantesController@editar');
Route::get('/listar/estudiantes', 'EstudiantesController@listar');
Route::post('/store/estudiante', 'EstudiantesController@store');
Route::post('/update/estudiante/{id}', 'EstudiantesController@update');
Route::post('/delete/estudiante','EstudiantesController@destroy');

/*Fin estudiantes*/

/* Notas */
Route::get('/subir/nota', 'notasController@subir');
Route::get('/listar/notas', 'notasController@listar');
Route::get('/editar/nota/{id}', 'notasController@editar');
Route::post('/nota/save', 'notasController@save');
Route::post('/update/nota/{id}', 'notasController@update');
Route::post('/delete/nota', 'notasController@destroy');

/*Fin notas */

/* Materias */
Route::get('/crear/materia', 'materiasController@crear');
Route::get('/listar/materias', 'materiasController@listar');
Route::get('/editar/materia/{id}', 'materiasController@editar');
Route::post('/store/materia', 'materiasController@store');
Route::post('/update/materia/{id}', 'materiasController@update');
Route::post('/delete/materia', 'materiasController@destroy');
/*Fin materias */

/* Cursos */
Route::get('/crear/curso', 'cursosController@crear');
Route::get('/listar/cursos', 'cursosController@listar');
Route::get('/editar/curso', 'cursosController@editar');
Route::post('/store/curso', 'cursosController@store');
Route::post('/update/curso/{id}', 'cursosController@update');
Route::post('/delete/curso', 'cursosController@destroy');
/*Fin materias */
Route::get('/editar/curso/{id}', 'cursosController@editar');
/*Fin materias */

/*curyest */
Route::post('/asignar/estudiantes', 'curyestController@asignar');
Route::post('/desasignar/estudiantes', 'curyestController@desasignar');
Route::get('/listar/curyest/{id}', 'curyestController@listar_table');
