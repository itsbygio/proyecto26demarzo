<?php

namespace App\Http\Controllers;
use App\Notas;
use App\Curso;
use App\Estudiante;
use App\Materia;
use Illuminate\Http\Request;

class notasController extends Controller
{
    public function subir(){
        return view('notas.crear',[
            'subir_nota'=>'active',
            'cursos'=> Curso::all(),
            'estudiantes'=> Estudiante::all(),
            'materias'=> Materia::all()
        ]);
    }
    public function listar(){
        return view('notas.listar',['listar_notas'=>'active',
        'notas'=>Notas::all()
    
    ]);

    }
    public function editar(){
        return view('notas.editar',['listar_notas'=>'active']);

    }
    public function store(request $request){
        
    }

}
