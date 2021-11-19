<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function crear(){
      return view('estudiantes.crear',[
          'crear_estudiante'=>'active'
      ]);
    }
    public function listar(){
        return view('estudiantes.listar',[
            'listar_estudiantes'=>'active'
        ]);
    }
    public  function  editar($id){
        return view('estudiantes.editar',[
            'listar_estudiantes'=>'active',
            'fecha_e'=> null
             
        ]);
    }
}
