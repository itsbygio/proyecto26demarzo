<div class="row">
<div class="col-xl-12">
<h5>Por Favor digite los siguientes campos:</h5><br>
</div>
<div class="col-xl-3">
<form action="/generar/actas_reunion" method="POST">
    <p>Fecha de la reunion</p>
    <input name="fecha_reunion" id="fecha_reunion" type="date" class="form-control mb-3">

</div>
<div class="col-xl-3">
    <p>Lugar de la reunion</p>
    <input  name="lugar_reunion" id="lugar_reunion" type="text" class="form-control mb-3">

</div>
<div class="col-xl-3">
    <p>Hora de inicio</p>
    <input  name="hora_inicio"  id="hora_inicio"  type="time" class="form-control mb-3">

</div>
<div class="col-xl-3">
    <p>Hora final</p>
    <input  name="hora_final" id="hora_final" type="time" class="form-control mb-3">

</div>
<div class="col-xl-4">
    <p>Agenda</p>
        <textarea name="agenda" id="agenda" cols="30" class="form-control mb-3" rows="10" ></textarea>

</div>
<div class="col-xl-4">
    <p>Objeto de reunion</p>
        <textarea name="objeto_reunion" id="objeto_reunion" cols="30"  class="form-control mb-3"  rows="10"></textarea>

</div>
<div class="col-xl-4">
    <p>Desarrollo de la reunion</p>
        <textarea name="desarrollo_reunion" id="desarrollo_reunion" cols="30"  class="form-control mb-3"  rows="10"></textarea>

</div>
<div class="col-xl-4 ">
    <p>Descripcion de la reunion</p>
        <textarea name="descripcion_reunion" id="descripcion_reunion" cols="30"  class="form-control mb-3"  rows="10"></textarea>

</div>
<div class="col-xl-12 ">
    <button   type="submit"  class="btn btn-primary ">  Generar documento  </button>

    </form>
</div>
</div>