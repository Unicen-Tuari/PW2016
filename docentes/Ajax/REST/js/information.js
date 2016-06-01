function guardarInformacion() {
  event.preventDefault();
  var grupo = $('#grupo').val();
  var informacion = $('#informacion').val();
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

function mostrarInfo(info) {
  var information="";
  for (var i = 0; i < info.length; i++) {
    information+=info[i].group+" "+info[i].thing;
  }
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
