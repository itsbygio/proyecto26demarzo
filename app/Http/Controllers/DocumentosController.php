<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Documento;
use App\Estudiante;
use App\Docente;
use App\Curso;
class DocumentosController extends Controller
{

  
    public function crear(){
        return view('documentos.crear',[
            'crear_documento'=>'active',
            'cursos'=>Curso::all(),
            'estudiantes'=>Estudiante::all(),
            'docentes'=>Docente::all()
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
                $documento->titulo=$request->titulo;
                $documento->tipo="Acta";
                $documento->subtipo="Acta de reunion";
                $documento->nm="acr";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                return response()->json([
                'result' =>"OK"],200);
          break;
          case 'cone':
           $registro= Estudiante::where('num_id',$request->numid)->first();
           if($registro!=null){
            $documento->titulo=$request->titulo;
            $documento->tipo="Constancia";
            $documento->subtipo="Constancia de estudio";
            $documento->nm="cone";
            $documento->id_est=$registro->id;
            $documento->id_doc=null;
            $documento->id_user_m=Auth::user()->id;
            $documento->save();
            return response()->json([
                'result' =>"OK"],200);
           }
           else{
            return response()->json([
                'result' =>"No se encuentra el numero de identificacion"],200);
           }

           break;
           case 'cen':
            $registro= Estudiante::where('num_id',$request->numid)->first();
            if($registro!=null){
                $documento->titulo=$request->titulo;
                $documento->tipo="Certificado";
                $documento->subtipo="Certificado de notas";
                $documento->nm="cen";
                $documento->id_est=$registro->id;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                return response()->json([
                    'result' =>"OK"],200);
            }
            else{
                return response()->json([
                    'result' =>"No se encuentra el numero de identificacion"],200);
              }
         break;
            case 'pd':
                $registro= Docente::where('num_id',$request->docid)->first();
                if($registro!=null){
                    $documento->titulo=$request->titulo;
                    $documento->tipo="Permiso";
                    $documento->subtipo="Permiso docente";
                    $documento->nm="pd";
                    $documento->id_est=null;
                    $documento->id_doc=$registro->id;
                    $documento->id_user_m=Auth::user()->id;
                    $documento->save();
                    return response()->json([
                    'result' =>"OK"],200);
                }
                else{
                    return response()->json([
                    'result' =>"No se encuentra el numero de identificacion"],200);
                }
            break;
            case 'cir':
                $documento->titulo=$request->titulo;
                $documento->tipo="Circular";
                $documento->subtipo="Ninguno";
                $documento->nm="cir";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                return response()->json([
                    'result' =>"OK"],200);
            break;
            case 'ia':
                $documento->titulo=$request->titulo;
                $documento->tipo="Informe";
                $documento->subtipo="Informe Academico";
                $documento->nm="ia";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                return response()->json([
                    'result' =>"OK"],200);
            break;
            case 'cd':
                $documento->titulo=$request->titulo;
                $documento->tipo="Citacion";
                $documento->subtipo="Ninguno";
                $documento->nm="cd";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                return response()->json([
                    'result' =>"OK"],200);
            break;
            case 'orcm':
                $registro= Estudiante::where('num_id',$request->numid)->first();
                if($registro!=null){
                    $documento->titulo=$request->titulo;
                    $documento->tipo="Orden";
                    $documento->subtipo="Orden de cancelacion matricula";
                    $documento->nm="orcm";
                    $documento->id_est=$registro->id;
                    $documento->id_doc=null;
                    $documento->id_user_m=Auth::user()->id;
                    $documento->save();
                    return response()->json([
                        'result' =>"OK"],200);
                }
                else{
                    return response()->json([
                    'result' =>"No se encuentra el numero de identificacion"],200);
                }
            break;
            case 'pys':
                $registro= Estudiante::where('num_id',$request->numid)->first();
                if($registro!=null){
                $documento->titulo=$request->titulo;
                $documento->tipo="Paz y salvo";
                $documento->subtipo="Ninguno";
                $documento->nm="pys";
                $documento->id_est=$registro->id;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                return response()->json([
                    'result' =>"OK"],200);
                }
                else{
                    return response()->json([
                        'result' =>"No se encuentra el numero de identificacion"],200);
                }

            break;
            case 'ifp':
    
                $documento->titulo=$request->titulo;
                $documento->tipo="Informe";
                $documento->subtipo="Informe de diploma";
                $documento->nm="ifp";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                    return response()->json([
                    'result' =>"OK"],200);

            break;
            case 'acg':
                $registro= Estudiante::where('num_id',$request->numid)->first();
                if($registro!=null){
                $documento->titulo=$request->titulo;
                $documento->tipo="Acta";
                $documento->subtipo="Acta de grado";
                $documento->nm="acg";
                $documento->id_est=$registro->id;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                   return response()->json([
                    'result' =>"OK"],200);
                }
                else{
                    return response()->json([
                     'result' =>"No se encuentra el numero de identificacion"],200);
                }
            break;
            case 'dp':
                $registro= Estudiante::where('num_id',$request->numid)->first();
                if($registro!=null){
                $documento->titulo=$request->titulo;
                $documento->tipo="Diploma";
                $documento->subtipo="Ninguno";
                $documento->nm="dp";
                $documento->id_est=$registro->id;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                    return response()->json([
                    'result' =>"OK"],200);
                }
                else{
                    return response()->json([
                        'result' =>"No se encuentra el numero de identificacion"],200);
                 }
            break;
            case 'rs':

                $documento->titulo=$request->titulo;
                $documento->tipo="Resolucion";
                $documento->subtipo="Ninguno";
                $documento->nm="rs";
                $documento->id_est=null;
                $documento->id_doc=null;
                $documento->id_user_m=Auth::user()->id;
                $documento->save();
                return response()->json([
                    'result' =>"OK"],200);
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
     if($request->num_est==null && $request->num_doc==null){
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
     else{
           if($nm=="cone" || $nm=="cen" || $nm="orcm" || $nm=="pys" || $nm=="acg" || $nm=="dp" ){
            $registro=Estudiante::where('num_id',$request->num_est)->get();
            if($registro->count()==0){
                $id_est= null;
            }
            else{  
            $id_est= Estudiante::where('num_id',$request->num_est)->first()->id;
            }
            if($dia!=null){
                $result= Documento::where('nm',$request->nm)->whereDate('created_at',$request->dia)->where('id_est',$id_est)->get();
                return response()->json([
                    'result' =>$result],200);
                }
    
                else if($mes!=null){
                    $mes=substr($request->mes, -2, 3);
                    $añom =substr($request->mes, 0, 4);
                    $result= Documento::where('nm',$request->nm)->whereYear('created_at',$añom)->whereMonth('created_at',$mes)->where('id_est',$id_est)->get();
                    return response()->json([
                        'result' =>$result],200);
                }
                else{
                    $result= Documento::where('nm',$request->nm)->whereYear('created_at',$request->year)->where('id_est',$id_est)->get();
                    return response()->json([
                        'result' =>$result],200);
                }

           }
           else{
               $registro2=Docente::where('num_id',$request->num_doc)->get();
               if($registro2->count()==0){
                   $id_doc==null;
               }
               else{
               $id_doc= Docente::where('num_id',$request->num_doc)->first()->id;
               }
            if($dia!=null){
                $result= Documento::where('nm',$request->nm)->whereDate('created_at',$request->dia)->where('id_doc',$id_doc)->get();
                return response()->json([
                    'result' =>$result],200);
                }
    
                else if($mes!=null){
                    $mes=substr($request->mes, -2, 3);
                    $añom =substr($request->mes, 0, 4);
                    $result= Documento::where('nm',$request->nm)->whereYear('created_at',$añom)->whereMonth('created_at',$mes)->where('id_doc',$id_doc)->get();
                    return response()->json([
                        'result' =>$result],200);
                }
                else{
                    $result= Documento::where('nm',$request->nm)->whereYear('created_at',$request->year)->where('id_doc',$id_doc)->get();
                    return response()->json([
                        'result' =>$result],200);
                }
           }
     }

    }
    public function guardar_documento(request $request ){
        
        
        $titulo_documento= $request->titulo_document_upload;
        $archivo = $request->file('file');
        $ext='.'.$archivo->extension();
        $registro_estudiante= $request->id_est_modal;;
        $registro_docente=  $request->id_doc_modal;

        switch ($request->nm) {
            case "acr":
                $file=Documento::create([
                    'titulo'=>$titulo_documento,
                    'ext'=> $ext,
                    'tipo' => "Acta",
                    'subtipo'=> "Acta de reunion",
                     'nm' =>"acr",
                     'id_est'=>null,
                     'id_doc'=>null,
                     'id_user_c' =>Auth::user()->id,
                     'id_user_m'=>null
                  ]);
                  $nombreImagen = $file->id.$ext;
                  $archivo->move(public_path('documentos/'),$nombreImagen);
                break;
            case "cone":
                if($registro_estudiante!=null){
                $file=Documento::create([
                    'titulo'=>$titulo_documento,
                    'ext'=> $ext,
                    'tipo' => "Constancia",
                    'subtipo'=> "Constancia de estudio",
                     'nm' =>"cone",
                     'id_est'=> $registro_estudiante,
                     'id_doc'=>null,
                     'id_user_c' =>Auth::user()->id,
                     'id_user_m'=>null
                  ]);
                  $nombreImagen = $file->id.$ext;
                  $archivo->move(public_path('documentos/'),$nombreImagen);
                }
                else{
                    return response()->json("404");
                    
                }
                break;
            case "cen":
                if($registro_estudiante!=null){
                $file=Documento::create([
                    'titulo'=>$titulo_documento,
                    'ext'=> $ext,
                    'tipo' => "Certificado",
                    'subtipo'=> "Certificado de notas",
                     'nm' =>"cen",
                     'id_est'=> $registro_estudiante,
                     'id_doc'=>null,
                     'id_user_c' =>Auth::user()->id,
                     'id_user_m'=>null
                  ]);
                  $nombreImagen = $file->id.$ext;
                  $archivo->move(public_path('documentos/'),$nombreImagen);
                }
                else{
                    return response()->json("404");

                }
                break;
                case "pd":
                    if($registro_docente!=null){
                    $file=Documento::create([
                        'titulo'=>$titulo_documento,
                        'ext'=> $ext,
                        'tipo' => "Permiso",
                        'subtipo'=> "Permiso docente",
                         'nm' =>"pd",
                         'id_est'=>null,
                         'id_doc'=>$registro_docente,
                         'id_user_c' =>Auth::user()->id,
                         'id_user_m'=>null
                      ]);
                      $nombreImagen = $file->id.$ext;
                      $archivo->move(public_path('documentos/'),$nombreImagen);
                    }
                    else{
                        return response()->json("404");

                    }
                break;
                case "cir":
                    $file=Documento::create([
                        'titulo'=>$titulo_documento,
                        'ext'=> $ext,
                        'tipo' => "Circular",
                        'subtipo'=> "Ninguno",
                         'nm' =>"cir",
                         'id_est'=>null,
                         'id_doc'=> null,
                         'id_user_c' =>Auth::user()->id,
                         'id_user_m'=>null
                      ]);
                      $nombreImagen = $file->id.$ext;
                      $archivo->move(public_path('documentos/'),$nombreImagen);
                 
                break;
                case "ia":
                    $file=Documento::create([
                        'titulo'=>$titulo_documento,
                        'ext'=> $ext,
                        'tipo' => "Informe",
                        'subtipo'=> "Informe Academico",
                         'nm' =>"ia",
                         'id_est'=>null,
                         'id_doc'=>null,
                         'id_user_c' =>Auth::user()->id,
                         'id_user_m'=>null
                      ]);
                      $nombreImagen = $file->id.$ext;
                      $archivo->move(public_path('documentos/'),$nombreImagen);
                 
                break;
                    case "cd":
                        $file=Documento::create([
                            'titulo'=>$titulo_documento,
                            'ext'=> $ext,
                            'tipo' => "Citacion",
                            'subtipo'=> "Ninguno",
                             'nm' =>"cen",
                             'id_est'=>null,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                          $nombreImagen = $file->id.$ext;
                          $archivo->move(public_path('documentos/'),$nombreImagen);
                    break;
                    case "orcm":
                        if($registro_estudiante!=null){
                        $file=Documento::create([
                            'titulo'=>$titulo_documento,
                            'ext'=> $ext,
                            'tipo' => "Orden",
                            'subtipo'=> "Orden de cancelacion matricula",
                             'nm' =>"orcm",
                             'id_est'=>$registro_estudiante,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                          $nombreImagen = $file->id.$ext;
                          $archivo->move(public_path('documentos/'),$nombreImagen);
                        }
                        else{
                            return response()->json("404");

                        }
                    break;
                    case "pys":
                    if($registro_estudiante!=null){
                        $file=Documento::create([
                            'titulo'=>$titulo_documento,
                            'ext'=> $ext,
                            'tipo' => "Paz y salvo",
                            'subtipo'=> "Ninguno",
                             'nm' =>"pys",
                             'id_est'=>$registro_estudiante,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                          $nombreImagen = $file->id.$ext;
                          $archivo->move(public_path('documentos/'),$nombreImagen);
                        }
                        else{
                            return response()->json("404");

                        }
                    break;
                    case "ifp":
                        $file=Documento::create([
                            'titulo'=>$titulo_documento,
                            'ext'=> $ext,
                            'tipo' => "Informe",
                            'subtipo'=> "Informe de diploma",
                             'nm' =>"ifp",
                             'id_est'=>null,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                          $nombreImagen = $file->id.$ext;
                          $archivo->move(public_path('documentos/'),$nombreImagen);
                    break;
                    case "acg":
                    if($registro_estudiante!=null){
                        $file=Documento::create([
                            'titulo'=>$titulo_documento,
                            'ext'=> $ext,
                            'tipo' => "Acta",
                            'subtipo'=> "Acta de grado",
                             'nm' =>"acg",
                             'id_est'=>$registro_estudiante,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                          $nombreImagen = $file->id.$ext;
                          $archivo->move(public_path('documentos/'),$nombreImagen);
                        }
                        else{
                            return response()->json("404");

                        }
                    break;
                    case "dp":
                        if($registro_estudiante!=null){
                            $file=Documento::create([
                                'titulo'=>$titulo_documento,
                                'ext'=> $ext,
                                'tipo' => "Diploma",
                                'subtipo'=> "Ninguno",
                                'nm' =>"dp",
                                'id_est'=>$registro_estudiante,
                                'id_doc'=>null,
                                'id_user_c' =>Auth::user()->id,
                                'id_user_m'=>null
                            ]);
                            $nombreImagen = $file->id.$ext;
                            $archivo->move(public_path('documentos/'),$nombreImagen);
                        }
                        else{
                            return response()->json("404");

                        }
                    break;
                    case "rs":
                        $file=Documento::create([
                            'titulo'=>$titulo_documento,
                            'ext'=> $ext,
                            'tipo' => "Resolucion",
                            'subtipo'=> "Ninguno",
                             'nm' =>"rs",
                             'id_est'=>null,
                             'id_doc'=>null,
                             'id_user_c' =>Auth::user()->id,
                             'id_user_m'=>null
                          ]);
                          $nombreImagen = $file->id.$ext;
                          $archivo->move(public_path('documentos/'),$nombreImagen);
                    break;
            default:
               echo "i no es igual a 0, 1 ni 2";
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
    public function DeleteDocument(request $request){
      $archivo= $request->archivo;
      $path="/documentos/".$archivo;
      $id =$request->id;
      $documento=Documento::findOrfail($id);
      $documento->delete();
      $Fileexist= Storage::disk('public')->exists($path);
      if($Fileexist){
      Storage::disk('public')->delete($path);
      }
    }
}
