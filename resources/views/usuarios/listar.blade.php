@extends('admin.layout')

@section('content')

<div class="container ">
<h4 class="ml-4"><i class="fas fa-list mr-3"></i>Listar usuarios del sistema</h4><br>
   <div class="ml-4 mr-4">
    <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
        <thead>
             <tr>
                 
                 <th>nombre</th>
                 <th>Apellidos</th>       
                 <th>Email</th>
                 <th>rol</th>
                 <th>Fecha de creación</th>
                 <th>Fecha de modificación</th>
                 <th>Opciones</th>

             </tr>
         </thead>
         <tbody  >
         @foreach($usuarios as $usuario)
          <tr>
              <td>{{$usuario->nombre}} </td>
             <td> {{$usuario->apellidos}} </td>
              <td>{{$usuario->email}} </td>
              <td>{{$usuario->rol}}</td>
              <td>{{$usuario->created_at}} </td>
              <td>{{$usuario->updated_at}} </td>
              <td><a href="/editar/usuario/{{$usuario->id}}" class='btn btn-primary mr-1' >
             <i class='fas fa-pen-alt'></i></a><button  class='btn btn-primary ' onclick="btn_drop('{{$usuario->id}}')"><i class='far fa-minus-square'></i></button></td>
         </tr> 
               @endforeach
         

        
         </tbody>

     </table>
    </div>
</div>
@endsection
@section('scripts')
<script>
    var usuarios= <?php  echo $usuarios ?>;
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
            
         var url="/delete/usuario";
        axios.post(url,{"id":id}).then(response =>{
        location.href="/listar/usuarios";
        
    });
        }
        else{

        }
    }
});
    }
</script>
@endsection