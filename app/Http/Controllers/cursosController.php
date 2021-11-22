<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\curyest;
use App\curso;
use App\Estudiante;
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
      
        $i=1;
        $consulta="SELECT *FROM estudiantes WHERE id <>";
        $curyest1=Curyest::where('id_cur','=',$id)->get();
        $CountCuryest= Curyest::count();
        if($curyest1->count()!="0"){
        foreach($curyest1 as $Curyest){
            $id_estudiante= $Curyest->estudiante->id;
             if($i == $CountCuryest){
                $consulta.="'$id_estudiante'";
             }
             else{
            $consulta.="'$id_estudiante 'AND id<>";
             }
             $i++;
        }
        }
        else{
            $consulta="SELECT *FROM estudiantes";
        }
        
        return view('cursos.editar',[
            'listar_cursos'=>'active',
             'id_curso'=>$id,
            'estudiantes'=> DB::select($consulta),
             'curyests'=> $curyest1

        ]);
    
    }
<<<<<<< HEAD

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

=======
  
>>>>>>> 2cfb007a68c33e29769661aaf2e34ff3e120facf
}
