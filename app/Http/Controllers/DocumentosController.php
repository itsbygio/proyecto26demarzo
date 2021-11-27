<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento;
class DocumentosController extends Controller
{

  
    public function crear(){
        return view('documentos.crear',[
            'crear_documento'=>'active'
        ]);
    }
    public function estadisticas(){
        $acta=Documento::where('nm','acr')->get();
        return view('documentos.estadisticas',[
            'generar_estadisticas'=>'active',
            'Acta' => $acta->count()
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
    public function editar(){
        return view('documentos.editar',[
            'listar_documentos'=>'active'
        ]);
    }
    public function dropzone(){
        
    }
        
    public function consultar_documento(request $request){
    
     $result="";
     $dia= $request->dia;
     $mes=$request->mes;
     $year= $request->year;
     $nm= $request->nm;
     
     if($dia!=null){
      $result= Documento::where('nm',$request->nm)->whereDate('created_at',$request->dia)->get();
      return response()->json([
        'result' =>$result],200);
       

     }
     else if($mes!=null){
        $mes=substr($request->mes, -2, 3);
        $añom =substr($request->mes, 0, 4);
        $result= Documento::where('nm',$request->nm)->whereYear('created_at',$añom)->whereMonth('created_at',$mes)->get();
        return response()->json([
            'result' =>$result],200);
     }
     else{
        $result= Documento::where('nm',$request->nm)->whereYear('created_at',$request->year)->get();
        return response()->json([
            'result' =>$result],200);
     }
     
     

    }

    public function mostrar_estadistica(request $request){
        $subtipo="12";
        switch ($request->nm) {
            case "acr":
            $subtipo= "Actas de reuniones";
            break;
            case "cone":
            $subtipo= "Constancias de estudio";
            break;
            case "cen":
             $subtipo= "Certificado de notas";
            break;
            case "pd":
            $subtipo= "Permiso de docente";
                break;
            case "cir":
                $subtipo= "Circulares";
                break;
            case "ia":
                $subtipo= "Informes Academicos";
             break;
             case "cd":
                $subtipo= "Citacion de docentes";
             break;
             case "orcm":
                $subtipo= "Ordenes de cancelacion de matriculas";
             break;
             case "pys":
                $subtipo= "Paz y salvo estudiantes";
             break;
             case "ifp":
                $subtipo= "Informes de diplomas";
             break;
             case "acg":
                $subtipo= "Actas de grado";
             break;
             case "dp":
                $subtipo= "Diplomas";
             break;
             case "rs":
                $subtipo= "Resoluciones";
             break;
        }
        
         $documentos=Documento::where('nm',$request->nm)->get();
         return response()->json([
             'count' => $documentos->count(),
              'subtipo'=>$subtipo],200); 

          
    }
   
}
