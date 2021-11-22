<?php

namespace App\Http\Controllers;
use App\Curyest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class curyestController extends Controller
{
    public function asignar(request $request){
       $id_estudiante= $request->idestudiante;
       $id_curso= $request->idcurso;
       Curyest::create([
        'id_est'=> $id_estudiante ,
        'id_cur'=> $id_curso        
        ]);
    }
    public function desasignar(request $request){
        $id_estudiante= $request->idestudiante;
        DB::table('cur_est')->where('id_est',$id_estudiante)->delete();
   }
     public function listar_table($id){
         $consulta= Curyest::where('id_cur', $id)
         ->join('estudiantes','estudiantes.id','=','cur_est.id_est')
         ->get();
        echo $consulta;
     }
}
