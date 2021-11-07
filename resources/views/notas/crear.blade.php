@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="ml-3">Subir nota</h3>

    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Eliga el curso</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Por favor, Eliga el curso" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <div class="input-group-append">
                        <button class="fas fa-plus btn btn-primary"></button>
                    </div>
                </div>
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Eliga el estudiante</h5>
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Por favor, Eliga el estudiante" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                <div class="input-group-append">
                    <button class="fas fa-plus btn btn-primary"></button>
                </div>
        </div>
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Eliga la materia</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Por favor, Eliga la materia" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <div class="input-group-append">
                        <button class="fas fa-plus btn btn-primary"></button>
                    </div>
                </div>
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Agregar nota</h5>
                 <input type="text" class="form-control" placeholder="Agrege su nota aqui">
        </div>
    </div><br>
    <div class="row ml-3">
        <div class="col-xl-6">
            <button class="btn btn-primary">Subir nota</button>
        </div>
    </div>
</div>
@endsection
