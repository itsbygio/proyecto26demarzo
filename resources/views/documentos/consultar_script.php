<script>
localStorage.setItem('tabledata', '0');
var inputsdate= document.getElementById ("inputsdate");
var td="";
var input1 = document.createElement("input");
var input2 = document.createElement("input");
var input4 = document.createElement("input");
var tabledata="";
var datatabla="";
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
        datatabla.clear().draw();
        $('#tablaconsulta').hide();
       }
       else{
            tabledata=localStorage.getItem('tabledata');
            if(tabledata=="1"){
              datatabla.clear().draw();
              datatabla.rows.add(response.data.result);
              datatabla.columns.adjust().draw();
              $('#tablaconsulta').show();

            }
            else{
            localStorage.setItem('tabledata', '1');
            datatable(response.data.result);
            $('#tablaconsulta').show();

            }
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
 function datatable(data){
  datatabla= $('#table_id').DataTable(
            
            {
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
                "data":data,
                    "columns": [
                    { "data": "id" ,"className":"d-none"},
                    { "data": "titulo" },
                    { "data": "tipo" },
                    { "data": "subtipo" },
                    { "defaultContent": " <button  class='btn btn-primary mr-3 fas fa-eye' ></button>"},

                    ]

            }
            );
 }
</script>