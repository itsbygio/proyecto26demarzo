@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="ml-3">Editar nota</h3>

    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Eliga el curso</h5>
                <div class="input-group mb-3">
                    <input type="text" id="curso" class="form-control" value="{{$nota->curso->titulo}}" placeholder="Por favor, Eliga el curso" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <input style="display:none"  type="text" id="id_curso" value="{{$nota->curso->id}}" >

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
                <input type="text" id="estudiante" value="{{$nota->estudiante->nombre}} {{$nota->estudiante->apellidos}}" class="form-control" placeholder="Por favor, Eliga el estudiante" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                <input style="display:none" type="text"  value="{{$nota->estudiante->id}}" id="id_estudiante" >

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
                    <input type="text" id="materia" class="form-control" value="{{$nota->materia->titulo}}" placeholder="Por favor, Eliga la materia" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <input style="display:none" type="text" id="id_materia"  value="{{$nota->materia->id}}">
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
                 <input type="text" id="nota"   value="{{$nota->nota}}" class="form-control" placeholder="Escriba su nota aqui">
        </div>
    </div><br>
    <div class="row ml-3">
        <div class="col-xl-6">
            <button onclick="SubirNota('editar','{{$nota->id}}')" class="btn btn-primary">Editar nota</button>
        </div>
    </div>
</div>
@include('notas.cursos_modal')
@include('notas.estudiantes_modal')
@include('notas.materias_modal')
@endsection
@section('scripts')
@include('notas.notas_script')
@endsection