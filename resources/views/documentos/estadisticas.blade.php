@extends('admin.layout')

@section('content')
<div class="container">

<h4 class="ml-4"><i class="far fa-circle mr-3"></i>Generar estadistica documental</h4>
<div class="row">

    <div class="col-xl-4 mb-4">
        <p>Filtrar por:</p>
            <select  name="documento" class="form-control"  onchange='changevent(this)' >
            @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" || Auth::user()->nrol=="3" )
                    <option value="acr">Acta de reunion</option>
            @endif
            @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" || Auth::user()->nrol=="4" )
                    <option value="cone">Constancia de estudio</option>
            @endif
            @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" || Auth::user()->nrol=="4" )
                    <option value="cen">Certificado de notas</option>
            @endif
            @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" )
                    <option value="pd">Permisos de docentes</option>
            @endif
            @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="3")
                    <option value="cir">Circulares</option>
            @endif
            @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" )
                    <option value="ia">Informe Academico</option>
            @endif
            @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2"  )        
                    <option value="cd">Citaciones de docentes</option>
            @endif
            @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="3" )       
                    <option value="orcm">Ordenes de cancelacion de matricula</option>
            @endif
            @if( Auth::user()->nrol=="1"|| Auth::user()->nrol=="3" )
                    <option value="pys">Paz y salvo estudiante</option>
            @endif
            @if( Auth::user()->nrol=="1" || Auth::user()->nrol=="2" )
                    <option value="ifp">Informes de diplomas</option>
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
    <div class="row">
        <div class="col-xl-3">
            <div id="tester" style="height:250px;"></div>
        </div>

    </div>
    <div class="row ml-1">
    <p>El numero de <span id="tipo"></span> registrados son <span id="num"></span></p>
    </div>
   

</div>
@section('scripts')
<script src="https://cdn.plot.ly/plotly-2.4.2.min.js"></script>
<script>
     var documento="Acta de reunion";
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
      var nm= object.value;
    formData.append('nm',nm);
    axios.post(url,formData).then(response =>{
        console.log(response.data);
         data[0]['y'][0]=response.data.count;
         data[0]['x'][0]=response.data.subtipo;
         Plotly.redraw("tester");
         $('#num').html(response.data.count);
         $('#tipo').html(response.data.subtipo);
        });
     
}

   
</script>
@endsection
@endsection
