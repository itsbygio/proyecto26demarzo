<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Seleccione el curso actual del estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   

      <table id="table_modal" class="table table-striped table-bordered" style="width:100%">
      
        <thead>
             <tr>
                <th></th>
                <th  class="text-center">id</th>
                 <th  class="text-center">curso</th>
                 <th  class="text-center">año</th>
             </tr>
         </thead>
         <tbody  >
         @foreach($cursos as $curso)
        <tr>
            
            <td class="text-center">
            <div class="form-check form-check-inline ">
                <input class="form-check-input" onclick="RadioModalClick(this);"
                 value=" {{$curso->titulo}}.{{$curso->id}} " type="radio" name="inlineRadioOptions" id="inlineRadio1">
              
            </div>
            </td>
            <th class="text-center">{{$curso->id}}</th>
            <td class="text-center">{{$curso->titulo}}</td>
            <td class="text-center">{{$curso->año}}</td>
         
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
