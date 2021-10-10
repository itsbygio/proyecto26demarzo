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

<h4 class="ml-3"><i class="fas fa-user-plus mr-3"></i>
 Crear Nuevo Usuario del Sistema</h4><br>
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
     <div class="col-md-4 mb-4">
     <p>Contraseña:</p>
        <input  id="clave" name="clave" type="password" class="form-control" >
        @error('clave')
        <div style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4 ">
     <p> Confirma Contraseña:</p>
        <input  id="cclave" name="cclave" type="password" class="form-control" >
        @error('cclave')
        <div style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-5">
     <p>Rol:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"  value="{{old('rol')}}">
                <option value="administrador">Administrador</option>
                <option value="coordinador"   >Coordinador</option>
                <option value="srectoria">Secretaria de rectoria</option>
                <option value="rarchivo">Rol de archivo</option>

        </select>
        @error('rol')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>

 </div>
 <div class="row">
 <button class="btn btn-primary ml-4" ><i class="fas fa-user-plus mr-3"></i>Crear Usuario</button>
</div>
<br>
</div>
@endsection