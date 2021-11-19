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
 Crear Nuevo Estudiante </h4><br>
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
     <div class="col-md-4 mb-4">
     <p>Tipo de documento:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"  value="{{old('rol')}}">
                <option value="ti">Tarjeta de identidad</option>
                <option value="cc">Cedula de ciudadania</option>

        </select>
        @error('rol')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-xl-4  mb-4">
        <p>Numero de identifcacion :</p>
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
     <p>Direccion:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="{{old('contacto')}}">
        @error('direccion')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>¿El estudiante es egresado?:</p>
              <div class="form-check">
               <input  class="form-check-input" type="radio" onclick="handleClick(this);" name="flexRadioDefault" id="flexRadioDefault1" value="1">
               <label class="form-check-label" for="flexRadioDefault1">
                 SI
               </label>
               </div>
               <div class="form-check">
               <input class="form-check-input" type="radio" onclick="handleClick(this);" name="flexRadioDefault" id="flexRadioDefault2" value="0">
               <label class="form-check-label" for="flexRadioDefault2">
                  NO
               </label>
              </div>
     </div>
     <div  style="display:none" id="aeg" class="col-md-4 mb-4">
     <p>Año en que el  estudiante es egresado:</p>
     <input type="number" class="form-control" min="1900" max="2099" step="1" value="2021" />


     </div>
     <div id="sec"  style="display:none" class="col-md-4 mb-4 ">
     <p>Seleccione el curso actual:</p>
     <div class="input-group">
                    <input type="text" id="ca" class="form-control" placeholder="Por favor, Eliga el curso" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <input  style="display:none" type="text" id="idcurso" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2" >

                    <div class="input-group-append">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">+</button>
                    </div>
                </div>
       @error('direccion')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
 </div>
 
 <div class="row">
 <button class="btn btn-primary ml-4" ><i class="fas fa-user-plus mr-3"></i> Crear nuevo Estudiante</button>
</div>
<br>
</div>
@include('estudiantes.modal')
@endsection
@section('scripts')
@include('estudiantes.estudiantes_script')
@endsection