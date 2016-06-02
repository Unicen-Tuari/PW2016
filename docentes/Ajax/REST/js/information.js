function isValidJson(json){
  if (/^[\],:{}\s]*$/.test(json.replace(/\\["\\\/bfnrtu]/g, '@').
  replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').
  replace(/(?:^|:|,)(?:\s*\[)+/g, ''))) {
    return true;
  }
  return false;
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
        alert('Se guardo con exito!');
        console.log(resultData);
      },
      error:function(jqxml, status, errorThrown){
        alert('Error!');
        console.log(errorThrown);
      }
    });
  }
  else{
    alert('JSON es invalido');
  }
}

function mostrarInfo(info) {
  var information="<table class='table'><thead><tr><th>Id</th><th>Grupo</th><th>Cosa</th></tr></thead><tbody>";
  for (var i = 0; i < info.length; i++) {
    information+=crearFila(info[i]);
  }
  information+="</tbody></table>";
  return information;
}

function getInformationByGroup(){
  event.preventDefault();
  var groupid=$('#groupid').val();
  $.ajax({
    url:"http://web-unicen.herokuapp.com/api/group/" + groupid,
    method:"GET",
    contentType: "application/json; charset=utf-8",
    success: function(resultData){
      if(resultData.information.length == 0){
        $('#infoGroup').html("No hay info para este grupo");
        return;
      }
      $('#infoGroup').html(mostrarInfo(resultData.information));
      console.log(resultData.information[0].thing);
    },
    error:function(jqxml, status, errorThrown){
      alert('Error!');
      console.log(errorThrown);
    }
  });
}

function crearTablaInformacion(informacion){
  return "<table><thead><tr><th>Id</th><th>Grupo</th><th>Cosa</th></tr></thead><tbody>"+crearFila(informacion)+"</tbody></table>";


}
function crearFila(informacion) {
  return "<tr><td>"+informacion._id+"</td><td>"+informacion.group+"</td><td>"+informacion.thing+"</td></tr>";
}

function getInformationByItem() {
  event.preventDefault();
  var id=$('#itemid').val();
  $.ajax({
    url:"http://web-unicen.herokuapp.com/api/get/" + id,
    method:"GET",
    contentType: "application/json; charset=utf-8",
    success: function(resultData){
      $('#infoItem').html(crearTablaInformacion(resultData.information));
      console.log(resultData);
      console.log(JSON.parse(resultData.information.thing));
    },
    error:function(jqxml, status, errorThrown){
      alert('Error!');
      console.log(errorThrown);
    }
  });
}
