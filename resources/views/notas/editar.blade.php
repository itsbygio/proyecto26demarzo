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
                    <input type="text" class="form-control" placeholder="Por favor, Eliga el curso" value="11-1" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <div class="input-group-append">
                        <button class="fas fa-pen-alt btn btn-primary"></button>
                    </div>
                </div>
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Eliga el estudiante</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Por favor, Eliga el curso" value="Andres Jiminez Ramirez" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <div class="input-group-append">
                        <button class="fas fa-pen-alt btn btn-primary"></button>
                    </div>
                </div>
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Eliga la materia</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Por favor, Eliga el curso" value="Quimica" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    <div class="input-group-append">
                        <button class="fas fa-pen-alt btn btn-primary"></button>
                    </div>
                </div>
        </div>
    </div>
    <br>
    <div class="row ml-3">
        <div class="col-xl-6">
                <h5 class="">Agregar nota</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Por favor, Escriba la nota" value="4.5" aria-label="Recipient's username" aria-describedby="basic-addon2">
             
                </div>        </div>
    </div><br>
    <div class="row ml-3">
        <div class="col-xl-6">
            <button class="btn btn-primary">Subir nota</button>
        </div>
    </div>
</div>
@endsection
