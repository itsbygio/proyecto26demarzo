<script>

function generar_elementos(data){
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
$( "#btn_acta_est" ).click(function() {

var data=$('#form_acta_reunion').serialize();
axios.post('/generar/actas_reunion',data).then(response =>{
  console.log(response.data);
});
});

  $( "#btn_cer_nota" ).click(function() {
   var data=$('#form_cer_nota').serialize();
   axios.post('/generar/certificado_notas',data).then(response =>{
     console.log(response.data);
   });

});

$( "#btn_per_doc" ).click(function() {
   var data=$('#form_per_doc').serialize();
   axios.post('/generar/permisos_docentes',data).then(response =>{
     console.log(response.data);
   });

});


$( "#btn_circular" ).click(function() {
   var data=$('#form_circular').serialize();
   axios.post('/generar/circular',data).then(response =>{
     console.log(response.data);
   });
  
});

$( "#btn_constancia" ).click(function() {

   var data=$('#form_constancia').serialize();
   axios.post('/generar/constancia_estudio',data).then(response =>{
     console.log(response.data);
   });
 });

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
    $('#nombre_document_upload').hide();
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
    $('#nombre_document_upload').show();


}
}



</script>