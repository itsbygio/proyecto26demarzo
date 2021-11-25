<?php

namespace App\Http\Controllers;
use App\Nota;
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
        'notas'=>Nota::all()
    
    ]);

    }
    public function editar($id){
        return view('notas.editar',['listar_notas'=>'active',
        'notas'=>Nota::all()
    ]);

    }
    public function save(Request $request){
      $r_nota= Nota::where('id_curso',$request->id_curso)->where('id_est', $request->id_est)->where('id_materia',$request->id_materia)->get();
      if($r_nota->count()==1){

        $nota=Nota::create([
            'id_curso'=> $request->id_curso,
            'id_est'=> $request->id_estudiante,
            'id_materia'=>$request->id_materia,
            'nota' =>$request->nota
         ]);

      }  
      else{
        return response()->json('No'); 

      }
     
        
        
     
    }
  

}
