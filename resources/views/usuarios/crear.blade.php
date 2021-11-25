@extends('admin.layout')

@section('content')
<form  enctype="multipart/form-data" action="/store/usuario" method="POST">
@csrf
<div class="container ">

@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show ml-4 mr-4 mb-4"  role="alert">
          {{ session('status') }} 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
@endif
<div class="row">
<div class="col-md-10"><h4 class="ml-3"><i class="fas fa-user-edit"></i> Crear Usuario del Sistema</h4></div>
<div class="col-md-2">  <a href="/listar/usuarios">Volver Pagina Anterior</a></div>
</div>
<br>
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
        <input id="apellidos" name="apellidos" type="text" class="form-control" value="{{old('apellidos')}}">
        @error('apellidos')
        <div  style="color:red;" >{{ $message }}*</div>
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
     <p>Rol:</p>
        <select id="nrol" name="nrol" class="form-control" id="exampleFormControlSelect1"  value="{{old('nrol')}}">
                <option value="1">Administrador</option>
                <option value="2" >Coordinador</option>
                <option value="3">Secretaria de rectoria</option>
                <option value="4">Rol de archivo</option>

        </select>
        
     </div>
    
     <div class="col-md-4 mb-4">
     <p>Estado:</p>
        <select id="estado" name="estado" class="form-control" id="exampleFormControlSelect1"  value="{{old('estado')}}">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>

        </select>
        
     </div>
         
     <div class="col-md-4 mb-4">
     <p>Contraseña</p>
        <input id="password"  name="password" type="password" class="form-control" value="{{old('password')}}">
        @error('password')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Confirmar Contraseña</p>
        <input id="password"  name="password" type="password" class="form-control" value="{{old('password')}}">
        @error('password')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
 </div>

 <div class="row ml-4">
 <button class="btn btn-primary " onclick="RegisterUser()" ><i class="fas fa-user-edit"></i> Registrar Usuario</button>
 </form>
</div>

<br><br>

</div>

@endsection
