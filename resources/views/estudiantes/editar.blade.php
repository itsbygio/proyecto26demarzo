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

<h4 class="ml-3"><i class="fas fa-user-edit mr-3"></i>
Editar Estudiante </h4><br>
 <div class="row ml-3 mr-3">
     <div class="col-md-4 mb-4">
     <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="Andres" >
        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Apellidos:</p> 
        <input id="apellido" name="apellidos" type="text" class="form-control" value="jimenez Ramirez">
        @error('apellidos')
        <div  style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Tipo de documento:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1" >
                <option value="ti">Tarjeta de identidad</option>
                <option value="cc">Cedula de ciudadania</option>

        </select>
        @error('rol')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-xl-4  mb-4">
        <p>Numero de identificacion :</p>
        <input  id="cedula"  name="cedula" type="text" class="form-control" value="123456789">
        @error('cedula')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
     <div class="col-md-4 mb-4">
     <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control"  value="jimenez@example.com">
        @error('email')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
    
     <div class="col-md-4 mb-4">
     <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="123456789">
        @error('contacto')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Direccion:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="CALLE 12-32 ">
        @error('direccion')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Seleccione año del curso:</p>
     <div class="input-group mb-3">
                    <input type="text" class="form-control" value="11-2" placeholder="Por favor, Eliga el curso" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <div class="input-group-append">
                        <button class="fas fa-plus btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter"></button>
                    </div>
                </div>
       @error('direccion')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     
     <div class="col-md-4 mb-4">
     <p>Seleccione el curso:</p>
     <div class="input-group mb-3">
                    <input type="text" class="form-control" value="11-2" placeholder="Por favor, Eliga el curso" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <div class="input-group-append">
                        <button class="fas fa-plus btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter"></button>
                    </div>
                </div>
       @error('direccion')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
 </div>
 <div class="row">
 <button class="btn btn-primary ml-4" ></i>Editar estudiante</button>
</div>
<br>
</div>
@include('estudiantes.modaledit')
@endsection