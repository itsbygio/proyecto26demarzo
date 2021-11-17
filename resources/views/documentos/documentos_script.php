<script>
function generar_elementos(data){
    switch (data.value) {
  case 'ac':
   alert('ac');
    break;
  case 'co':
    alert('co');
    break;
  case 'ce':
    alert('ce');
    break;
  case 'pe':
    alert('pe');
    break;
  case 'ci':
    alert('ci');
    break;
  default:
  alert('nn');

}
}
Dropzone.autoDiscover = false;
document.addEventListener('DOMContentLoaded', () => {
    const dropzoneUpload = new Dropzone('#dropzoneUpload', {
        autoProcessQueue: false,
            maxFilesize: 2,
            parallelUploads: 20,
            maxFiles: 20,
            url: "/dropzone/upload",
            dictDefaultMessage: 'Sube aquí tu archivo',
            acceptedFiles: ".png,.jpg,.jpeg,.gif,.bmp,.pdf",
            addRemoveLinks: true,
            dictRemoveFile: 'Borrar Archivo',
            init: function() {

            this.on("addedfile", function(file) { 
                      file.previewElement.classList.add('dz-complete');
                      });
            }
    });
});
function handleClick(myRadio){
if(myRadio.value=="2"){
    $('#dropzoneitem').hide(); 
    $('#btn-upload').hide();
    $('#btn-next').show(); 
}
else{
    $('#dropzoneitem').show(); 
    $('#btn-next').hide(); 
    $('#btn-upload').show(); 
}
}

</script>