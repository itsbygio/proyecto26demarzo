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
                Crear documento
            </label>
            </div>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-xl-5 ml-4">
        <p>Nombre del documento:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{old('nombre')}}" >
        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
    </div><br>
    <div class="row">
        <div class="col-xl-5 ml-4">
        <p>Tipo documento:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"   onchange="generar_elementos(this);" value="{{old('rol')}}">
                    <option value="ac">Actas</option>
                    <option value="co">Constancias</option>
                    <option value="ce">Certificados</option>
                    <option value="pe">Permisos</option>
                    <option value="ci">Circulares</option>
                    <option value="cc">Informes Academicos</option>
                    <option value="cc">Citaciones</option>
                    <option value="cc">Ordenes de cancelacion de matricula paz y salvo </option>
                    <option value="cc">Informes de diplomas otorgados</option>
                    <option value="cc">Acta de grado</option>
                    <option value="cc">Horario de clase</option>
                    <option value="cc">Diplomas</option>
                    <option value="cc">Resoluciones</option>


            </select>
        </div>
    </div>
    <br>

    <br>
    <div style="display:none" id="dropzoneitem" class="row">
        <div class="col-xl-5 ml-4">
        @csrf

       
                           <div id="dropzoneUpload" class="dropzone rounded bg-gray-100 dotted"></div>

        </div>
    </div>
    <button id="btn-next" class="btn btn-primary  ml-4 ">  Siguiente  </button>
    <button id="btn-upload"style="display:none" class="btn btn-primary  ml-4 mt-3">  Subir documento  </button>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
@include('documentos.documentos_script')
@endsection