@extends('admin.layout')

@section('content')

<div class="container ">
<h4 class="ml-1"><i class="fas fa-list mr-3"></i>Listar estudiantes del sistema</h4><br>
   <div class="ml-1 mr-4">
    <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
        <thead>
             <tr>
                 <th>id</th>
                 <th>nombre</th>
                 <th>Apellidos</th>
                 <th>tipo de documento</th>
                 <th>numero de identificacion</th>
                 <th>curso actual</th>
                 <th>¿egresado?</th>

                 <th>Opciones</th>

             </tr>
         </thead>
         <tbody>
             @foreach($estudiantes as $estudiante)
        <tr>
              <td>{{$estudiante->id}}</td>
              <td>{{$estudiante->nombre}} </td>
              <td> {{$estudiante->apellidos}} </td>
              <td>{{$estudiante->tipo_doc}} </td>
              <td>{{$estudiante->num_id}}</td>
              
              <td>
                  @if(isset($estudiante->curso->titulo))
                  {{$estudiante->curso->titulo}}
                  
                  @else
                 Ninguno
                @endif
              
            </td>
            <td>@if(isset($estudiante->curso->titulo))
                 NO
                  
                  @else
                  SI
                @endif</td>
              <td><a href="/editar/estudiante/{{$estudiante->id}}" class='btn btn-primary mr-3' > <i class='fas fa-pen-alt'></i></a><br>
              <button  class='btn btn-primary mr-3' onclick="btn_drop('{{$estudiante->id}}')"><i class='far fa-minus-square'></i></button></td>
        </tr>
            @endforeach
        
         </tbody>

     </table>
    </div>
</div>
@endsection
@section('scripts')
<script>
    var estudiantes= <?php  echo $estudiante ?>;
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
    function btn_drop(id){
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
           });
           var url="/delete/estudiante";
        axios.post(url,{"id":id}).then(response =>{
        location.href="/listar/estudiantes";
    });
        }
        else{

        }
    }
});
    }
</script>
@endsection