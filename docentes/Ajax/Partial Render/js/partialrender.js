$("#btnCargar").on("click", handleClick);
$("#ajaxContent").on("click",".js-comportamiento", borrar);

function handleClick() {
    $("#ajaxContent").html("<h1>Loading 1</h1>");
    $.ajax("http://web-unicen.herokuapp.com/api/html?",
          {
            error: function () {
              alert("no cargo");
            },
            dataType: "HTML",
            success: function (receivedData) {
              $("#ajaxContent").html(receivedData);
              //console.log("Lenght: "+ $(".js-comportamiento").length);
              $(".js-comportamiento").html("Borrar");
            },
            method: "GET"
          }
        );
  }


function borrar () {
  $("#ajaxContent").html("");
}
