@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Crear curso</h3>
    <br>
    <div class="row mb-3">
        <div class="col-xl-4">
        <p>Escriba el nombre  del  nuevo curso</p>
        <input type="text" class="form-control">
        </div>
    </div>
  <div class="row mb-3">
        <div class="col-xl-4">
                <p>Escriba el año del  curso</p>
                <input type="text" class="form-control">
        </div>
  </div>
    <br>
     <div class="row">
     <button type="text" class="btn btn-primary ml-1"> Crear nuevo curso</button>
     </div>
</div>
@endsection