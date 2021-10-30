<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function crear(){
        return view('documentos.crear',[
            'crear_documento'=>'active'
        ]);
    }
    public function estadisticas(){
        return view('documentos.estadisticas',[
            'generar_estadisticas'=>'active'
        ]);
    }
    public function consultar(){
        return view('documentos.consultar',[
            'consultar_documentos'=>'active'
        ]);
    }
    public function listar(){
        return view('documentos.listar',[
            'listar_documentos'=>'active'
        ]);
    }
}
