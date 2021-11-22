<script>
  var urlistartable= "<?php  echo "/listar/curyest/$id_curso"; ?>";

    $('#table_modalcursos').DataTable({
        pageLength : 5,
        lengthMenu: [[5], [5]],
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
          $('#table_modal').DataTable({
                pageLength : 5,
                lengthMenu: [[5], [5]],
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
            
      var table=$('#table_id').DataTable({  
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
                "ajax": {
                "url": urlistartable,
                "dataSrc": "",
                "type": "GET"
                     },                    
                    "columns": [
                    { "data": "id" ,"className":"hidden"},
                    { "data": "nombre" },
                    { "data": "apellidos" },
                    { "data": "num_id" },
                    { "defaultContent": " <button   class='btn btn-danger fas fa-times desasignar' ></button> "},
                    ]
            }
            );

     $('#table_id tbody').on('click', 'button.desasignar', function(){

            var data= table.row($(this).parents("tr")).data();
            desasignar(data.id_cur,data.id_est);
            document.getElementById('boxcheck'+data.id_est).checked = false;
            $('#table_id').DataTable().ajax.reload();
    });
   
    function RadioModalClick(id_curso,id_estudiante){
            var  boxcheck =document.getElementById('boxcheck'+id_estudiante).checked;
            if(boxcheck){
                    asignar(id_curso,id_estudiante);

                    $('#table_id').DataTable().ajax.reload();
            }
            else{
                desasignar(id_curso,id_estudiante);
                $('#table_id').DataTable().ajax.reload();

            }
    }

    function modalcursos(){
        $('#modalcursos').modal('show'); 
    }

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

    function asignar(id_curso,id_estudiante){
                var url="/asignar/estudiantes";
                var formData = new FormData();
                formData.append('idcurso', id_curso);
                formData.append('idestudiante', id_estudiante);
                fetch(url, {
                method: 'POST', // or 'PUT'
                body: formData, 
                headers:{
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",

                }
            }).then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(response => console.log('Success:', response));
      }    
      
     function desasignar(id_curso,id_estudiante){
                var url="/desasignar/estudiantes";
                var formData = new FormData();
                formData.append('idcurso', id_curso);
                formData.append('idestudiante', id_estudiante);
                fetch(url, {
                method: 'POST', // or 'PUT'
                body: formData, 
                headers:{
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",

                }
            }).then(res => res.json())
                .catch(error => console.error('Error:', error))
                .then(response => console.log('Success:', response));
    }


</script>






