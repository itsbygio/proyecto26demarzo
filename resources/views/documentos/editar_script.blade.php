<script>
var id_documento = "<?php echo $documento->id ?>";
var ext = "<?php echo $documento->ext ?>";

   $( "#btn_upload_modal" ).click(function() {
    $('#upload_modal').modal('show'); 
   });
   $( "#WhatDocument" ).click(function() {
    window.open("/documentos/"+id_documento+ext);  
   });
   
function changeselectedit(data){
    switch (data.value) {
        case "cone":
       $("#seccion_upload_constancia").show();
       $("#seccion_upload_permiso").hide();

          break;
        case "cen": 
          $("#seccion_upload_permiso").hide();
          $("#seccion_upload_constancia").show();
          break;
        case "pd": 
          $("#seccion_upload_constancia").hide();
          $("#seccion_upload_permiso").show();
          break; 
         case "orcm": 
           $("#seccion_upload_permiso").hide();
           $("#seccion_upload_constancia").show();

          break; 
          case "pys": 
           $("#seccion_upload_permiso").hide();
           $("#seccion_upload_constancia").show();
          break; 
          case "acg": 
           $("#seccion_upload_permiso").hide();
           $("#seccion_upload_constancia").show();
          break; 
          case "dp": 
           $("#seccion_upload_permiso").hide();
           $("#seccion_upload_constancia").show();
          break;
        default:
        $("#seccion_upload_constancia").hide();
        $("#seccion_upload_permiso").hide();


      }
}

function sweetalertsuccess(mensaje){
  Swal.fire({
            position: 'center',
            icon: 'success',
            title: mensaje,
            showConfirmButton: false,
            timer: 1500
           })
}
function sweetalertwarning(mensaje){
  Swal.fire({
            position: 'center',
            icon: 'warning',
            title: mensaje,
            showConfirmButton: false,
            timer: 1500
           })
}
function updated_data(){
  if( $('#td').val()!=""){
 var url="/update/document";
  var formData = new FormData();
  formData.append("nm", $('#td').val());
  formData.append("numid", $('#est_id').val());
  formData.append("docid", $('#doc_id').val());
  formData.append("id_documento",id_documento);
  formData.append("titulo", $('#titulo').val());

 axios.post(url,formData).then(response =>{
     if(response.data.result=="OK"){
      Swal.fire({
                   icon: 'success',
                   title: 'Se han guardado los cambios',
                   timer: 2000
        
              }).then(function() {
                location.href="/editar/documento/"+id_documento;
                });    
                
         }
     else{
      sweetalertwarning("No se ha encontrado el numero de identificacion");


     }
 
   });
  }
  else{
    sweetalertwarning("Por favor elija un documento");
  }
}

Dropzone.autoDiscover = false;
document.addEventListener('DOMContentLoaded', () => {
  
  const dropzoneUpload = new Dropzone('#dropzoneUpload', {
        autoProcessQueue: false,
        maxFilesize: 50,
        parallelUploads: 1,
        maxFiles: 1,
        url: "/update/file",
        dictDefaultMessage: 'Sube aquí tu archivo',
        acceptedFiles: ".pdf",
        addRemoveLinks: true,
        dictRemoveFile: 'Borrar Archivo',
    
        headers: {
                'X-CSRF-TOKEN':  "{{ csrf_token() }}"
            },
            init: function() {
              this.on("sending", function(file, xhr, formData){
                        formData.append("nm", $('#td').val());
                        formData.append("numid", $('#est_id').val());
                        formData.append("docid", $('#doc_id').val());
                        formData.append("id_documento", id_documento);

                        
                });

              this.on("queuecomplete", function () {
            this.options.autoProcessQueue = false;
              });
   
              this.on("processing", function () {
                  this.options.autoProcessQueue = true;
                });
                this.on("addedfile", function(file) { 
                  file.previewElement.classList.add('dz-complete');
                  });
              $("#edit_btn_document").click(function(e){
                  
               // e.preventDefault();
                dropzoneUpload.processQueue();
               Swal.fire({
                   icon: 'success',
                   title: 'Su ha archivo ha sido reemplazado',
                   timer: 2000
        
              }).then(function() {
                location.href="/editar/documento/"+id_documento;
                });       
               
              }); 
            
            },
            maxfilesexceeded: function (files) {
                this.removeAllFiles();
                this.addFile(files);
            },
            success: function(file, response) {
                console.log(response);
               

            },
            error: function(file, response) {
              this.removeFile(file);
            },
    
  });

});
</script>