$(document).ready(function(){
   // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
   $('.modal').modal();
    $('.tap-target').tapTarget('close');
     $(".button-collapse").sideNav();



     /*
      * AJAX PARA PROCESSAR O PHP
      */
      $("#enviar").click(function(){
           $.ajax({
               dataType:'html',
               url:"php/mvc/controller/processa.php",
               type:"POST",
               data:({mensagem:$("input[name='texto']").val()}),

               beforeSend: function(data){

                }, success:function(data){
                  $("#texto").val("");
                  $("#resp").append(data);
                    console.log("Dados Enviados");
                }, complete: function(data){

                }


          });
      });

 });
