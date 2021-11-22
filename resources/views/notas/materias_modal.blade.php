<div class="modal fade" id="modal_materias" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliga los estudiantes del curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table id="table_materias_modal" class="table table-striped table-bordered" style="width:100%">  
                <thead>
                    <tr>
                        <th></th>
                        <th>Materia</th>
                    </tr>
                </thead>
                <tbody  >
                @foreach($materias as $materia)

                <tr>
                    <td class="text-center"><input class="form-check-input" onclick="RadioEventChange('{{$materia->id}}','{{$materia->titulo}}','materias');"type="radio" name="inlineRadioOptions" id="inlineRadio1"></td>
                    <td>{{$materia->titulo}}</td>
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
