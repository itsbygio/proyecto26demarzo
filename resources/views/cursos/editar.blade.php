@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Editar curso</h3>
    <div class="row">
        <div class="col-xl-4">
        <h5>El curso seleccionado es:</h5>
        <div class="input-group mb-3">
                <input type="text" class="form-control" value="11-1" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                <div class="input-group-append">
                    <button class="fas fa-pen-alt btn btn-primary"></button>
                </div>
        </div>        
      </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">+ Asignar Estudiantes</button>
        </div>
      </div>
      <br>
      <div class="row">
      <h5>Estudiantes asignados al curso:</h5>
      </div>
      <br>
      <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
        <thead>
             <tr>
                 <th>id</th>
                 <th>nombre </th>
                 <th>apellidos</th>
                 <th>opciones</th>
             </tr>
         </thead>
         <tbody  >
        <tr>
            <td>1</td>
            <td>Andres</td>
            <td>Jimenez Ramirez</td>
            <td  style="text-align:center"><button href="/editar/materia" class='btn btn-danger fas fa-times' ></button> </td>
        </tr>

        
         </tbody>

     </table>
</div>
@include('cursos.modal')
@endsection
@section('scripts')
<script>
    $('#table_id').DataTable(
            
            {
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "zeroRecords": "No hay registros",
                    "info": "Mostrando pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ total de registros)",
                    "search":         "Buscar:",
                    "paginate": {
                        "first":      "First",
                        "last":       "Last",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    },
                },
                

            }
            );
    function btn_drop(){
        bootbox.confirm({
    message: "¿Estas seguro de eliminar este registro?",
    centerVertical:true,
    backdrop:true,
    onEscape:true,
    buttons: {
        confirm: {
            label: 'Si',
            className: 'btn-success pr-3 pl-3'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if(result){
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Registro eliminado',
            showConfirmButton: false,
            timer: 1500
           })
        
        }
        else{

        }
    }
});
    }
</script>
@endsection