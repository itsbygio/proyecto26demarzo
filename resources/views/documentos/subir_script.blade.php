<script>
  var file_upload=null;
function changeDocumentUpload(data){
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
Dropzone.autoDiscover = false;
document.addEventListener('DOMContentLoaded', () => {
  
  const dropzoneUpload = new Dropzone('#dropzoneUpload', {
        autoProcessQueue: false,
        maxFilesize: 50,
        parallelUploads: 1,
        maxFiles: 1,
        url: "/save/document",
        dictDefaultMessage: 'Sube aquí tu archivo',
        acceptedFiles: ".pdf",
        addRemoveLinks: true,
        dictRemoveFile: 'Borrar Archivo',
    
        headers: {
                'X-CSRF-TOKEN':  "{{ csrf_token() }}"
            },
            init: function() {
              this.on("sending", function(file, xhr, formData){
                      formData.append("titulo_document_upload", $('#nombre_upload').val());
                        formData.append("nm", $('#td').val());
                        formData.append("numid", $('#est_id').val());
                        formData.append("docid", $('#doc_id').val());
                });
              this.on("queuecomplete", function () {
            this.options.autoProcessQueue = false;
              });

              this.on("processing", function () {
                  this.options.autoProcessQueue = true;
                });
                this.on("addedfile", function(file) { 
                  file.previewElement.classList.add('dz-complete');
                  file_upload= file;
                  });
              this.on("removedfile", function(file) { 
                   file_upload= null;
                });
              $("#btn-upload").click(function(e){
                if($("#nombre_upload").val()==""){
                  Swal.fire({
                   icon: 'warning',
                   title: 'Ingrese un nombre al documento',
                   timer: 2000
        
                 });
                }
              else if($("#td").val()==""){
                Swal.fire({
                   icon: 'warning',
                   title: 'Seleccione un documento',
                   timer: 2000
        
                 });
               }
               else if(file_upload == null){
                Swal.fire({
                   icon: 'warning',
                   title: 'Adjunte un documento pdf',
                   timer: 2000
        
                 });
               }
               else{
               e.preventDefault();
                dropzoneUpload.processQueue();
                }
              }); 
            },
            success: function(file, response) {
              if(response=="404"){
                Swal.fire({
                   icon: 'warning',
                   title: 'No se encuentra la identificacion',
                   timer: 2000
        
              });
              }
              else{
              Swal.fire({
                   icon: 'success',
                   title: 'Su ha archivo ha sido subido',
                   timer: 2000
        
              }); 
             console.log(response);
              }
            },
            error: function(file, response) {
              this.removeFile(file);

            },
    
  });
});
</script>