<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Curyest;
use App\Estudiante;
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
      
        $i=1;
        $consulta="SELECT *FROM estudiantes WHERE id <>";
        $curyest1=Curyest::where('id_cur','=',$id)->get();
        $CountCuryest= Curyest::count();
        if($curyest1->count()!="0"){
        foreach($curyest1 as $Curyest){
            $id_estudiante= $Curyest->estudiante->id;
             if($i == $CountCuryest){
                $consulta.="'$id_estudiante'";
             }
             else{
            $consulta.="'$id_estudiante 'AND id<>";
             }
             $i++;
        }
        }
        else{
            $consulta="SELECT *FROM estudiantes";
        }
        
        return view('cursos.editar',[
            'listar_cursos'=>'active',
             'id_curso'=>$id,
            'estudiantes'=> DB::select($consulta),
             'curyests'=> $curyest1

        ]);
    
    }
  
}
