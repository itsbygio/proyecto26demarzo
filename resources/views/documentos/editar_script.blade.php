<script>
var id_documento = "<?php echo $documento->id ?>";

   $( "#btn_upload_modal" ).click(function() {
    $('#upload_modal').modal('show'); 
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

function updated_data(){
 var url="/update/document";
  var formData = new FormData();
  formData.append("nm", $('#td').val());
  formData.append("numid", $('#est_id').val());
  formData.append("docid", $('#doc_id').val());
  formData.append("id_documento", id_documento);
 axios.post(url,formData).then(response =>{

  console.log(response.data);
   });
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
                   title: 'Su ha archivo ha sido subido',
                   timer: 2000
        
              }).then(function() {
            //  location.href="/tienda/administrador";
            
                });       
               
              }); 
            
            },
            success: function(file, response) {
                console.log(response);
               

            },
            error: function(file, response) {
                    Swal.fire({
                   icon: 'error',
                   title: 'Ops',
                   html:
                   '<span style="color:white"> Solo puedes subir archivos pdf </span>,'
                    })
                

            },
    
  });

});
</script>