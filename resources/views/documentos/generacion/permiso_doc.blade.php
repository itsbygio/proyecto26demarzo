<div class="row">
<div class="col-xl-12">
<h5>Por Favor digite los siguientes campos:</h5><br>
</div>
<div class="col-xl-12">
<form id="form_per_doc">

    <p>Nombre del documento</p>
    <input  name="nombre_doc" id="nombre_doc" type="text" class="form-control col-xl-5 mb-3">

</div>
<div class="col-xl-5">
<p>Numero de cedula docente</p>

<input type="text" name="cedula_docente" id="cedula_docente" placeholder="Ingrese la cedula del docente" class="form-control mb-4">
</div>
<div class="col-xl-12">
<p>Rellene los siguientes campos:(Opcional)</p>
</div>
<div class="col-xl-3">
<p>Tipo de reporte</p>
<select id="tipo_reporte" name="tipo_reporte"   type="text" class="form-control" >
                <option value=""></option>
                <option value="ausencia">Ausencia</option>
                <option value="permiso">Permiso</option>
</select>
</div>
<div class="col-xl-3">
<p>Fecha Inicial</p>
    <input name="fecha_inicial" id="fecha_inicial" type="date" class="form-control mb-3">  
</div>
<div class="col-xl-3">
<p>Fecha Final</p>
    <input name="fecha_final" id="fecha_final" type="date" class="form-control mb-3">  
</div>
<div class="col-xl-3">
<p>Hora salida</p>
    <input  name="hora_salida"  id="hora_salida"  type="time" class="form-control mb-3">
</div>
<div class="col-xl-3">
<p>Hora ingreso</p>
    <input  name="hora_ingreso"  id="hora_ingreso"  type="time" class="form-control mb-3">
</div>
<div class="col-xl-3">
<p>Total dias</p>
    <input  name="total_dias"  id="total_dias"  type="text" class="form-control mb-3">
</div>
<div class="col-xl-3">
<p>¿Anexo plan de trabajo?</p>
<select id="plan_trabajo" name="plan_trabajo"   type="text" class="form-control" >
                <option value=""></option>
                <option value="si">SI</option>
                <option value="no">NO</option>
</select>
</div>
<div class="col-xl-3">
<p>Motivos de la solicitud</p>
<select id="motivo" name="motivo"   type="text" class="form-control" >
                <option value=""></option>
                <option value="ce">CITA ESPECIALIZADA</option>
                <option value="cd">CALAMIDAD DOMESTICA</option>
                <option value="ef">ENFERMEDAD DE FAMILIAR</option>
                <option value="tm">TRATAMIENTO MEDICO</option>
                <option value="lc">LACTANCIA</option>
                <option value="ed">EVENTO DEPORTIVO</option>
                <option value="cap">CAPACITACION</option>
                <option value="pjd">POR JURADO DE </option>
                <option value="pdv">POR EJERCER DERECHO AL VOTO </option>
                <option value="per">PERSONAL </option>
</select>
</div>
<div class="col-xl-5">
    <p>Soportes,anexos,justificacion u observaciones</p>
        <textarea name="soporte" id="soporte" cols="30"  class="form-control mb-3"  rows="5"></textarea>

</div>
<div class="col-xl-12">
    <button id="btn_per_doc"  type="button" class="btn btn-primary">Generar documento</button>
</div>
</form>
</div>