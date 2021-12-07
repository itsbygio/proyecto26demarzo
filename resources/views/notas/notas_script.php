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
   function SubirNota()
   {    
        var idcurso= $('#id_curso').val();
        var idestudiante= $('#id_estudiante').val();
        var idmateria=$('#id_materia').val();
        var nota=$('#nota').val();
        var url="/nota/save";
        var formData = new FormData();
       if(idcurso==""){
        Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Seleccione un curso',
                    showConfirmButton: false,
                    timer: 1500
                });
       }
       else if(idestudiante==""){
        Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Seleccione un estudiante',
                    showConfirmButton: false,
                    timer: 1500
                });
       }
       else if(idmateria==""){
        Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Seleccione una materia',
                    showConfirmButton: false,
                    timer: 1500
                });
       }
       else if(nota==""){
        Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Ingrese la nota',
                    showConfirmButton: false,
                    timer: 1500
                });
       }
       else{
        formData.append('id_curso', $('#id_curso').val());
        formData.append('id_estudiante', $('#id_estudiante').val());
        formData.append('id_materia', $('#id_materia').val());
        formData.append('nota', $('#nota').val());
        axios.post(url,formData).then(response =>{
            if(response.data.result=="SI"){
                    Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'La nota ha sido registrada',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            else{
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Ya se ha asignado una nota al estudiante a la misma materia y al mismo curso',
                    showConfirmButton: false,
                    timer: 1500
                });

            }
         }).catch(function(err) {
            alert("Error de conexion a internet");
         });
       }
   }
function EditarNota(value,id){
    var url;       
       if(value=="editar"){
        url="/nota/update/{id}";
        }
        else{
         url="/nota/save";
        }
        var formData = new FormData();
        formData.append('id_nota',id);
        formData.append('id_curso', $('#id_curso').val());
        formData.append('id_estudiante', $('#id_estudiante').val());
        formData.append('id_materia', $('#id_materia').val());
        formData.append('nota', $('#nota').val());
        axios.post(url,formData).then(response =>{
            if(response.data.result=="SI"){
                    Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'La nota ha sido modificada',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            else{
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Ya se ha asignado una nota al estudiante a la misma materia y al mismo curso',
                    showConfirmButton: false,
                    timer: 1500
                });

            }
         }).catch(function(err) {
            alert("Error de conexion a internet");
         });

}


</script>