@extends('admin.layout')

@section('content')

<div class="container ">
<h4 class="ml-4"><i class="fas fa-list mr-3"></i>Listar cursos </h4><br>
   <div class="ml-4 mr-4">
    <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
        <thead>
             <tr>
                
                 <th>Curso</th>
                 <th>Nombre</th>
                 <th>Año del curso</th>
                 <th> fecha de creacion</th>
                 <th> fecha de actualizacion</th>
                 <th> Opciones</th>


             </tr>
         </thead>
         <tbody  >
         @foreach($curso as $curso)
        <tr>
            
              <td>{{$curso->titulo}} </td>
              <td>{{$curso->titulo_letras}} </td>
              <td>{{$curso->año}} </td>

              <td>{{$curso->created_at}} </td>
              <td>{{$curso->updated_at}} </td>
              <td><a href="/editar/curso/{{$curso->id}}" class='btn btn-primary mr-3' > <i class='fas fa-pen-alt'></i></a>
              <button  class='btn btn-primary mr-3' onclick="btn_drop('{{$curso->id}}')"><i class='far fa-minus-square'></i></button></td>
        </tr>
            @endforeach

        
         </tbody>

     </table>
    </div>
</div>
@endsection
@section('scripts')
<script>
     var curso= <?php  echo $curso ?>;
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

           var url="/delete/curso";
        axios.post(url,{"id":id}).then(response =>{
        location.href="/listar/cursos";
    });
        }
        else{

        }
    }
});
    }
</script>
@endsection