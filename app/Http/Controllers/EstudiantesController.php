<?php

namespace App\Http\Controllers;
use App\Curso;
use App\Estudiante;
use App\curyest;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function crear(){
      return view('estudiantes.crear',[
          'crear_estudiante'=>'active',
          'cursos'=> Curso::all() 
      ]);
    }
    public function listar(){
        return view('estudiantes.listar',[
            'listar_estudiantes'=>'active',
            'estudiantes'=>Estudiante::all(),
            'cursos'=> Curso::all() ,
            'curyest'=> curyest::all()
        ]);
    }
    public  function  editar($id){
        $estudiantes=Estudiante::findOrFail($id);
        return view('estudiantes.editar',[
            'listar_estudiantes'=>'active',
            'estudiantes'=>$estudiantes,
            'cursos'=> Curso::all() 
             
        ]);
    }

    public function store(Request $request){

        
        $validatedData = $request->validate([
            'nombre' => ['required'],
            'apellidos' => ['required'],
            'num_id' => ['required' ,'numeric', 'min:7'],
            'email'=> ['required', 'email'],
            'contacto'=>['required', 'numeric','min:6'],
            'direccion'=> ['required'],
            
            
        ]);
        
    

      $Estudiantes= Estudiante::create([
            'nombre'=>$request->nombre,
            'apellidos'=>$request->apellidos,
            'email'=>$request->email,
            'contacto'=>$request->contacto, 
            'direccion'=> $request->direccion,
            'num_id'=> $request->num_id,
            'estado'=>$request->estado,
            'tipo_doc'=>$request->tipo_doc,
            'fecha_f'=> $request->fecha_f,
            'id_curso'=>$request->id_curso,
            'created_at'=>date('d-m-Y H:i:s'),
            'updated_at'=>date('d-m-Y H:i:s'),
            
        ]);
      
         $Estudiantes->save();
         curyest::create([
             'id_est'=> $Estudiantes->id,
             'id_cur' =>$request->id_curso,
         ]);
        return redirect('/crear/estudiante')->with('status', 'Estudiante creado exitosamente!');

    }
    public function update(Request $request, $id){

         
        $validatedData = $request->validate([
            'nombre' => ['required'],
            'apellidos' => ['required'],
            'num_id' => ['required' ,'numeric', 'min:7'],
            'email'=> ['required', 'email'],
            'contacto'=>['required', 'numeric','min:6'],
            'direccion'=> ['required'],
           
            
        ]);
        

        $estudiantes= Estudiante::find($id);
          $id_curso= $estudiantes->id_curso;
        $estudiantes->nombre=$request->nombre;
        $estudiantes->apellidos=$request->apellidos;
        $estudiantes->email=$request->email;
        $estudiantes->contacto=$request->contacto;
        $estudiantes->direccion=$request->direccion;
        $estudiantes->num_id=$request->num_id;
        $estudiantes->estado=$request->estado;
        $estudiantes->tipo_doc=$request->tipo_doc;
        $estudiantes->fecha_f=$request->fecha_f;
        $estudiantes->id_curso=$request->id_curso;
        $estudiantes->save();
        
        $curyest= curyest::where('id_est',$id)
        ->where('id_cur',$id_curso)
         ->update([
             'id_cur'=>$request->id_curso
         ]); 

        return redirect('/editar/estudiante/'.$id)->with('status','Estudiante modificado exitosamente');
    }

    public function destroy(Request $request){
        $Estudiantes=Estudiante::findOrfail($request->id);
        $Estudiantes->delete();
    }
}
