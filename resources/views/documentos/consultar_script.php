<script>
var inputsdate= document.getElementById ("inputsdate");
var td="";
var input1 = document.createElement("input");
var input2 = document.createElement("input");
var input4 = document.createElement("input");
var formData = new FormData();
var selectconsulta;
var url="/consultas/doc";
var dia="";
var mes="";
var year="";
// input dia
input1.setAttribute("type","date");
input1.setAttribute("class","form-control");
input1.setAttribute("id","dia");
//input  mes
input2.setAttribute("type","month");
input2.setAttribute("class","form-control  mb-3");
input2.setAttribute("id","mes");

//input  año
input4.setAttribute("type","text");
input4.setAttribute("class","form-control");
input4.setAttribute("id","year");
function consultar(){ 
    asignarvalores();
    formData.append('dia',dia);
    formData.append('year',year);
    formData.append('mes',mes);
    formData.append('nm',$('#td').val());
    console.log($('#dia').val());
    
    axios.post(url,formData).then(response =>{

       if(response.data.result==0){
        sweetalert('No se han encontrado registros');
       }
       else{
        console.log(response.data);

       }
        });
    
   
}
function asignarvalores(){
  switch ($('#selectconsulta').val()) {
  case 'dia':
    dia= $('#dia').val();
    break;
  case 'mes':
    mes= $('#mes').val();
    break;
  case 'year':
    year= $('#year').val();

    break;
  default:
 

}
}


function sweetalert(mensaje){
  Swal.fire({
      position: 'center',
      icon: 'warning',
      title: mensaje,
      showConfirmButton: false,
      timer: 1500
      });
}


function ChangeDateSelect(data){
    if(data.value=="dia"){

    while (inputsdate.firstChild) {
      inputsdate.removeChild(inputsdate.firstChild);
    }

    document.querySelector("#inputsdate").appendChild(input1);
    }
    if(data.value=="mes"){
      while (inputsdate.firstChild) {
        inputsdate.removeChild(inputsdate.firstChild);
    }
    document.querySelector("#inputsdate").appendChild(input2);

    }
    if(data.value=="year"){
      while (inputsdate.firstChild) {
        inputsdate.removeChild(inputsdate.firstChild);
    }
    document.querySelector("#inputsdate").appendChild(input4);

    }
    }
</script>