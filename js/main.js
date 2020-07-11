(function(){
  "use strict";

var regalo = document.getElementById('regalo');



  document.addEventListener('DOMContentLoaded', function(){
    console.log("listo");

      //Campos Datos Usuario
      var nombre = document.getElementById('nombre');
      var apellido = document.getElementById('apellido');
      var email = document.getElementById('email');

      //Campos Pases
      var pase_dia = document.getElementById('pase_dia');
      var pase_dosdias = document.getElementById('pase_dosdias');
      var pase_completo = document.getElementById('pase_completo');

      //Botones y divs
      var calcular = document.getElementById('calcular');
      var errorDiv = document.getElementById('errorDiv');
      var botonRegistro = document.getElementById('btnRegistro');
      var resultado = document.getElementById('lista-productos');

      calcular.addEventListener('click',calcularMontos);


      function calcularMontos(event){
        event.preventDefault();
        console.log("has hecho un click");
      }

  }); //DOM CONTENT LOADED
  })();
