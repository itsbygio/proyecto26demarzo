@extends('admin.layout')
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"  rel="stylesheet">
@endsection
@section('content')
<div class="container">
<h4 class="ml-4"><i class="fas fa-plus mr-3"></i>Crear documento</h4>

    <div class="row">
        <div class="col-xl-4 ml-4">
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
        <div class="col-xl-4 ml-4">
        <p>Nombre del documento:</p>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{old('nombre')}}" >
        @error('nombre')
        <div  style="color:red;">{{ $message }}*</div>
        @enderror
        </div>
    </div><br>
    <div class="row">
        <div class="col-xl-4 ml-4">
        <p>Tipo documento:</p>
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
    </div>
    <br>
    <div class="row">
    <div class="col-xl-4 ml-4">
        <p>Categoria del documento:</p>
        <select id="rol" name="rol" class="form-control" id="exampleFormControlSelect1"  value="{{old('rol')}}">
                    <option value="ti">Categoria 1</option>
                    <option value="cc">Categoria 2</option>
                    <option value="cc">Categoria 3</option>
            </select>
        </div>
    </div>
    <br>
    <div style="display:none" id="dropzoneitem" class="row">
        <div class="col-xl-4 ml-4">
        @csrf

        <form id="formulario" enctype="multipart/form-data">
                           <div id="dropzoneUpload" class="dropzone rounded bg-gray-100 dotted"></div>

                            </form>
        </div>
    </div>
    <br>
    <button class="btn btn-primary ml-4"> Guardar </button>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
<script>
function handleClick(myRadio){
if(myRadio.value=="2"){
    $('#dropzoneitem').hide(); 
}
else{
    $('#dropzoneitem').show(); 

}
}
</script>
@endsection