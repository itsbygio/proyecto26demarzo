@extends('admin.layout')

@section('content')

<div class="container ">
<h4 class="ml-4"><i class="fas fa-list mr-3"></i>Listar documentos del sistema</h4>
<div class="row">
<div class="col-xl-9">
</div>
<div class="col-xl-3 ">
</div>
</div>
<br>
   <div class="ml-4 mr-4">
    <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
        <thead>
             <tr>
                 <th>id</th>
                 <th>nombre</th>
                 <th>tipo</th>
                 <th>fecha creacion</th>
                 <th>fecha actualizacion</th>
                 <th>Opciones</th>

             </tr>
         </thead>
         <tbody  >
        <tr>
            <td>1</td>
            <td>Acta </td>
            <td>Acta</td>
            <td>28-10-2021 12:11:00</td>
            <td>28-10-2021 12:30:00</td>
            <td style="text-align:center"><a href="/editar/documento" class='btn btn-primary' ><i class='fas fa-pen-alt'></i></a> <button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-minus-square'></i></button><button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-eye'></i></button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Constancia </td>
            <td>Constancia</td>
            <td>27-10-2021 11:30:00</td>
            <td>27-10-2021 11:45:00</td>
            <td style="text-align:center"><a href="/editar/docente/1" class='btn btn-primary' ><i class='fas fa-pen-alt'></i></a> <button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-minus-square'></i></button><button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-eye'></i></button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Certificados </td>
            <td>Certificados</td>
            <td>26-10-2021 08:32:00</td>
            <td>28-10-2021 9:45:00</td>
            <td style="text-align:center"><a href="/editar/docente/1" class='btn btn-primary' ><i class='fas fa-pen-alt'></i></a> <button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-minus-square'></i></button><button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-eye'></i></button></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Permisos </td>
            <td>Permisos</td>
            <td>28-10-2021 12:11:00</td>
            <td>28-10-2021 12:30:00</td>
            <td style="text-align:center"><a href="/editar/docente/1" class='btn btn-primary' ><i class='fas fa-pen-alt'></i></a> <button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-minus-square'></i></button><button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-eye'></i></button></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Circulares </td>
            <td>Circulares</td>
            <td>25-10-2021 9:26:00</td>
            <td>25-10-2021 10:30:00</td>
            <td style="text-align:center"><a href="/editar/docente/1" class='btn btn-primary' ><i class='fas fa-pen-alt'></i></a> <button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-minus-square'></i></button><button  class='btn btn-primary  ml-3' onclick="btn_drop('1')"><i class='far fa-eye'></i></button></td>
        </tr>
        
         </tbody>

     </table>
    </div>
</div>
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
    message: "¿Estas seguro de eliminar este documento?",
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