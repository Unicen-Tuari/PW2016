"use strict";

var $handlerAsistencias = function asistenciasFormHandler(){
  $('#form-asistencia').on('submit',function(e){
      e.preventDefault();
      var postData = $(this).serializeArray();
      $.ajax({
          url : 'index.php?action=carga_asistencias',
          data : postData,
          type : 'POST',
          success : function(data){
            console.log(data);
          }
      });
  });
}

$(document).ready(function(){
    $handlerAsistencias();
});

//method="post" action="index.php?action=carga_asistencias"
