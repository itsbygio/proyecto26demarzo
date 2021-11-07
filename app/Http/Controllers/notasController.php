<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notasController extends Controller
{
    public function subir(){
        return view('notas.crear',['subir_nota'=>'active']);
    }
    public function listar(){
        return view('notas.listar',['listar_notas'=>'active']);

    }
    public function editar(){
        return view('notas.editar',['listar_notas'=>'active']);

    }
}
