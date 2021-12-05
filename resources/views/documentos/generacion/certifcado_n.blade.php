<div class="row">
<div class="col-xl-12">
<h5>Por Favor digite los siguientes campos</h5><br>
</div>
<div class="col-xl-12">
<form id="form_cer_nota">
    <p>Nombre del documento</p>
    <input  name="nombre_doc" id="nombre_doc" type="text" class="form-control col-xl-5 mb-3">
</div>
<div class="col-xl-5">
<p>Numero de identificacion del estudiante </p>

<input type="text" name="id_cer_est" id="id_cer_est" placeholder="Ingrese el numero de indentificacion" class="form-control mb-4">
</div>
<div class="col-xl-5">
<p>Por favor Elija el curso </p>

<div class="input-group  " >
                    <input type="text" id="ca"  name="titulo "class="form-control" placeholder="Por favor, Eliga el curso" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled >
                    <input   style="display:none" type="text" id="id_curso_modal" name="id_curso_modal" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2"  >

                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">+</button>
                    </div>
                </div>
</div>
<div class="col-xl-12">
    <button id="btn_cer_nota"  type="button" class="btn btn-primary mt-3">Generar documento</button>
</div>
</form>
</div>