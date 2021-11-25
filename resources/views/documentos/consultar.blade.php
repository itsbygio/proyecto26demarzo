@extends('admin.layout')

@section('content')
<div class="container">
<h4 class="ml-3"><i class="far fa-circle mr-3"></i>
 Consultar Documentos </h4>
    <div class="col-xl-5">
        <p>Consultar por:</p>
            <select  onchange="ChangeDateSelect(this)" class="form-control">
                    <option value="">Seleccione una opcion</option>
                    <option value="año">Año</option>
                    <option value="mes">Mes</option>
                    <option value="dia">Dia</option>
            </select>
            <br>
            <div id="inputsdate"></div>
            <br>
            <p>Tipo de documento:</p>
            <select id="td" name="td" class="form-control">
                    <option value="">Seleccione un tipo de documento</option>
                    <option value="Acta">Actas</option>
                    <option value="Constancia">Constancias</option>
                    <option value="Certificado">Certificados</option>
                    <option value="Permiso">Permisos</option>
                    <option value="Circular">Circulares</option>
                    <option value="Informe Academico">Informes Academicos</option>
                    <option value="Citacion">Citaciones</option>
                    <option value="Orden">Ordenes de cancelacion de matricula paz y salvo </option>
                    <option value="Informe diploma">Informes de diplomas otorgados</option>
                    <option value="Acta de grado">Acta de grado</option>
                    <option value="Diploma">Diplomas</option>
                    <option value="Resolucion">Resoluciones</option>
            </select>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-4">
        <button class="btn btn-primary ml-2">Consultar </button>

        </div>
    </div>
</div>
@section('scripts')
@include('documentos.consultar_script')
@endsection
@endsection
