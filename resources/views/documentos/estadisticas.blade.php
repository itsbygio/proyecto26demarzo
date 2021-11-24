@extends('admin.layout')

@section('content')
<div class="container">

<h4 class="ml-4"><i class="far fa-circle mr-3"></i>Generar estadistica documental</h4>
<div class="row">

    <div class="col-xl-4 mb-4">
        <p>Filtrar por:</p>
            <select  name="documento" class="form-control"  onchange='changevent(this)' >
                    <option value="Acta">Actas</option>
                    <option value="Constancia">Constancias</option>
                    <option value="Certificado">Certificados</option>
                    <option value="Permiso">Permisos</option>
                    <option value="Circular">Circulares</option>
                    <option value="Informe">Informes</option>
                    <option value="Citacion">Citaciones</option>
                    <option value="Orden">Ordenes</option>
                    <option value="Diploma">Diplomas</option>
                    <option value="Resolucion">Resoluciones</option>

            </select>
    </div>
</div>
    <div class="row">
        <div class="col-xl-3">
            <div id="tester" style="height:250px;"></div>
        </div>

    </div>
    <div class="row ml-1">
    <p>El numero de <span id="tipo"></span> registrados son <span id="num"></span></p>
    </div>
   

</div>
@endsection
@section('scripts')
<script src="https://cdn.plot.ly/plotly-2.4.2.min.js"></script>
<script>
     var documento="Actas";
     var num= "<?php echo $Acta ?>"; 
    $('#num').html("<?php echo $Acta ?>");
    $('#tipo').html(documento);
    var data = [{
      x: [documento],
      y: [num],
      type: "bar"
    }];
    Plotly.newPlot("tester",data, {
	margin: { t: 0 } });

function changevent(object){
    var url ="/generar/estadistica"
      var formData = new FormData();
      var tipo= object.value;
    formData.append('tipo',tipo);
    axios.post(url,formData).then(response =>{
        console.log(response.data);
         data[0]['y'][0]=response.data.count;
         data[0]['x'][0]=response.data.tipo;
         Plotly.redraw("tester");
         $('#num').html(response.data.count);
         $('#tipo').html(response.data.tipo);
        });
     
}

   
</script>
@endsection