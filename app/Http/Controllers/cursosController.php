<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Curyest;
use App\curso;
use App\Estudiante;
use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function crear(){
        return view('cursos.crear',
        [
         'crear_curso'=>'active',
    ]);
    }
    public function listar(){
        return view('cursos.listar',['listar_cursos'=>'active',
             'curso'=>curso::all()
       ]);

    }
   
    
    public function editar($id){
       $consulta= $this->artificio($id);
         
        return view('cursos.editar',[
             'listar_cursos'=>'active',
             'id_curso'=>$id,
             'estudiantes'=> DB::select($consulta),
             'curyests'=> Curyest::where('id_cur','=',$id)->get(),
             'cursos'=>Curso::findOrfail($id)

        ]);
    
    }
    public function artificio($id){

        $i=1;
        $consulta="SELECT *FROM estudiantes WHERE id <>";
        $curyest=Curyest::where('id_cur','=',$id)->get();
        if($curyest->count()!="0"){
        foreach($curyest as $Curyest){
            $id_estudiante= $Curyest->estudiante->id;
             if($i == $curyest->count()){
                $consulta.="'$id_estudiante'";
             }
             else{
                  $consulta.="'$id_estudiante 'AND id<>";
             }
             $i++;
        }
        return $consulta;
        }
        else{
            return "SELECT *FROM estudiantes";
        }
        
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'titulo' => ['required'],
            'titulo_letras' => ['required'],
            'año'    => ['required']
        
        ]);


        $cursos=Curso::create([

            'titulo'=>$request->titulo,
            'titulo_letras'=>$request->titulo_letras,
            'año'=>$request->año,
            'created_at'=>date('d-m-Y H:i:s'),
            'updated_at'=>date('d-m-Y H:i:s')
        ]);
        $cursos->save();
        return redirect('/crear/curso')->with('status', 'Materia creada exitosamente!');

    }
    public function update(Request $request, $id){
        
        $validatedData = $request->validate([
            'titulo' => ['required'],
            'titulo_letras' => ['required'],
            'año'    => ['required']
        
        ]);

        $curso=Curso::find($id);
        $curso->titulo=$request->titulo;
        $curso->titulo_letras=$request->titulo_letras;
        $curso->año=$request->año;
        $curso->save();

        return redirect('/editar/curso/'. $id)->with('status','Curso modificado correctamente');

    }
    public function destroy(Request $request){

        $cursos=Curso::findOrfail($request->id);
        $cursos->delete();
    }

  
}
