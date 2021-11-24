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
        $Actas=Documento::where('tipo','Acta')->get();
        return view('documentos.estadisticas',[
            'generar_estadisticas'=>'active',
            'Acta' => $Actas->count()
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
    public function mostrar_estadistica(request $request){
        
         $tipo = $request->tipo;
         if($tipo=="Circular" || $tipo=="Citacion"  ||  $tipo=="Orden" ||  $tipo=="Resolucion"){
             $tipo.="es";
         }
         else{
            $tipo.="s";
         }
         $documentos=Documento::where('tipo',$request->tipo)->get();
         return response()->json([
             'count' => $documentos->count(),
              'tipo'=>$tipo],200); 

          
    }
   
}
