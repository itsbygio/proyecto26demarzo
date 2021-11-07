<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materiasController extends Controller
{
    public function crear(){
        return view('materias.crear',['crear_materia'=>'active']);
    }
    public function listar(){
        return view('materias.listar',['listar_materias'=>'active']);

    }
    public function editar(){
        return view('materias.editar',['listar_materias'=>'active']);

    }
}
