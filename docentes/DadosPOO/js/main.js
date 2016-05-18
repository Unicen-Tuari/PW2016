/* Mi codigo de Javascript que tira dados.
*/
"use strict";

$(document).ready(function() {

  $('#tirarMuchosDados').click(function(){
    TirarMuchosDados(1000);
  });

  $('#tirarDados').click(function(){
    TirarDados();
  });

  $('#empezar').click(Empezar);
  
  $('#frenar').click(Frenar);
});


function Dado(numCaras, numDado)
{
  //var dado = {}; al llamar con new this={}
  var nCaras = numCaras;
  var valor = 1;
  var nDado = numDado;

  return {
    tirar : function ()
    {
      valor = Math.floor((Math.random() * nCaras) + 1);
      this.mostrar();
      return valor;
    },
    mostrar : function ()
    {
      $($(".dado")[nDado]).attr("src", "images/dado"+valor+".png");
    },
    getValor : function ()
    {
      return valor;
    }
  }
}

Dado.prototype.getCantidad = function () {
  return $(".dado").length;
}

function Resultado() {
  //variable donde guardar los resultados temporales
  this.cuenta = [];
  for (var i = 0; i < Dado.prototype.getCantidad()*5+1; i++) {
    this.cuenta[i] = 0;
  }
  this.mostrar = function () {
    //concatenar las cantidad de veces que salio cada suma
    var cadena = "";
    for(var c = 0; c < $(".dado").length*5+1; c++)
      cadena += ""+ cuenta[c] + " ";
    //mostrar en el html
    $("#resultado").html(cadena);
  }
}
function Jugador() {
  this.objetosDados = [];
  for (var i = 0; i < $(".dado").length; i++) {
    this.objetosDados[i]= new Dado(6,i);
  }
  this.sum = 0;
}

Jugador.prototype.tirarDados = function () {
  this.sum = 0;
  for (var d = 0; d < this.objetosDados.length; d++) {
    this.objetosDados[d].tirar();
    this.sum += this.objetosDados[d].getValor();
  }
};

Jugador.prototype.getPuntaje = function () {
  return this.sum;
};

var jugador = new Jugador();
var resultado = new Resultado();

function TirarDados() {
    //genera numeros al azar y cambia las fuentes de las imagenes
    //calcular suma
    jugador.tirarDados();
    //contar la suma, tener en cuenta que el arreglo empieza en 0
    cuenta[jugador.getPuntaje()-$(".dado").length]++;
    resultado.mostrar();
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
