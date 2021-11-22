<?php

namespace App\Http\Controllers;
use App\curyest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class curyestController extends Controller
{
    public function asignar(request $request){
       $id_estudiante= $request->idestudiante;
       $id_curso= $request->idcurso;
       curyest::create([
        'id_est'=> $id_estudiante ,
        'id_cur'=> $id_curso        
        ]);
    }
    public function desasignar(request $request){
        $id_estudiante= $request->idestudiante;
        DB::table('cur_est')->where('id_est',$id_estudiante)->delete();

     
   }
}
