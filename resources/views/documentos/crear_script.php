<script>

function generar_elementos(data){
    switch (data.value) {
  case 'acr':
    $('#btn-next').hide();
    $('#seccion_acta_reunion').show();
    $('#generate_btn').show();

    break;
  case 'cone':

    break;
  case 'cen':

    break;
  case 'pd':

    break;

  case 'cir':

    break;

  default:
  $('#seccion_acta_reunion').hide();
  $('#btn-next').show();
  $('#generate_btn').hide();


}
}
$( "#btn-next" ).click(function() {
 
    Swal.fire({
      position: 'center',
      icon: 'warning',
      title: "Por favor elija un documento",
      showConfirmButton: false,
      timer: 1500
      });

});

function handleClick(myRadio){
if(myRadio.value=="2"){
    $('#dropzoneitem').hide(); 
    $('#btn-upload').hide();
    $('#btn-next').show();
    $('#upload').hide();
    $('#generate').show();
    $('#selectgenerate').prop('selectedIndex',0);
}
else{
    $('#dropzoneitem').show(); 
    $('#btn-next').hide(); 
    $('#btn-upload').show();
    $('#generate').hide();
    $('#upload').show();
    $('#generate_btn').hide();
    $('#seccion_acta_reunion').hide();

}
}



</script>