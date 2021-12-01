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
<form  enctype="multipart/form-data" action="/update/docente/{{$docentes->id}}" method="POST">
@csrf
<h4 class="ml-3"><i class="fas fa-user-edit"></i>
Editar docente </h4><br>
 <div class="row ml-3 mr-3">
     <div class="col-md-4 mb-4">
     <p>Nombre:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$docentes->nombre}}" >
        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Apellidos:</p> 
        <input id="apellidos" name="apellidos" type="text" class="form-control" value="{{$docentes->apellidos}}">
        @error('apellidos')
        <div  style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-xl-4  mb-4">
        <p>Cedula de ciudadania :</p>
        <input  id="num_id"  name="num_id" type="text" class="form-control" value="{{$docentes->num_id}}">
        @error('cedula')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
     <div class="col-md-4 mb-4">
     <p>Email:</p>
        <input id="email" name="email" type="email" class="form-control"  value="{{$docentes->email}}">
        @error('email')
        <div style="color:red;">{{ $message }}*</div>
        @enderror
     </div>
    
     <div class="col-md-4 mb-4">
     <p>Numero de contacto:</p>
        <input id="contacto"  name="contacto" type="text" class="form-control" value="{{$docentes->contacto}}">
        @error('contacto')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Direccion:</p>
        <input id="direccion"  name="direccion" type="text" class="form-control" value="{{$docentes->direccion}}">
        @error('direccion')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Titulos de posgrado:</p>
        <textarea id="tp"  name="tp" type="text" class="form-control" > {{$docentes->tp}}</textarea>
        @error('direccion')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>Asignacion Academica:</p>
     <textarea id="ac"  name="ac" type="text" class="form-control" >{{$docentes->ac}}</textarea>
        @error('direccion')
        <div   style="color:red;" >{{ $message }}*</div>
        @enderror
     </div>
     <div class="col-md-4 mb-4">
     <p>sede</p>

     <select id="sede" name="sede"   type="text" class="form-control" id="exampleFormControlSelect1" >
               <option value="{{$docentes->sede}}">{{$docentes->sede}}</option> 
               @if($docentes->sede!="A")
                <option value="A">A</option>
                @endif
                @if($docentes->sede!="B")
                <option value="B">B</option>
                @endif
                @if($docentes->sede!="D")
                <option value="D">D</option>
                @endif
               
        </select>
        </div>
     <div class="col-md-4 mb-4">
     <p>Escalafon</p>

     <input id="escalafon" name="escalafon"   type="text" class="form-control"   value="{{$docentes->escalafon}}">
               
        </div>

 </div>
 <div class="row">
 <button class="btn btn-primary ml-4" ><i class="fas fa-user-plus mr-3"></i>Editar docente</button>
</div>
<br>
</div>
@endsection