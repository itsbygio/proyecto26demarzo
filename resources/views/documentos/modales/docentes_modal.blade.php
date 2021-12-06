<div class="modal fade" id="modal_docentes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Seleccione el estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   

      <table id="table_modal_docentes" class="table table-striped table-bordered" style="width:100%">
      
        <thead>
             <tr>
                <th></th>
                 <th  class="text-center">Nombre</th>
                 <th  class="text-center">Apellidos</th>
                 <th  class="text-center">Identificacion</th>
             </tr>
         </thead>
         <tbody  >
         @foreach($docentes as $docente)
        <tr>
            
            <td class="text-center">
            <div class="form-check form-check-inline ">
                <input class="form-check-input" onclick="Adddocente('{{$docente->nombre}} {{$docente->apellidos}}','{{$docente->id}}')"
                 value="" type="radio" name="inlineRadioOptions" id="inlineRadio1">
              
            </div>
            </td>
            <th class="text-center">{{$docente->nombre}}</th>
            <td class="text-center">{{$docente->apellidos}}</td>
            <td class="text-center">{{$docente->num_id}}</td>
         
        </tr>
        @endforeach
         </tbody>

     </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
