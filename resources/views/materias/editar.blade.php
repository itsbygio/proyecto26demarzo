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
<form  enctype="multipart/form-data" action="/update/materia/{{$materias->id}}" method="POST">
@csrf
<div class="container">
    <div class="row">
        <h3 class="ml-3">Editar  materia</h3>

    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Nombre de la materia</h5>
                <input type="text"  name="titulo" class="form-control" value="{{$materias->titulo}}">
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
            <button class="btn btn-primary">Editar</button>
        </div>
    </div>
</div>
</form>
@endsection
