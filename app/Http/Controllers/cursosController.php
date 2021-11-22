<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\curyest;
use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function crear(){
        return view('cursos.crear',
        [
         'crear_curso'=>'active',
    ]);
    }
    public function listar(){
        return view('cursos.listar',['listar_cursos'=>'active',
             'cursos'=>cursos::all()
       ]);

    }
    public function editar($id){
 
        
        return view('cursos.editar',[
            'listar_cursos'=>'active',
             'id_curso'=>$id,
             'estudiantes'=> DB::table('estudiantes')->get(),
             'curyest'=> curyest::where('id_cur',$id)->get()

        ]);
    
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
