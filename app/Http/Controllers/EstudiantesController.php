<?php

namespace App\Http\Controllers;
use App\cursos;
use App\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function crear(){
      return view('estudiantes.crear',[
          'crear_estudiante'=>'active',
          'cursos'=> cursos::all() 
      ]);
    }
    public function listar(){
        return view('estudiantes.listar',[
            'listar_estudiantes'=>'active',
            'estudiantes'=>Estudiantes::all(),
            'cursos'=> cursos::all() 
        ]);
    }
    public  function  editar($id){
        $estudiantes=Estudiantes::findOrFail($id);
        return view('estudiantes.editar',[
            'listar_estudiantes'=>'active',
            'fecha_e'=> null,
            'estudiantes'=>$estudiantes,
            'cursos'=> cursos::all() 
             
        ]);
    }

    public function store(Request $request){

        /*
        $validatedData = $request->validate([
            'nombre' => ['required'],
            'apellidos' => ['required'],
            'tipo_doc' => ['required'],
            'num_id' => ['required'],
            'email'=> ['required', 'email'],
            'contacto   '=>['required'],
            'direccion'=> ['required'],
           
            
        ]);
        */
    

      $Estudiantes= Estudiantes::create([
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
        return redirect('/crear/estudiante')->with('status', 'Estudiante creado exitosamente!');

    }
    public function update(Request $request, $id){

         /*
        $validatedData = $request->validate([
            'nombre' => ['required'],
            'apellidos' => ['required'],
            'tipo_doc' => ['required'],
            'num_id' => ['required'],
            'email'=> ['required', 'email'],
            'contacto   '=>['required'],
            'direccion'=> ['required'],
           
            
        ]);
        */

        $estudiantes= Estudiantes::find($id);
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
        

        return redirect('/editar/estudiante/'.$id)->with('status','Estudiante modificado exitosamente');
    }

    public function destroy(Request $request){
        $Estudiantes=Estudiantes::findOrfail($request->id);
        $Estudiantes->delete();
    }
}
