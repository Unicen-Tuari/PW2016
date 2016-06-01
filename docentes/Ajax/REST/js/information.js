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

