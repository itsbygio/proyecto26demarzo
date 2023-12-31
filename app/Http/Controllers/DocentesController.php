<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Rules\ImageEdit;
class DocentesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
            'sede'=>['required'],
            'escalafon'=>['required'],
            
        ]);
        
    

      $Docentes=  Docente::create([
            'nombre'=>$request->nombre,
            'apellidos'=>$request->apellidos,
            'email'=>$request->email,
            'contacto'=>$request->contacto, 
            'direccion'=> $request->direccion,
            'num_id'=> $request->num_id,
            'tp'=>$request->tp,
            'ac'=> $request->ac,
            'sede'=> $request->sede,
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
            'docentes'=>Docente::all()
        ]);
    }
    public function editar($id){
        $docentes=Docente::findOrfail($id);
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
            'sede'=>['required'],
            'escalafon'=>['required'],
            
        ]);

        $Docentes=Docente::find($id);
        $Docentes->nombre=$request->nombre;
        $Docentes->apellidos=$request->apellidos;
        $Docentes->email=$request->email;
        $Docentes->contacto=$request->contacto;
        $Docentes->direccion=$request->direccion;
        $Docentes->num_id=$request->num_id;
        $Docentes->tp=$request->tp;
        $Docentes->ac=$request->ac;
        $Docentes->sede=$request->sede;
        $Docentes->escalafon=$request->escalafon;
        $Docentes->save();
        return redirect('/editar/docente/'.$id)->with('status','docente modificado exitosamente');
     
    }

public function destroy(Request $request){
    $docentes=Docente::findOrfail($request->id);
    $docentes->delete();
}


}
