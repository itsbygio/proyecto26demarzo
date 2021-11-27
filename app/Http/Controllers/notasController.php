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
        return view('notas.editar',[
        'listar_notas'=>'active',
        'nota'=>Nota::find($id),
        'cursos'=>Curso::all(),
        'materias'=>Materia::all(),
        'estudiantes'=>Estudiante::where('fecha_f',null)->get(),
    ]);

    }
    public function save(Request $request){
        $r_nota= Nota::where('id_curso',$request->id_curso)->where('id_est', $request->id_estudiante)->where('id_materia',$request->id_materia)->get();
        if($r_nota->count()=="0"){
            $nota=Nota::create([
                'id_curso'=> $request->id_curso,
                'id_est'=> $request->id_estudiante,
                'id_materia'=>$request->id_materia,
                'nota' =>$request->nota
             ]);
             return response()->json([
                'result' => 'SI'
             ],200);   

        }
        else{
            return response()->json([
                'result' => 'NO'
             ],200);   
        }  
  
      

      }
     
     public function update(Request $request, $id){
        $r_nota= Nota::where('id_curso',$request->id_curso)->where('id_est', $request->id_estudiante)->where('id_materia',$request->id_materia)->get();
        if($r_nota->count()=="1"){

            $nota=Nota::find($id);
            $nota->id_curso=$request->id_curso;
            $nota->id_estudiante=$request->id_estudiante;
            $nota->id_materia=$request->id_materia;
            $nota->nota=$request->nota;
             
             return response()->json([
                'result' => 'SI'
             ],200);   

        }
        else{
            return response()->json([
                'result' => 'NO'
             ],200);   
        }  
        
     }
  
     public function destroy(Request $request){
        $nota=Nota::findOrfail($request->id);
        $nota->delete();

     }
}
