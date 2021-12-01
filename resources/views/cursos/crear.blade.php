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
<form  enctype="multipart/form-data" action="/store/curso" method="POST">
@csrf
<div class="container">
    <h3>Crear curso</h3>
    <br>
    <div class="row mb-3">
        <div class="col-xl-4">
        <p>Escriba el nombre  del  nuevo curso</p>
        <input type="text" name="titulo" class="form-control" value="{{old('titulo')}}" >
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-xl-4">
        <p>Escriba el nombre  del curso en letras</p>
        <input type="text" name="titulo_letras" class="form-control" value="{{old('titulo')}}" >
        </div>
    </div>
  <div class="row mb-3">
        <div class="col-xl-4">
                <p>Escriba el año del  curso</p>
                <input type="text" name="año" class="form-control" value="{{old('año')}}">
        </div>
  </div>
    <br>
     <div class="row">
     <button type="text" class="btn btn-primary ml-1"> Crear nuevo curso</button>
     </div>
</div>
</form>
@endsection