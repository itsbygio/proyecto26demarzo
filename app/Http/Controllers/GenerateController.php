<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function actas_reunion(request $request){
        return response()->json([
            'fecha_reunion' => $request->fecha_reunion,
            'lugar_reunion' =>$request->lugar_reunion,
            'hora_inicio' => $request->hora_inicio,
            'hora_final' =>$request->hora_final,
            'agenda'=>$request->agenda,
            'objeto_reunion'=>$request->objeto_reunion,
            'desarrollo'=>$request->desarrollo_reunion,
            'descripcion'=>  $request->descripcion_reunion,
            'nombre_doc'=>$request->nombre_doc    
         ],200);
    }
    public function permisos_docentes(request $request){
        return response()->json([
            'identificacion' => $request->cedula_docente,
            'nombre_doc'=>$request->nombre_doc    

    
         ],200);
    }
    public function certificado_notas(request $request){
        return response()->json([
            'identificacion' => $request->id_cer_est,
            'nombre_doc'=>$request->nombre_doc    

    
         ],200);
    }
    public function constancia_estudio(request $request){
        return response()->json([
            'identificacion' => $request->id_con_est,
            'nombre_doc'=>$request->nombre_doc    

    
         ],200);
    }
    public function circular(request $request){
        return response()->json([
            'para' => $request->para,
            'de'=> $request->de,
            'asunto'=>$request->asunto,
            'descripcion' =>$request->descripcion,
            'nombre_doc'=>$request->nombre_doc    

         ],200);
    }
}
