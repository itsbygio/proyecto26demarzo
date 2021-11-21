<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\curyest;
use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function crear(){
        return view('cursos.crear',
        [
         'crear_curso'=>'active',
    ]);
    }
    public function listar(){
        return view('cursos.listar',['listar_cursos'=>'active',
             
       ]);

    }
    public function editar($id){
 
        
        return view('cursos.editar',[
            'listar_cursos'=>'active',
             'id_curso'=>$id,
             'estudiantes'=> DB::table('estudiantes')->get(),
             'curyest'=> curyest::where('id_cur',$id)->get()

        ]);
    
    }
}
