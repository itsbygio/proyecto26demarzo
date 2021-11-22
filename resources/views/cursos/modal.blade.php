<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliga los estudiantes del curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <table id="table_modal" class="table table-striped table-bordered" style="width:100%">
        
        <thead>
             <tr>
                 <th></th>
                 <th>nombre</th>
                 <th> Apellidos</th>
                 <th> Numero de identificacion</th>
             </tr>
         </thead>
         <tbody  >
         <?php foreach($estudiantes as $estudiante){?>
        <tr>
         
         <td><div  class="form-check text-center"><input  id="boxcheck{{$estudiante->id}}" style="width:18px; height:18px;" class="form-check-input" type="checkbox" onclick="RadioModalClick('{{$id_curso}}','{{$estudiante->id}}');" id="flexCheckDefault"  >
      
       </div>
       </td>
         <td><?php echo $estudiante->nombre ?></td>
         <td><?php echo $estudiante->apellidos?></td>
         <td><?php echo $estudiante->num_id ?></td>
     </tr>
        <?php } ?>
        <?php foreach($curyests as $curyest){?>
        <tr>
         
            <td><div  class="form-check text-center"><input  id="boxcheck{{$curyest->estudiante->id}}" style="width:18px; height:18px;" class="form-check-input" type="checkbox" onclick="RadioModalClick('{{$id_curso}}','{{$curyest->estudiante->id}}');" id="flexCheckDefault" checked >
         
          </div>
          </td>
            <td><?php echo $curyest->estudiante->nombre ?></td>
            <td><?php echo $curyest->estudiante->apellidos?></td>
            <td><?php echo $curyest->estudiante->num_id ?></td>
        </tr>
       <?php } ?>
      
         </tbody>

     </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
