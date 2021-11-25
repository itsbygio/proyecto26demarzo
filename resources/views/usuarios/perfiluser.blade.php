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
<form  enctype="multipart/form-data" action="/editar/perfil/" method="POST">
@csrf
<h5 class="ml-3">
 
<h4 class="ml-3">Perfil del usuario</h4>
<h5 class="ml-3">{{ Auth::user()->nombre }} {{ Auth::user()->apellidos }}</h5>
<p class="ml-3 ">Rol de {{ Auth::user()->rol }}</p><br>
 <div class="row ml-3 mr-3">
     <div class="col-md-4 mb-4">
     <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{Auth::user()->nombre}}" >
        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Apellidos:</p> 
        <input id="apellido" name="apellidos" type="text" class="form-control" value="{{Auth::user()->apellidos}}">
        @error('apellidos')
        <div  style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     
     <div class="col-md-4 mb-4">
     <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control"  value="{{Auth::user()->email}}">
        @error('email')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
    
     <div class="col-md-4 mb-4">
     <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="{{Auth::user()->contacto}}">
        @error('contacto')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>


 </div>
 <div class="row">
 <button class="btn btn-primary ml-4" >Guardar Cambios</button>
</div>
</form>
<br><br>
<form  enctype="multipart/form-data" action="/editar/password/" method="POST">
@csrf
<div class="row ml-4">
    <div class="col-md-12">
       <h4>   Reestablecer Contraseña </h4> 
    </div>
 </div>
 <div class="row ml-4">
         <div class="col-md-4">
         <p>Nueva Contraseña:</p>

         <div class="input-group mb-3">
         <input id="" name="password" type="password" class="form-control"  value="" >
                    <div class="input-group-append">
                  
                    </div>
                </div> 
         </div>
         <div class="col-md-4">
         <p>Confirmar Nueva Contraseña:</p>

         <input id="" name="cclave" type="password" class="form-control"  value="">

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