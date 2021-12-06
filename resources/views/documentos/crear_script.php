<script>
  function generar_elementos(data) {
    switch (data.value) {
      case 'acr':
        $('#btn-next').hide();
        $('#seccion_circular').hide();
        $('#seccion_per_doc').hide();
        $('#seccion_constancia').hide();
        $('#seccion_cer_nota').hide();
        $('#seccion_acta_reunion').show();

        break;
      case 'cone':
        $('#seccion_circular').hide();
        $('#seccion_cer_nota').hide();
        $('#seccion_per_doc').hide();
        $('#seccion_acta_reunion').hide();
        $('#btn-next').hide();
        $('#seccion_constancia').show();

        break;
      case 'cen':
        $('#seccion_circular').hide();
        $('#seccion_constancia').hide();
        $('#seccion_per_doc').hide();
        $('#seccion_acta_reunion').hide();
        $('#btn-next').hide();
        $('#seccion_cer_nota').show();
        break;
      case 'pd':
        $('#seccion_acta_reunion').hide();
        $('#seccion_constancia').hide();
        $('#seccion_cer_nota').hide();
        $('#btn-next').hide();
        $('#seccion_per_doc').show();

        break;

      case 'cir':
        $('#seccion_acta_reunion').hide();
        $('#seccion_per_doc').hide();
        $('#seccion_constancia').hide();
        $('#seccion_cer_nota').hide();
        $('#btn-next').hide();
        $('#seccion_circular').show();

        break;

      default:
        $('#seccion_per_doc').hide();
        $('#seccion_circular').hide();
        $('#seccion_acta_reunion').hide();
        $('#seccion_constancia').hide();
        $('#seccion_cer_nota').hide();
        $('#btn-next').show();
        break;

    }
  }
  $("#btn_acta_est").click(function() {
    var data = $('#form_acta_reunion').serialize();
    axios.post('/generar/actas_reunion', data, {
      responseType: "blob"
    }).then(response => {
      let blob = new Blob([response.data], {
        type: "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
      });

      let link = document.createElement("a");
      const contentDisposition = response.headers['content-disposition'];
      const fileName = contentDisposition.split(';')[1].split('=')[1];
      link.href = window.URL.createObjectURL(blob);
      link.download = fileName;
      link.click();

    }).catch(err => {
      console.log(err);
    });

  });

  $("#btn_cer_nota").click(function() {
    var data = $('#form_cer_nota').serialize();
    axios.post('/generar/certificado_notas', data, {
      responseType: "blob"
    }).then(response => {
      let blob = new Blob([response.data], {
        type: "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
      });

      let link = document.createElement("a");
      const contentDisposition = response.headers['content-disposition'];
      const fileName = contentDisposition.split(';')[1].split('=')[1];
      link.href = window.URL.createObjectURL(blob);
      link.download = fileName;
      link.click();

    }).catch(err => {
      console.log(err);
    });

  });

  $("#btn_per_doc").click(function() {
    var data = $('#form_per_doc').serialize();
    axios.post('/generar/permisos_docentes', data, {
      responseType: "blob"
    }).then(response => {
      let blob = new Blob([response.data], {
        type: "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
      });

      let link = document.createElement("a");
      const contentDisposition = response.headers['content-disposition'];
      const fileName = contentDisposition.split(';')[1].split('=')[1];
      link.href = window.URL.createObjectURL(blob);
      link.download = fileName;
      link.click();

    }).catch(err => {
      console.log(err);
    });
  });


  $("#btn_circular").click(function() {
    var data = $('#form_circular').serialize();
    axios.post('/generar/circular', data, {
      responseType: "blob"
    }).then(response => {
      let blob = new Blob([response.data], {
        type: "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
      });

      let link = document.createElement("a");
      const contentDisposition = response.headers['content-disposition'];
      const fileName = contentDisposition.split(';')[1].split('=')[1];
      link.href = window.URL.createObjectURL(blob);
      link.download = fileName;
      link.click();

    }).catch(err => {
      console.log(err);
    });

  });

  $("#btn_constancia").click(function() {

    var data = $('#form_constancia').serialize();
    axios.post('/generar/constancia_estudio', data, {
      responseType: "blob"
    }).then(response => {
      let blob = new Blob([response.data], {
        type: "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
      });

      let link = document.createElement("a");
      const contentDisposition = response.headers['content-disposition'];
      const fileName = contentDisposition.split(';')[1].split('=')[1];
      link.href = window.URL.createObjectURL(blob);
      link.download = fileName;
      link.click();

    }).catch(err => {
      console.log(err);
    });
  });

  $("#btn-next").click(function() {

    Swal.fire({
      position: 'center',
      icon: 'warning',
      title: "Por favor elija un documento",
      showConfirmButton: false,
      timer: 1500
    });

  });


  function handleClick(myRadio) {
    if (myRadio.value == "2") {
      $('#est_id').val("");
      $('#doc_id').val("");
      $('#s_nombre_upload').hide();
      $('#dropzoneitem').hide();
      $('#btn-upload').hide();
      $('#seccion_upload_constancia').hide();
      $('#seccion_upload_permiso').hide();
      $('#btn-next').show();
      $('#upload').hide();
      $('#generate').show();
      $('#selectgenerate').prop('selectedIndex', 0);
    } else {
      document.getElementById('form_acta_reunion').reset();
      document.getElementById('form_cer_nota').reset();
      document.getElementById('form_circular').reset();
      document.getElementById('form_constancia').reset();
      document.getElementById('form_per_doc').reset();
      $('#btn-next').hide();
      $('#generate').hide();
      $('#generate_btn').hide();
      $('#seccion_acta_reunion').hide();
      $('#seccion_constancia').hide();
      $('#seccion_cer_nota').hide();
      $('#seccion_circular').hide();
      $('#seccion_per_doc').hide();
      $('#s_nombre_upload').hide();
      $('#dropzoneitem').show();
      $('#upload').show();
      $('#btn-upload').show();
      $('#s_nombre_upload').show();
      $('#td').prop('selectedIndex', 0);


    }
  }
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
$('#table_modal_estudiantes').DataTable(

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
$('#table_modal_docentes').DataTable(

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
function RadioModalClick(titulo,id){
     //  var separa= myRadio.value.split(".",2);
    //    var string= separa[0];
       $("#ca").val(titulo);
       $("#id_curso_modal").val(id);
        
   }

   function AbrirModalEstudiantes(){
         $('#modal_estudiantes').modal('show'); 
    }
    function Addstudent(titulo,id){
      $("#titulo_modal_est").val(titulo);
       $("#id_est_modal").val(id);

    }
    function AbrirModalDocentes(){
      $('#modal_docentes').modal('show'); 

    }

    function Adddocente(titulo,id){
      $("#titulo_modal_doc").val(titulo);
       $("#id_doc_modal").val(id);
    }
</script>