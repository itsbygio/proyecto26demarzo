<script>
    $('#table_modalcursos').DataTable(

{
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
     $('#table_modal').DataTable(

            {
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
    function RadioModalClick(id_curso,id_estudiante){
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
</script>






