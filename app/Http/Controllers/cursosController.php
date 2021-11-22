<?php

namespace App\Http\Controllers;
use App\cursos;
use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function crear(){
        return view('cursos.crear',['crear_curso'=>'active',
        'cursos'=> cursos::all()  
    ]);
    }
    public function listar(){
        return view('cursos.listar',['listar_cursos'=>'active',
             'cursos'=>cursos::all()
       ]);

    }
    public function editar(){
        return view('cursos.editar',['listar_cursos'=>'active']);

    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'titulo' => ['required'],
            'año'    => ['required']
        
        ]);


        $cursos=cursos::create([

            'titulo'=>$request->titulo,
            'año'=>$request->año,
            'created_at'=>date('d-m-Y H:i:s'),
            'updated_at'=>date('d-m-Y H:i:s')
        ]);
        $cursos->save();
        return redirect('/crear/curso')->with('status', 'Materia creada exitosamente!');

    }
    public function update(Request $request, $id){


    }
    public function destroy(Request $request){

        $cursos=cursos::findOrfail($request->id);
        $cursos->delete();
    }

}
