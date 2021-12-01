@extends('admin.layout')

@section('content')
<div class="container">
<h4 class="ml-3"><i class="far fa-circle mr-3"></i>
 Consultar Documentos </h4>
    <div class="col-xl-5">
        <p>Consultar por:</p>
            <select  id="selectconsulta" onchange="ChangeDateSelect(this)" class="form-control">
                    <option value="">Seleccione una opcion</option>
                    <option value="year">Año</option>
                    <option value="mes">Mes</option>
                    <option value="dia">Dia</option>
            </select>
            <br>
            <div id="inputsdate"></div>
            <br>
            <p>Seleccione el documento:</p>
            <select onchange="ChangeConsultDocument(this)" id="td" name="td" class="form-control">
                    <option value="">Seleccione un  documento</option>
                    <option value="acr">Acta de reunion</option>
                    <option value="cone">Constancia de estudio</option>
                    <option value="cen">Certificados de notas</option>
                    <option value="pd">Permisos de docentes</option>
                    <option value="cir">Circulares</option>
                    <option value="ia">Informes Academicos</option>
                    <option value="cd">Citaciones</option>
                    <option value="orcm">Ordenes de cancelacion de matricula  </option>
                    <option value="pys">Paz y salvo estudiante </option>
                    <option value="ifp">Informes de diplomas otorgados</option>
                    <option value="acg">Acta de grado</option>
                    <option value="dp">Diplomas</option>
                    <option value="rs">Resoluciones</option>
            </select>
    </div><br>
    <div style="display:none" id="seccion_upload_constancia" class="row  ml-1 mb-2">
        <div class="col-xl-5">
            <p>Ingrese el numero de identificacion del estudiante</p>
          <input id="est_num" type="text" class="form-control" placeholder="Porfavor Ingrese el numero de identificacion">
        </div>
    </div>
    <div style="display:none" id="seccion_upload_permiso" class="row  ml-1 mb-2">
        <div class="col-xl-5">
            <p>Ingrese el numero de identificacion del docente</p>
          <input id="doc_num" type="text" class="form-control" placeholder="Porfavor Ingrese el numero de identificacion">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-4">
        <button type="button" onclick="consultar()" class="btn btn-primary ml-2">Consultar </button>

        </div>
    </div><br>
    <div style="display:none" id="tablaconsulta">
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        <thead>
                <tr>
                    <th>id</th>
                    <th>titulo del documento</th>
                    <th>tipo</th>
                    <th>subtipo</th>
                    <th>Opciones</th>

                </tr>         
            </thead>
            <tbody>


            </tbody>
        </table>
    </div>
</div>
@section('scripts')
@include('documentos.consultar_script')
@endsection
@endsection
