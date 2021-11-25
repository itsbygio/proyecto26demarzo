@extends('admin.layout')

@section('content')

<div class="container ">

@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show ml-4 mr-4 mb-4"  role="alert">
          {{ session('status') }} 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
@endif
<form  enctype="multipart/form-data" action="/update/usuario/{{$user->id}}" method="POST">
@csrf
<div class="row">
<div class="col-md-10"><h4 class="ml-3"><i class="fas fa-user-edit"></i> Editar Usuario del Sistema</h4></div>
<div class="col-md-2">  <a href="/listar/usuarios">Volver Pagina Anterior</a></div>
</div>
<br>
 <div class="row ml-3 mr-3">
     <div class="col-md-4 mb-4">
     <p>Nombre:</p>
        <input id="nombre" name="nombre"  type="text" class="form-control"  value="{{$user->nombre}}" >

        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Apellidos:</p> 
        <input id="apellidos" name="apellidos" type="text" class="form-control"  value="{{$user->apellidos}}">
        @error('apellidos')
        <div  style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     
     <div class="col-md-4 mb-4">
     <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control"  value="{{$user->email}}">
        @error('email')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
    
     <div class="col-md-4 mb-4">
     <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control"  value="{{$user->contacto}}">
        @error('contacto')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
  
    
     <div class="col-md-4 mb-4">
     <p>Rol:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"  >
        <option value="{{$user->rol}}">{{$user->rol}}</option>        
                @if($user->rol!="administrador")
                <option value="administrador">administrador</option>
                @endif
                @if($user->nrol!="coordinador")
                <option value="coordinador" >coordinador</option>
                @endif
                @if($user->nrol!="secretaria de rectoria")
                <option value="secretaria de rectoria">secretaria de rectoria</option>
                @endif
                @if($user->rol!="archivo")
                <option value="archivo">archivo</option>
                @endif
        </select>
        @error('rol')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Estado:</p>
        <select id="estado" name="estado" class="form-control" id="exampleFormControlSelect1"  >
        <option value="{{$user->estado}}">{{$user->estado}}</option> 
        @if($user->estado!="activo")  
        <option value="activo">activo</option>ç
        @endif
        @if($user->estado!="inactivo") 
                <option value="inactivo">inactivo</option>
                @endif

        </select>
        @error('rol')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
 </div>

 <div class="row ml-4">
 <button class="btn btn-primary "onclick="RegisterUser()" ><i class="fas fa-user-edit"></i> Editar Usuario</button>
</div>
</form>
<br><br>

<form  enctype="multipart/form-data" action="/change/password/{{$user->id}}" method="POST">
@csrf
<div class="row ml-4">
    <div class="col-md-12">
       <h4>  Reestablecer Contraseña </h4> 
    </div>
 </div>
 <div class="row ml-4">
         <div class="col-md-4">
         <p>Nueva Contraseña:</p>

         <div class="input-group mb-3">
         <input id="clave" name="password" type="password" class="form-control"   >
                    <div class="input-group-append">
                  
                    </div>
                </div> 
         </div>
         
         <div class="col-md-4">
         <p>Confirmar Nueva Contraseña:</p>
         <input id="cclave" name="cclave" type="password" class="form-control" >

         </div>
      </div>
      <br>
      <div class="row ml-4">
         <div class="col-md-12">
          <button  class="btn btn-primary"  > Reestablecer Contraseña</button>
         </div>
      </div>
<br>
</div>
</form>
@endsection
@section('scripts')
<script>
            $("#restablecer").prop('disabled',true)

   function restablecer(){
      bootbox.confirm({
    message: "¿Estas seguro de reestablecer tu contraseña?",
    centerVertical:true,
    backdrop:true,
    onEscape:true,
    buttons: {
        confirm: {
            label: 'Si',
            className: 'btn-success pr-3 pl-3'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if(result){
            $('#clave').attr("disabled", false);
            $('#clave').val("");
            $('#cclave').attr("disabled", false);
            $('#cclave').val("");
            $("#restablecer").prop('disabled',false)

        }
        else{

        }
    }
});
   }
</script>
@endsection