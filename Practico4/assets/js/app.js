"use strict";

var $handlerAsistencias = function asistenciasFormHandler(){
  $('#form-asistencia').on('submit',function(e){
      e.preventDefault();
      $.ajax({
          url : 'index.php?action=carga_asistencias',
          data : new FormData($(this)),
          type : 'POST',
          success : function(data){
            alert(data);
          },
          processData: false,  // tell jQuery not to process the data
          contentType: false   // tell jQuery not to set contentType
      });
  });
}

$(document).ready(function(){
    $handlerAsistencias();
});

//method="post" action="index.php?action=carga_asistencias"
