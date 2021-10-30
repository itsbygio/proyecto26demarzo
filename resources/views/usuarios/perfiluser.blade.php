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

<h5 class="ml-3">
<h4 class="ml-3">Perfil del usuario</h4>
<h5 class="ml-3">{{ Auth::user()->nombre }} {{ Auth::user()->apellidos }}</h5>
<p class="ml-3 ">Rol de {{ Auth::user()->nrol }}</p><br>
 <div class="row ml-3 mr-3">
     <div class="col-md-4 mb-4">
     <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{old('nombre')}}" >
        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Apellidos:</p> 
        <input id="apellido" name="apellidos" type="text" class="form-control" value="{{old('apellido')}}">
        @error('apellidos')
        <div  style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-xl-4  mb-4">
        <p>Cedula:</p>
        <input  id="cedula"  name="cedula" type="text" class="form-control" value="{{old('cedula')}}">
        @error('cedula')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
     <div class="col-md-4 mb-4">
     <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control"  value="{{old('email')}}">
        @error('email')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
    
     <div class="col-md-4 mb-4">
     <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="{{old('contacto')}}">
        @error('contacto')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>


 </div>
 <div class="row">
 <button class="btn btn-primary ml-4" >Guardar Cambios</button>
</div>
<br><br>
<div class="row ml-4">
    <div class="col-md-12">
       <h4>  <button onclick="restablecer()" class="btn btn-primary fas fa-key btn-sm"></button> Reestablecer Contraseña </h4> 
    </div>
 </div>
 <div class="row ml-4">
         <div class="col-md-4">
         <p>Nueva Contraseña:</p>

         <input id="clave" name="clave" type="password" class="form-control"  value="1234567891011123" disabled>

         </div>
         <div class="col-md-4">
         <p>Confirmar Nueva Contraseña:</p>

         <input id="cclave" name="cclave" type="password" class="form-control"  value="1234567891011123" disabled>

         </div>
      </div>
      <br>
      <div class="row ml-4">
         <div class="col-md-12">
          <button  class="btn btn-primary  "  id="restablecer"> Reestablecer Contraseña</button>
         </div>
</div>
<br>
</div>
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