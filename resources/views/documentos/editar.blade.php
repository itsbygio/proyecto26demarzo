@extends('admin.layout')
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"  rel="stylesheet">
@endsection
@section('content')
<div class="container">
<h4 class="ml-4"><i class="fas fa-plus mr-3"></i>Editar documento</h4>

 
    <br>
    <div class="row">
        <div class="col-xl-5 ml-4">
        <p>Nombre del documento:</p>
        <div class="input-group mb-3">
                    <input type="text" class="form-control " placeholder="Por favor, Eliga el curso" aria-label="Recipient's username" aria-describedby="basic-addon2"  value="{{$documento->titulo}}">
                    <div class="input-group-append">
                        <button class="fas fa-eye btn btn-primary"></button>
                    </div>
                </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-xl-5 ml-4">
        <p>Tipo documento:</p>
        <select onchange="changeselectedit(this)" id="td" name="td" class="form-control">
                    <option value="acr">Acta de reunion</option>
                    <option value="cone">Constancia de estudio</option>
                    <option value="cen">Certificado de nota</option>
                    <option value="pd">Permiso de docente</option>
                    <option value="cir">Circular</option>
                    <option value="ia">Informes Academico</option>
                    <option value="cd">Citaciones</option>
                    <option value="orcm">Ordenes de cancelacion de matricula </option>
                    <option value="pys">Paz y salvo estudiante </option>
                    <option value="ifp">Informes de diplomas otorgado</option>
                    <option value="acg">Acta de grado</option>
                    <option value="dp">Diploma</option>
                    <option value="rs">Resolucione</option>

            </select>
        </div>
    </div>
    <br>

    <br>
    <div id="dropzoneitem" class="row">
        <div class="col-xl-5 ml-4 text-center border pt-5 pb-5">
        <i class="fas fa-file-pdf fa-5x"></i><br><br>
         <a style="color:blue; cursor:pointer" id="btn_upload_modal">Remplazar archivo</a>  
        </div>
 
    </div>
    <br>
    <button class="btn btn-primary  ml-4 ">  Guardar cambios  </button>
    <br>
</div>
@include('documentos.modales.upload_modal')
@endsection
@section('scripts')
@include('documentos.editar_script')
@endsection