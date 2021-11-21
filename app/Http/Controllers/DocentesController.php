<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docentes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Rules\ImageEdit;
class DocentesController extends Controller
{
    public function crear(){
        return view('docentes.crear',[
            'crear_docente'=>'active'
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', ],
            'contacto' => ['required','numeric','min:10'],
            'direccion'=> ['required'],
            'num_id'=>['required'],
            'tp'=> ['required'],
            'ac'=>['required'],
            'escalafon'=>['required', ],
            
        ]);
        
    

      $Docentes=  Docentes::create([
            'nombre'=>$request->nombre,
            'apellidos'=>$request->apellidos,
            'email'=>$request->email,
            'contacto'=>$request->contacto, 
            'direccion'=> $request->direccion,
            'num_id'=> $request->num_id,
            'tp'=>$request->tp,
            'ac'=> $request->ac,
            'escalafon'=>$request->escalafon,
            'created_at'=>date('d-m-Y H:i:s'),
            'updated_at'=>date('d-m-Y H:i:s'),
            
        ]);
      
        $Docentes->save();
        return redirect('/crear/docente')->with('status', 'Docente creado exitosamente!');
    }
    public function listar(){
        return view('docentes.listar',[
            'listar_docentes'=>'active',
            'docentes'=>Docentes::all()
        ]);
    }
    public function editar($id){
        $docentes=Docentes::findOrfail($id);
        return view('docentes.editar',[
            'listar_docentes'=>'active',
            'docentes'=>$docentes
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', ],
            'contacto' => ['required','numeric','min:10'],
            'direccion'=> ['required'],
            'num_id'=>['required'],
            'escalafon'=>['required'],
            
        ]);

        $Docentes=Docentes::find($id);
        $Docentes->nombre=$request->nombre;
        $Docentes->apellidos=$request->apellidos;
        $Docentes->email=$request->email;
        $Docentes->contacto=$request->contacto;
        $Docentes->direccion=$request->direccion;
        $Docentes->num_id=$request->num_id;
        $Docentes->tp=$request->tp;
        $Docentes->ac=$request->ac;
        $Docentes->escalafon=$request->escalafon;
        $Docentes->save();
        return redirect('/editar/docente/'.$id)->with('status','docente modificado exitosamente');
     
    }

public function destroy(Request $request){
    $docentes=Docentes::findOrfail($request->id);
    $docentes->delete();
}


}
