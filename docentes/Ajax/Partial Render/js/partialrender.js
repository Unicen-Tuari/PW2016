$("#btnCargar").on("click", handleClick);

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
              $(".js-comportamiento").on("click", handle2);
              $(".js-comportamiento").html("Borrar");

            },
            method: "GET"
          }
        );
  }

function handle2 () {
  $("#ajaxContent").html("");
}
