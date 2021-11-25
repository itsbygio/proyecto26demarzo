<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Rules\ImageEdit;
use Illuminate\Support\Facades\Session;
class UsuarioController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.listar',[
            'listar_usuarios'=>'active'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
       
        return view('usuarios.crear',[
            'crear'=>'active', 
            
        ]);
     
    }
    public function listar(){
        return view('usuarios.listar',[
            'listar_usuarios'=>'active',
            'usuarios'=>User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rol='';
       $nrol=$request->nrol;
       if($nrol=='1'){
          
        $rol='administrador';

       }
       
      else if($nrol=='2'){

        $rol='coordinador';

      }
      else if($nrol=='3'){

        $rol='secretaria de rectoria';

      }
      else if($nrol=='4'){

        $rol='archivo';

      }

        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],    
            'password'=> ['required', 'string', 'min:6'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'contacto'=> ['required', 'numeric', 'min:5'],
        
            
            
        ]);
        
    

      $user=  User::create([
            'nombre'=>$request->nombre,
            'apellidos'=>$request->apellidos,       
            'email'=>$request->email,
            'estado'=>$request->estado, 
            'password'=> Hash::make($request->password),
            'contacto'=> $request->contacto,
            'rol'=> $rol,
            'nrol'=>$nrol,
            'created_at'=>date('d-m-Y H:i:s'),
            'updated_at'=>date('d-m-Y H:i:s'),
            
        ]);
        
        $user->save();
        return redirect('/crear/usuario')->with('status', 'Usuario creado exitosamente!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('usuarios.editar',[
        'listar_usuarios'=>'active',
        'user'=>$user
        ]);
    }
      
    public function perfildelusuario(){
        return view('usuarios.perfiluser',[
            'perfil_user'=>'active'
            ]);
    }
    
    public function update(Request $request, $id)
    {
      
       $rol=Auth::user()->rol;
       $nrol=$request->nrol;
       if($nrol=='1'){  
        $rol='administrador';
       }
       
      else if($nrol=='2'){
        $rol='coordinador';
      }

      else if($nrol=='3'){
        $rol='secretaria de rectoria';
      }
      else if($nrol=='4'){
        $rol='archivo';
      }
    
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],           
            'email' => ['required', 'email', 'max:255'],
            'contacto'=> ['required', 'numeric', 'min:6',],
       
            
        ]);
        
            $user= User::find($id);
            $user->nombre=$request->nombre;
            $user->apellidos=$request->apellidos;
            $user->email=$request->email;
            $user->contacto=$request->contacto;
            $user->estado=$request->estado;
            $user->rol=$request->rol;
            $user->nrol=$request->$nrol;
            $user->save();

           return redirect('/editar/usuario/'.$id)->with('status','Datos modificados exitosamente');
           
    }
    public function edit_profile(Request $request){

      $id=Auth::user()->id;
    
       $validatedData = $request->validate([
           'nombre' => ['required', 'string', 'max:255'],
           'apellidos' => ['required', 'string', 'max:255'],           
           'email' => ['required', 'email', 'max:255'],
           'contacto'=> ['required', 'numeric', 'min:6', ],
      
           
       ]);
       
           $user= User::find($id);
           $user->nombre=$request->nombre;
           $user->apellidos=$request->apellidos;
           $user->email=$request->email;
           $user->contacto=$request->contacto;
           $user->save();

          return redirect('/perfildelusuario')->with('status','Datos modificados exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cambiar_contraseña(Request $request)
    {
      $validatedData = $request->validate([
           
        'password'=> ['required', 'string', 'min:6'],
         
        
    ]);
    
       
        $usuario = User::find(Auth::user()->id);
        $usuario->password= Hash::make($request->password);
        $usuario->save();
        

         return redirect('/perfildelusuario')->with('status','Contraseña modificada exitosamente');
        
    }

    public function other_change_password(Request $request, $id){

 $validatedData = $request->validate([
           
        'password'=> ['required', 'string', 'min:6'],
         
        
    ]);
    
       
        $usuario = User::find($id);
        $usuario->password= Hash::make($request->password);
        $usuario->save();
        

         return redirect('/editar/usuario/'. $id)->with('status','Contraseña modificada exitosamente');
    }
    public function destroy(Request $request)
    {
        $user=User::findOrfail($request->id);
        $user->delete();
    }
}
