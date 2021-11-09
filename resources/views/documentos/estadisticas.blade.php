@extends('admin.layout')

@section('content')
<div class="container">

<h4 class="ml-4"><i class="far fa-circle mr-3"></i>Generar estadistica documental</h4>
<div class="row">

    <div class="col-xl-4 mb-4">
        <p>Filtrar por:</p>
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
                    <option value="cc">Resoluciones</option>


            </select>
    </div>
</div>
    <div class="row">
        <div class="col-xl-3">
            <div id="tester" style="height:250px;"></div>
        </div>

    </div>
    <div class="row ml-1">
    <p>Los numeros de actas registradas son 1</p>
    </div>
   

</div>
@endsection
@section('scripts')
<script src="https://cdn.plot.ly/plotly-2.4.2.min.js"></script>
<script>
 
    var data = [{
      x: ["Actas"],
      y: ["1"],
      type: "bar"
    }];
    Plotly.newPlot("tester",data, {
	margin: { t: 0 } });
</script>
@endsection