<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function crear(){
        return view('cursos.crear',['crear_curso'=>'active']);
    }
    public function listar(){
        return view('cursos.listar',['listar_cursos'=>'active']);

    }
    public function editar(){
        return view('cursos.editar',['listar_cursos'=>'active']);

    }
}