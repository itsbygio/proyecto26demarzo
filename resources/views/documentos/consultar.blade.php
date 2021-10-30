@extends('admin.layout')

@section('content')
<div class="container">
<h4 class="ml-3"><i class="far fa-circle mr-3"></i>
 Consultar Documentos </h4>
    <div class="col-xl-4">
        <p>Consultar por:</p>
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"  value="{{old('rol')}}">
                    <option value="ti">Año</option>
                    <option value="cc">Mes</option>
                    <option value="cc">Dia</option>
                    <option value="cc">semana</option>
                    <option value="cc">Tipo de documento</option>

            </select>
            <br>
            <p>Tipo de documento:</p>
            <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"  value="{{old('rol')}}">
                    <option value="ti">Actas</option>
                    <option value="cc">Constancias</option>
                    <option value="cc">Certificados</option>
                    <option value="cc">Permisos</option>
                    <option value="cc">Circulares</option>
                    <option value="cc">Informes Academicos</option>
                    <option value="cc">Citaciones</option>
                    <option value="cc">Ordenes de cancelacion de matricula paz y salvo </option>
                    <option value="cc">Informes de diplomas otorgados</option>
                    <option value="cc">Acta de grado</option>
                    <option value="cc">Horario de clase</option>
                    <option value="cc">Diplomas</option>
                    <option value="cc">Actas</option>
                    <option value="cc">Resoluciones</option>


            </select>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-4">
        <button class="btn btn-primary ml-2">Consultar </button>

        </div>
    </div>
</div>
@endsection