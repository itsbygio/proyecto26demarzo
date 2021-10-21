<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function crear(){
        return view('docentes.crear',[
            'crear_docente'=>'active'
        ]);
    }
    public function listar(){
        return view('docentes.listar',[
            'listar_docentes'=>'active'
        ]);
    }
    public function editar($id){
        return view('docentes.editar',[
            'listar_docentes'=>'active'
        ]);
    }

}
