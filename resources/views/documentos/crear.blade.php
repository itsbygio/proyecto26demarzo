@extends('admin.layout')
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"  rel="stylesheet">
@endsection
@section('content')
<div class="container">
<h4 class="ml-4"><i class="fas fa-plus mr-3"></i>Crear documento</h4>

    <div class="row">
        <div class="col-xl-5 ml-4">
            <br>
        <div class="form-check">
            <input  onclick="handleClick(this);" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
            <label class="form-check-label" for="flexRadioDefault1">
                Subir Documento
            </label>
            </div>
            <div class="form-check">
            <input  onclick="handleClick(this);" class="form-check-input"  type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2" checked >
            <label class="form-check-label" for="flexRadioDefault2">
                Generar documento
            </label>
            </div>
        </div>

    </div>
    <div class="row">
    </div><br>
    <div id="generate" class="row">
        <div class="col-xl-5 ml-4">
        <p>Seleccione el documento:</p>
         <select onchange="generar_elementos(this)" id="selectgenerate" class="form-control">
                    <option value="">Seleccione un  documento</option>
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" || Auth::user()->nrol=="3" )
                    <option value="acr">Acta de reunion</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" || Auth::user()->nrol=="4" )
                    <option value="cone">Constancia de estudio</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" || Auth::user()->nrol=="4" )
                    <option value="cen">Certificados de notas</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" )
                    <option value="pd">Permiso docente</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="3")
                    <option value="cir">Circular </option>
                    @endif

         </select>
        </div>
    </div>
    <br>

    <div style="display:none" id="seccion_acta_reunion" class="ml-4 ">
     @include('documentos.generacion.actareunion')
   </div>
   <div style="display:none" id="seccion_constancia" class="ml-4 ">
     @include('documentos.generacion.constancia_est')
   </div>
   <div style="display:none" id="seccion_cer_nota" class="ml-4 ">
     @include('documentos.generacion.certifcado_n')
   </div>
   <div style="display:none" id="seccion_circular" class="ml-4 ">
     @include('documentos.generacion.circulares')
   </div>
   <div style="display:none" id="seccion_per_doc" class="ml-4 ">
     @include('documentos.generacion.permiso_doc')
   </div>
   <div style="display:none" id="s_nombre_upload" class="ml-4 mb-3">
   <div class="col-xl-12">
   <p>Nombre del documento</p>

   </div>
     <input type="text" id="nombre_upload" class="form-control col-xl-5">
   </div>
    <div style="display:none" id="upload" class="row mb-3">
        <div class="col-xl-5 ml-4">
        <p>Seleccione el documento:</p>
        <select  onchange="changeDocumentUpload(this)" id="td" name="td" class="form-control">
                    <option value="">Seleccione un  documento</option>
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" || Auth::user()->nrol=="3" )
                    <option value="acr">Acta de reunion</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" || Auth::user()->nrol=="4" )
                    <option value="cone">Constancia de estudio</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" || Auth::user()->nrol=="4" )
                    <option value="cen">Certificados de notas</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" )
                    <option value="pd">Permiso docente</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="3")
                    <option value="cir">Circular </option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" )
                    <option value="ia">Informe Academico</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2"  )
                    <option value="cd">Citacion </option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="3" )
                    <option value="orcm">Orden de cancelacion matricula  </option>
                    @endif
                    @if( Auth::user()->nrol=="1"|| Auth::user()->nrol=="3" )
                    <option value="pys">Paz y salvo </option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" )
                    <option value="ifp">Informe de diploma</option>
                    @endif
                    @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="3" )
                    <option value="acg">Acta de grado</option>
                    @endif
                    @if( Auth::user()->nrol=="1" ||  Auth::user()->nrol=="3")
                    <option value="dp">Diploma</option>
                    @endif
                    @if( Auth::user()->nrol=="1"|| Auth::user()->nrol=="2" )
                    <option value="rs">Resolucion</option>
                    @endif

            </select>
        </div>
    </div>
    <div style="display:none" id="seccion_upload_constancia" class="row  ml-3 mb-2">
        <div class="col-xl-5">
        <p>Elija  el estudiante:</p>

        <div class="input-group  " >

                    <input type="text" id="titulo_modal_est"  name="titulo_modal_est "class="form-control" placeholder="Por favor, Eliga el estudiante" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled >
                    <input  style="display:none"  type="text" id="id_est_modal" name="id_est_modal" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2"  >

                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary"  onclick="AbrirModalEstudiantes()">+</button>
                    </div>
                </div>
     <!--
            <p>Ingrese el numero de identificacion del estudiante</p>
          <input id="est_id" type="text" class="form-control" placeholder="Porfavor Ingrese el numero de identificacion">!-->
        </div>
    </div>
    <div style="display:none" id="seccion_upload_permiso" class="row  ml-3 mb-2">
        <div class="col-xl-5">
        <p>Elija  el docente:</p>
        <div class="input-group">

            <input type="text" id="titulo_modal_doc"  name="titulo_modal_doc "class="form-control" placeholder="Por favor, Eliga el docente" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled >
            <input  style="display:none"  type="text" id="id_doc_modal" name="id_doc_modal" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2"  >

            <div class="input-group-append">
                <button type="button" class="btn btn-primary"  onclick="AbrirModalDocentes()">+</button>
            </div>
          </div>
          <!--
            <p>Ingrese el numero de identificacion del docente</p>
          <input id="doc_id" type="text" class="form-control" placeholder="Porfavor Ingrese el numero de identificacion">!-->
        </div>
    </div>
    <br>
    <div style="display:none" id="dropzoneitem" class="row mb-3">
        <div class="col-xl-5 ml-4">
        @csrf


                           <div id="dropzoneUpload" class="dropzone rounded bg-gray-100 dotted"></div>

        </div>
    </div>

    <button id="btn-next"  type="button"   class="btn btn-primary  ml-4 ">  Siguiente  </button>
    <button id="btn-upload"style="display:none" class="btn btn-primary  ml-4 ">  Subir documento </button>

</div>
<br>
@include('estudiantes.modal')
@include('documentos.modales.estudiantes_modal')
@include('documentos.modales.docentes_modal')
@endsection

@section('scripts')
@include('documentos.crear_script')
@include('documentos.subir_script')

@endsection