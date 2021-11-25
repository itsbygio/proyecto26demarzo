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
<form  enctype="multipart/form-data" action="/update/estudiante/{{$estudiantes->id}}" method="POST">
@csrf
<h4 class="ml-3"><i class="fas fa-user-edit mr-3"></i>
Editar Estudiante </h4><br>
 <div class="row ml-3 mr-3">
     <div class="col-md-4 mb-4">
     <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$estudiantes->nombre}}" >
        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Apellidos:</p> 
        <input id="apellidos" name="apellidos" type="text" class="form-control" value="{{$estudiantes->apellidos}}">
        @error('apellidos')
        <div  style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Tipo de documento:</p>
        <select id="tipo_doc" name="tipo_doc" class="form-control" id="exampleFormControlSelect1" >
        <option value="{{$estudiantes->tipo_doc}}">{{$estudiantes->tipo_doc}}</option> 
                @if($estudiantes->tipo_doc!="ti")
                <option value="tarjeta de identidad">Tarjeta de identidad</option>
                @endif
                @if($estudiantes->tipo_doc!="cc")
                <option value="cedula de ciudadania">Cedula de ciudadania</option>
                @endif

        </select>
        @error('tipo_doc')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-xl-4  mb-4">
        <p>Numero de identificacion :</p>
        <input  id="num_id"  name="num_id" type="text" class="form-control" value="{{$estudiantes->num_id}}">
        @error('cedula')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
     <div class="col-md-4 mb-4">
     <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control"  value="{{$estudiantes->email}}">
        @error('email')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
    
     <div class="col-md-4 mb-4">
     <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="{{$estudiantes->contacto}}">
        @error('contacto')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Direccion:</p>
        <input id="direccion"  name="direccion" type="text" class="form-control" value="{{$estudiantes->direccion}}">
        @error('direccion')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
 
     <div class="col-md-4 mb-4">
     <p>¿El estudiante es egresado?:</p>
     <div class="form-check">
               <input  class="form-check-input" type="radio" onclick="handleClick(this);" name="flexRadioDefault" id="flexRadioDefault1" value="1" @if(isset($estudiantes->fecha_f)) checked  @endif>
               <label class="form-check-label" for="flexRadioDefault1">
                 SI
               </label>
               </div>
               <div class="form-check">
               <input class="form-check-input" type="radio" onclick="handleClick(this);" name="flexRadioDefault" id="flexRadioDefault2" value="0" @if(isset($estudiantes->id_curso)) checked @endif>
               <label class="form-check-label" for="flexRadioDefault2">
                  NO
               </label>
              </div>
     </div>
     <div style="display:none" id="aeg" class="col-md-4 mb-4">
     <p>Año en que el  estudiante es egresado:</p>
     <input type="number" class="form-control" min="1900" max="2099" step="1" value="{{$estudiantes->fecha_f}}"/>


     </div>
     <div id="sec"  style="display:none" class="col-md-4 mb-4 ">
     <p>Seleccione el curso actual:</p>
     <div class="input-group">
                    <input type="text" id="ca" class="form-control" placeholder="Por favor, Eliga el curso" aria-label="Recipient's username" aria-describedby="basic-addon2"  disabled @if(isset($estudiantes->id_curso)) value="{{$estudiantes->curso->titulo}} @endif">
                    <input  style="display:none" type="text"  name="id_curso" id="idcurso" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2"  value="{{$estudiantes->id_curso}}">

                    <div class="input-group-append">
                        <button  type="button"class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">+</button>
                    </div>
                </div>

       @error('titulo')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>

 </div>
 <div class="row">
 <button class="btn btn-primary ml-4" ></i>Editar estudiante</button>
</div>
<br>
</form>  
</div>
@include('estudiantes.modal')
@endsection
@section('scripts')
<script>
   var fecha_f= "<?php echo $estudiantes->fecha_f ?>";
   console.log(fecha_f);
   if(fecha_f === ""){
           $('#sec').show(); 
   
   }
   else{

      $('#aeg').show(); 
   }
</script>
@include('estudiantes.estudiantes_script')

@endsection