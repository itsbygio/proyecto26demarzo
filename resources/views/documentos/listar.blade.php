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
                 <th>titulo</th>
                 <th>tipo</th>
                 <th>subtipo</th>
                 <th>fecha creacion</th>
                 <th>fecha actualizacion</th>
                 <th>Opciones</th>

             </tr>
         </thead>
         <tbody  >
         @foreach($documentos as $documento)
           <tr>
            <td>{{$documento->titulo}}</td>
            <td>{{$documento->tipo}}</td>
            <td>{{$documento->subtipo}}</td>
            <td>{{$documento->created_at}}</td>
            <td>{{$documento->updated_at}}</td>
            <td><a href="/editar/documento/{{$documento->id}}" class="btn btn-primary fas fa-pen-alt"></a></td>
           </tr>
          @endforeach
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