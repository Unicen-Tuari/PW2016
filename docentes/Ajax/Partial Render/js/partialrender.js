$("#btnCargar").on("click", handleClick);

function handleClick() {
    $("#ajaxContent").html("Loading");
    $.ajax("http://web-unicen.herokuapp.com/api/html?",
          {
            error: function () {
              alert("no cargo");
            },
            dataType: "HTML",
            success: function (receivedData) {
              $("#ajaxContent").html(receivedData);
            },
            method: "GET"
          }
        );
  }
