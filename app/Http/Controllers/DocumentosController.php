<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Documento;
use App\Estudiante;
use App\Docente;
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
            'listar_documentos'=>'active',
            'documentos'=>Documento::all()
        ]);
    }
    public function editar($id){
        $documento=Documento::findOrfail($id);

        return view('documentos.editar',[
            'listar_documentos'=>'active',
             'documento'=>$documento
        ]);
    }
    public function update_document(request $request){
        $documento= Documento::find($request->id_documento);
       switch ($request->nm) {
           case 'acr':
                $documento->tipo="Acta";
                $documento->subtipo="Acta de reunion";
                $documento->nm="acr";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
          break;
          case 'cone':
                $documento->tipo="Constancia";
                $documento->subtipo="Constancia de estudio";
                $documento->nm="cone";
                $documento->id_est=$request->numid;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
           break;
           case 'cen':
                $documento->tipo="Certificado";
                $documento->subtipo="Certificado de notas";
                $documento->nm="cen";
                $documento->id_est=$request->numid;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
         break;
            case 'pd':
                $documento->tipo="Permiso";
                $documento->subtipo="Permiso de docente";
                $documento->nm="pd";
                $documento->id_est=null;
                $documento->id_doc=$request->docid;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            case 'cir':
                $documento->tipo="Circular";
                $documento->subtipo="Ninguno";
                $documento->nm="pd";
                $documento->id_est=$request->numid;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            case 'ia':
                $documento->tipo="Informe";
                $documento->subtipo="Informe Academico";
                $documento->nm="ia";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            case 'cd':
                $documento->tipo="Citacion";
                $documento->subtipo="Ninguno";
                $documento->nm="cd";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            case 'orcm':
                $documento->tipo="Orden";
                $documento->subtipo="Orden de cancelacion matricula";
                $documento->nm="orcm";
                $documento->id_est=$request->numid;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            case 'pys':
                $documento->tipo="Paz y Salvo";
                $documento->subtipo="Ninguno";
                $documento->nm="pys";
                $documento->id_est=$request->numid;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            case 'ifp':
                $documento->tipo="Informe";
                $documento->subtipo="Informe de diploma";
                $documento->nm="ifp";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            case 'acg':
                $documento->tipo="Acta";
                $documento->subtipo="Acta de grado";
                $documento->nm="acg";
                $documento->id_est=$request->numid;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            case 'dp':
                $documento->tipo="Diploma";
                $documento->subtipo="Ninguno";
                $documento->nm="dp";
                $documento->id_est=$request->numid;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            case 'rs':
                $documento->tipo="Resolucion";
                $documento->subtipo="Ninguno";
                $documento->nm="rs";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
            break;
            default:
               # code...
               break;
       }
       
      
    }
    public function update_file(request $request){
        $documento= Documento::find($request->id_documento);
        $archivo = $request->file('file');
        $ext='.'.$archivo->extension();
        $nombreDocumento = $documento->id.$ext;

        $Fileexist= Storage::disk('public')->exists('documentos/'.$documento->id.$ext);
       if($Fileexist){
        $documento->ext=$ext;
        Storage::disk('public')->delete('documentos/'.$documento->id.$ext);
        $archivo->move(public_path('documentos/'),$nombreDocumento);
       }
       else{
        $documento->ext=$ext;
        $archivo->move(public_path('documentos/'),$nombreDocumento);
       }

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
    public function guardar_documento(request $request ){
        
        
        
        $archivo = $request->file('file');
        $ext='.'.$archivo->extension();

        switch ($request->nm) {
            case "acr":
                $file=Documento::create([
                    'titulo'=>$archivo->getClientOriginalName(),
                    'ext'=> $ext,
                    'tipo' => "Acta",
                    'subtipo'=> "Acta de reunion",
                     'nm' =>"acr",
                     'id_est'=>null,
                     'id_doc'=>null,
                     'id_user_c' =>Auth::user()->id,
                     'id_user_m'=>null
                  ]);
                  
                break;
            case "cone":
                $file=Documento::create([
                    'titulo'=>$archivo->getClientOriginalName(),
                    'ext'=> $ext,
                    'tipo' => "Constancia",
                    'subtipo'=> "Constancia de estudio",
                     'nm' =>"cone",
                     'id_est'=>$request->numid,
                     'id_doc'=>null,
                     'id_user_c' =>Auth::user()->id,
                     'id_user_m'=>null
                  ]);
                break;
            case "cen":

                $file=Documento::create([
                    'titulo'=>$archivo->getClientOriginalName(),
                    'ext'=> $ext,
                    'tipo' => "Certificado",
                    'subtipo'=> "Certificado de notas",
                     'nm' =>"cen",
                     'id_est'=>$request->numid,
                     'id_doc'=>null,
                     'id_user_c' =>Auth::user()->id,
                     'id_user_m'=>null
                  ]);
                break;
                case "pd":
                    $file=Documento::create([
                        'titulo'=>$archivo->getClientOriginalName(),
                        'ext'=> $ext,
                        'tipo' => "Permiso",
                        'subtipo'=> "Permiso docente",
                         'nm' =>"pd",
                         'id_est'=>null,
                         'id_doc'=>$request->docid,
                         'id_user_c' =>Auth::user()->id,
                         'id_user_m'=>null
                      ]);
                 
                break;
                case "cir":
                    $file=Documento::create([
                        'titulo'=>$archivo->getClientOriginalName(),
                        'ext'=> $ext,
                        'tipo' => "Circular",
                        'subtipo'=> "Ninguno",
                         'nm' =>"cir",
                         'id_est'=>null,
                         'id_doc'=> null,
                         'id_user_c' =>Auth::user()->id,
                         'id_user_m'=>null
                      ]);
                 
                break;
                case "ia":
                    $file=Documento::create([
                        'titulo'=>$archivo->getClientOriginalName(),
                        'ext'=> $ext,
                        'tipo' => "Informe",
                        'subtipo'=> "Informe Academico",
                         'nm' =>"ia",
                         'id_est'=>null,
                         'id_doc'=>null,
                         'id_user_c' =>Auth::user()->id,
                         'id_user_m'=>null
                      ]);
                 
                break;
                    case "cd":
                        $file=Documento::create([
                            'titulo'=>$archivo->getClientOriginalName(),
                            'ext'=> $ext,
                            'tipo' => "Citacion",
                            'subtipo'=> "Ninguno",
                             'nm' =>"cen",
                             'id_est'=>null,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                    break;
                    case "orcm":
                        $file=Documento::create([
                            'titulo'=>$archivo->getClientOriginalName(),
                            'ext'=> $ext,
                            'tipo' => "Orden",
                            'subtipo'=> "Orden de cancelacion matricula",
                             'nm' =>"orcm",
                             'id_est'=>$request->numid,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                    break;
                    case "pys":
                        $file=Documento::create([
                            'titulo'=>$archivo->getClientOriginalName(),
                            'ext'=> $ext,
                            'tipo' => "Paz y salvo",
                            'subtipo'=> "Ninguno",
                             'nm' =>"pys",
                             'id_est'=>$request->numid,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                    break;
                    case "ifp":
                        $file=Documento::create([
                            'titulo'=>$archivo->getClientOriginalName(),
                            'ext'=> $ext,
                            'tipo' => "Informe",
                            'subtipo'=> "Informe de diplomas",
                             'nm' =>"ifp",
                             'id_est'=>null,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                    break;
                    case "acg":
                        $file=Documento::create([
                            'titulo'=>$archivo->getClientOriginalName(),
                            'ext'=> $ext,
                            'tipo' => "Acta",
                            'subtipo'=> "Acta de grado",
                             'nm' =>"acg",
                             'id_est'=>$request->numid,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                    break;
                    case "dp":
                        $file=Documento::create([
                            'titulo'=>$archivo->getClientOriginalName(),
                            'ext'=> $ext,
                            'tipo' => "Diploma",
                            'subtipo'=> "Ninguno",
                             'nm' =>"dp",
                             'id_est'=>$request->numid,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                    break;
                    case "rs":
                        $file=Documento::create([
                            'titulo'=>$archivo->getClientOriginalName(),
                            'ext'=> $ext,
                            'tipo' => "Resolucion",
                            'subtipo'=> "Ninguno",
                             'nm' =>"rs",
                             'id_est'=>null,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                    break;
            default:
               echo "i no es igual a 0, 1 ni 2";
        }
        $nombreImagen = $file->id.$ext;
        $archivo->move(public_path('documentos/'),$nombreImagen);
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
