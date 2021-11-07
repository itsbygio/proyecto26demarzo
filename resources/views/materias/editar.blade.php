@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="ml-3">Editar  materia</h3>

    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Nombre de la materia</h5>
                <input type="text" class="form-control" value="Quimica">
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
            <button class="btn btn-primary">Editar</button>
        </div>
    </div>
</div>
@endsection
