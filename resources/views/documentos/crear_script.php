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