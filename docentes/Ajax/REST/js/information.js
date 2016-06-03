$( document ).ready(function() {
  $("#infoGroup").hide();
  $("#infoItem").hide();
  $("#btnInfoGroup").on('click',getInformationByGroup);
  $("#btnInfoItem").on('click',getInformationByItem);
  $("#btnGuardarInfo").on('click',guardarInformacion);
});


function isValidJson(json){
  if (/^[\],:{}\s]*$/.test(json.replace(/\\["\\\/bfnrtu]/g, '@').
  replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').
  replace(/(?:^|:|,)(?:\s*\[)+/g, ''))) {
    return true;
  }
  return false;
}

function crearFila(informacion) {
  var fila= $(document.createElement('tr'));
  fila.append("<td>"+informacion._id+"</td>")
  fila.append("<td>"+informacion.group+"</td>")
  fila.append("<td>"+informacion.thing+"</td>")
  return fila;
}

function mostrarInfo(donde, info) {
  var tbody = $('#' + donde + ' tbody')
  if(info.length == 0 || info[0] === undefined){
    tbody.append('<td colspan="3">No hay información</td>');
    return;
  }
  for (var i = 0; i < info.length; i++) {
    tbody.append(crearFila(info[i]));
  }

}

function guardarInformacion() {
  event.preventDefault();
  var grupo = $('#grupo').val();
  var informacion = $('#informacion').val();
  if(isValidJson(informacion)) {
    var info = {
     "group": grupo,
     "thing": informacion
    };
    $.ajax({
      url:"http://web-unicen.herokuapp.com/api/create",
      method:"POST",
      dataType: 'JSON',
      contentType: "application/json; charset=utf-8",
      data: JSON.stringify(info),
      success: function(resultData){
        $('#guardarAlert').html('Se guardo con exito ID:'+resultData.information._id);
        $('#guardarAlert').addClass('alert-success');
        console.log(resultData);
      },
      error:function(jqxml, status, errorThrown){
        $('#guardarAlert').html('Error intente mas tarde');
        $('#guardarAlert').addClass('alert-danger');
        console.log(errorThrown);
      }
    });
  }
  else{
    alert('JSON es invalido');
  }
}

function getInformationByGroup(){
  event.preventDefault();
  var groupid=$('#groupid').val();
  $.ajax({
    url:"http://web-unicen.herokuapp.com/api/group/" + groupid,
    method:"GET",
    contentType: "application/json; charset=utf-8",
    success: function(resultData){
      mostrarInfo('infoGroup',resultData.information);
      $("#infoGroup").show();
    },
    error:function(jqxml, status, errorThrown){
      alert('Error!');
      console.log(errorThrown);
    }
  });
}

function getInformationByItem() {
  event.preventDefault();
  var id=$('#itemid').val();
  $.ajax({
    url:"http://web-unicen.herokuapp.com/api/get/" + id,
    method:"GET",
    contentType: "application/json; charset=utf-8",
    success: function(resultData){
      mostrarInfo('infoItem',[resultData.information]);
      $("#infoItem").show();
    },
    error:function(jqxml, status, errorThrown){
      alert('Error!');
      console.log(errorThrown);
    }
  });
}
