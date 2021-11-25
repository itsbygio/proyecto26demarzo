<script>
var inputsdate= document.getElementById ("inputsdate");
var input1 = document.createElement("input");
var input2 = document.createElement("input");
var input4 = document.createElement("input");
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
input4.setAttribute("id","año");

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
if(data.value=="año"){
  while (inputsdate.firstChild) {
    inputsdate.removeChild(inputsdate.firstChild);
}
document.querySelector("#inputsdate").appendChild(input4);

}
}



</script>