<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materias;
class materiasController extends Controller
{
    public function crear(){
        return view('materias.crear',['crear_materia'=>'active',
        'materias'=>Materias::all()
    ]);
    }
    public function listar(){
        return view('materias.listar',['listar_materias'=>'active',
        'materias'=>Materias::all()
    ]);

    }
    public function editar($id){
        $materias=Materias::findOrfail($id);
        return view('materias.editar',['listar_materias'=>'active',
        'materias'=>$materias,
       

    ]);

    }
    public function store(Request $request){

        
        $validatedData = $request->validate([
            'titulo' => ['required']
        
        ]);


        $materias=Materias::create([

            'titulo'=>$request->titulo,
            'created_at'=>date('d-m-Y H:i:s'),
            'updated_at'=>date('d-m-Y H:i:s')
        ]);
        $materias->save();
        return redirect('/crear/materia')->with('status', 'Materia creada exitosamente!');

    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'titulo' => ['required']
        
        ]);
        
        $materias= Materias::find($id);
        $materias->titulo=$request->titulo;
        
        $materias->save();
        

        return redirect('/editar/materia/'.$id)->with('status','Materia modificada exitosamente');

    }

    public function destroy(Request $request){

    }
}
