@extends('admin.layout')

@section('content')
@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show ml-4 mr-4 mb-4"  role="alert">
          {{ session('status') }} 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
@endif
<form  enctype="multipart/form-data" action="/update/nota/{{$nota->id}}" method="POST">
@csrf
<div class="container">
    <div class="row">
        <h3 class="ml-3">Editar nota</h3>

    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Eliga el curso</h5>
                <div class="input-group mb-3">
                    <input type="text" id=""  name="" class="form-control" placeholder="Por favor, Eliga el curso" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled value="{{$nota->curso->titulo}}">
                    <input  style="display:none" type="text" id="" name="id_curso" class="form-control"  value="{{$nota->id_curso}}" >
                    <div class="input-group-append">
                        <button type="button" class="fas fa-plus btn btn-primary" onclick="AbrirModalCursos()"></button>
                    </div>
                </div>
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Eliga el estudiante</h5>
                <div class="input-group mb-3">
                <input type="text" id=""  name="" value="{{$nota->estudiante->nombre}} {{$nota->estudiante->apellidos}}" class="form-control" placeholder="Por favor, Eliga el estudiante" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
               
                <input  style="display:none" type="text" id="" name="id_est" class="form-control"  value="{{$nota->id_est}}" >

                <div class="input-group-append">
                    <button  type="button" class="fas fa-plus btn btn-primary"  onclick="AbrirModalEstudiantes()"></button>
                </div>
        </div>
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Eliga la materia</h5>
                <div class="input-group mb-3">
                    <input type="text" id=""  name="" class="form-control" value="{{$nota->materia->titulo}}" placeholder="Por favor, Eliga la materia" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <input  style="display:none" type="text" id="" name="id_materia" class="form-control"  value="{{$nota->id_materia}}" >
                    <div class="input-group-append">
                        <button  type="button" class="fas fa-plus btn btn-primary" onclick="AbrirModalMaterias()"></button>
                    </div>
                </div>
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Agregar nota</h5>
                 <input type="text" id="nota"  name="nota"  value="{{$nota->nota}}" class="form-control" placeholder="Escriba su nota aqui">
                 @error('nota')
                    <div   style="color:red;" >{{ $message }}*</div>
                  @enderror
                </div>
                
    </div><br>
    <div class="row ml-3">
        <div class="col-xl-6">
            <button  class="btn btn-primary">Editar nota</button>
        </div>
    </div>
</div>
</form>
@include('notas.cursos_modal')
@include('notas.estudiantes_modal')
@include('notas.materias_modal')
@endsection
@section('scripts')
@include('notas.notas_script')
@endsection