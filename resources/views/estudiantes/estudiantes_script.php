<script>
    $('#table_modal').DataTable(

{
    pageLength : 5,
lengthMenu: [[5], [5]],
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
    

}
);
   function handleClick(myRadio){
         if(myRadio.value=="1"){
            $('#aeg').show(); 

            $('#sec').hide(); 
         }
         else{
            $('#sec').show(); 
            $('#aeg').hide(); 
         }
   }
   function RadioModalClick(titulo,id){
     //  var separa= myRadio.value.split(".",2);
    //    var string= separa[0];
       $("#ca").val(titulo);
       $("#idcurso").val(id);

   }
   function Radio2ModalClick(myRadio){
         if(myRadio.value=="1"){
            $('#ca').val("");
            let input = $('#ca')[0];
            input.placeholder = "Por favor, Eliga el curso";
            document.getElementById('nd').checked = false;
            $('#exampleModalCenter').modal('hide');   

         }

   }
 
</script>