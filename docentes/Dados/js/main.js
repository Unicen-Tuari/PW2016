/* Mi codigo de Javascript que tira dados.
*/
"use strict";

//variable donde guardar los resultados temporales
var cuenta = [];

var dados = document.getElementsByClassName("dado");
for (var i = 0; i < dados.length*5+1; i++) {
  cuenta[i] = 0;
}

function ValorDado()
{
  return Math.floor((Math.random() * 6) + 1);
}

function TirarDados() {
    var dados = document.getElementsByClassName("dado");
    //genera numeros al azar y cambia las fuentes de las imagenes
    //calcular suma
    var sum = 0;
    for (var d = 0; d < dados.length; d++) {
      var valor = ValorDado();
      sum += valor;
      dados[d].src = "images/dado"+valor+".png";
    }
    //contar la suma, tener en cuenta que el arreglo empieza en 0
    cuenta[sum-dados.length]++;
    //concatenar las cantidad de veces que salio cada suma
    var cadena = "";
    for(var c = 0; c < dados.length*5+1; c++)
      cadena += ""+ cuenta[c] + " ";
    //mostrar en el html
    document.getElementById("resultado").innerHTML = cadena;
}

//Tira dados muchas veces
function TirarMuchosDados(cantTiradas) {
  for(var t = 0; t< cantTiradas;t++)
    TirarDados();
}

var interval;
function Empezar()
{
  document.getElementById("empezar").disabled = true;
  interval = setInterval("TirarDados()",500);
}

function Frenar(){
  document.getElementById("empezar").disabled = false;
  clearInterval(interval);
}
