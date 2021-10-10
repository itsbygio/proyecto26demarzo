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
}
