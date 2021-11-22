<script>

$('#table_cursos_modal').DataTable({
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
     $('#table_estudiantes_modal').DataTable({
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
     $('#table_materias_modal').DataTable({
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

    function AbrirModalCursos(){
    $('#modal_cursos').modal('show'); 
    }

    function AbrirModalMaterias(){
    $('#modal_materias').modal('show'); 
    }

    function AbrirModalEstudiantes(){
    $('#modal_estudiantes').modal('show'); 
    }
    
   function RadioEventChange(id,titulo,condicion){
    switch (condicion) {
        case 'cursos':
       $('#curso').val(titulo);
       $('#id_curso').val(id);
            break;
        case 'estudiantes':
            $('#estudiante').val(titulo);
            $('#id_estudiante').val(id);
            break;
        case 'materias':
            $('#materia').val(titulo);
            $('#id_materia').val(id);
            break;
        
        default:
        break;
       }
   }
   function SubirNota(){
                var url="/nota/store";
                var formData = new FormData();
                formData.append('id_curso', $('#id_curso').val());
                formData.append('id_estudiante', $('#id_estudiante').val());
                formData.append('id_materia', $('#id_materia').val());
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