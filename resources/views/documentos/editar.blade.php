@extends('admin.layout')
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"  rel="stylesheet">
@endsection
@section('content')
<div class="container">
<h4 class="ml-4"><i class="fas fa-edit mr-3 mb-2"></i>Editar documento</h4>
@if($documento->id_est!= null )
<p class="ml-4 mt-4 mb-4"> Documento asociado al estudiante: {{$documento->estudiante->nombre}} {{$documento->estudiante->apellidos}}</p>
@elseif($documento->id_doc!= null)
<p class="ml-4 mt-4 mb-4"> Documento asociado al docente:{{$documento->docente->nombre}} {{$documento->docente->apellidos}}</p>
@else
@endif
     <div class="row">
        <div class="col-xl-5 ml-4">
        <p>Nombre del documento:</p>
        <div class="input-group mb-3">
                    <input type="text" class="form-control"  id="titulo"    value="{{$documento->titulo}}">
                    <div class="input-group-append">
                        <button class="fas fa-eye btn btn-primary" id="WhatDocument"></button>
                    </div>
                </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-xl-5 ml-4">
        <p>Tipo documento:</p>
        <select onchange="changeselectedit(this)" id="td" name="td" class="form-control">
        <option value="{{$documento->nm}}">
        @if($documento->subtipo!="Ninguno")     
        {{$documento->subtipo}}
        @else
        {{$documento->tipo}}
        
        @endif
        </option> 

               @if($documento->nm!="acr")
                    <option value="acr">Acta de reunion</option>
               @endif
               @if($documento->nm!="cone")
                    <option value="cone">Constancia de estudio</option>
               @endif
               @if($documento->nm!="cen")
                    <option value="cen">Certificado de notas</option>
               @endif
               @if($documento->nm!="pd")
                    <option value="pd">Permiso docente</option>
               @endif
               @if($documento->nm!="cir")
                    <option value="cir">Circular</option>
               @endif
               @if($documento->nm!="ia")
                    <option value="ia">Informes Academico</option>
               @endif
               @if($documento->nm!="cd")
                    <option value="cd">Citacion</option>
               @endif
               @if($documento->nm!="orcm")
                    <option value="orcm">Orden de cancelacion matriculaa </option>
               @endif
               @if($documento->nm!="pys")
                    <option value="pys">Paz y salvo </option>
               @endif
               @if($documento->nm!="ifp")
                    <option value="ifp">Informe de diploma</option>
               @endif
               @if($documento->nm!="acg")
                    <option value="acg">Acta de grado</option>
               @endif
               @if($documento->nm!="dp")
                    <option value="dp">Diploma</option>
                @endif
                @if($documento->nm!="rs")
                    <option value="rs">Resolucion</option>
                @endif

            </select>
        </div>
    </div>
    <br>
    <div style="display:none" id="seccion_upload_constancia" class="row  ml-3 mb-2">
        <div class="col-xl-5">
            <p>Ingrese el numero de identificacion del estudiante</p>
          <input id="est_id" type="text" class="form-control" placeholder="Porfavor Ingrese el numero de identificacion">
        </div>
    </div>
    <div style="display:none" id="seccion_upload_permiso" class="row  ml-3 mb-2">
        <div class="col-xl-5">
            <p>Ingrese el numero de identificacion del docente</p>
          <input id="doc_id" type="text" class="form-control" placeholder="Porfavor Ingrese el numero de identificacion">
        </div>
    </div>
    <br>
    <div id="dropzoneitem" class="row">
        <div class="col-xl-5 ml-4 text-center border pt-5 pb-5">
        <i class="fas fa-file-pdf fa-5x"></i><br><br>
         <a style="color:blue; cursor:pointer" id="btn_upload_modal">Remplazar archivo</a>  
        </div>
 
    </div>
    <br>
    <button type="button" onclick="updated_data()" class="btn btn-primary  ml-4 ">  Guardar cambios  </button>
    <br><br>
</div>
@include('documentos.modales.upload_modal')
@endsection
@section('scripts')
@include('documentos.editar_script')
@endsection