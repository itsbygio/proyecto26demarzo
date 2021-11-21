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
<form  enctype="multipart/form-data" action="/store/materia" method="POST">
@csrf
<div class="container">
    <div class="row">
        <h3 class="ml-3">Crear  materia</h3>

    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Nombre de la materia</h5>
                <input type="text" id="titulo" name="titulo" class="form-control" value="{{old('titulo')}}">
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
            <button class="btn btn-primary">Crear</button>
        </div>
    </div>
</div>
</form>
@endsection
