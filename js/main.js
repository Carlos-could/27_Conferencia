(function() {
  "use strict";

  var regalo = document.getElementById('regalo');

  document.addEventListener('DOMContentLoaded', ready);
  function ready() {

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
      var errorDiv = document.getElementById('error');
      var botonRegistro = document.getElementById('btnRegistro');
      var lista_productos = document.getElementById('lista-productos');
      var suma = document.getElementById('suma-total');

      //EXTRAS
      var camisas = document.getElementById('camisa_evento');
      var etiquetas = document.getElementById('etiquetas');

      botonRegistro.disabled= true;

      if (document.getElementById('calcular')) {


      calcular.addEventListener('click',calcularMontos);

      pase_dia.addEventListener('blur',mostrarDias);
      pase_dosdias.addEventListener('blur',mostrarDias);
      pase_completo.addEventListener('blur',mostrarDias);
      nombre.addEventListener('blur', validarCampos);
      apellido.addEventListener('blur', validarCampos);
      email.addEventListener('blur', validarEmail);

      function validarCampos() {
         if(this.value == ""){
            errorDiv.style.display = "block";
            errorDiv.innerHTML = "este campo es obligatorio"
            errorDiv.style.border = '1px solid red';
         }else {
            errorDiv.style.display = "none";
            errorDiv.style.border = '1px solid #cccccc';
         }
      }

      function validarEmail() {
         if(this.value.indexOf('@') > -1){
            errorDiv.style.display = "none";
            errorDiv.style.border = '1px solid #cccccc';
         }else{
            errorDiv.style.display = "block";
            errorDiv.innerHTML = "debe tener al menos un @"
            errorDiv.style.border = '1px solid red';
         }
      }

      function calcularMontos(event){
        event.preventDefault();
        if(regalo.value === ""){
          alert('debes elegir un regalo')
          regalo.focus();
        } else{
          var boletosDia = parseInt(pase_dia.value , 10) || 0,
              boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
              boletoCompleto = parseInt(pase_completo.value, 10) || 0,
              cantCamisas = parseInt(camisas.value, 10) || 0,
              cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

              var totalPagar = (boletosDia*30) + (boletos2Dias*45) + (boletoCompleto*50) + ((cantCamisas*10) * .93) + (cantEtiquetas * 2)

              var listadoProductos = [];

              if (boletosDia>=1) {
                listadoProductos.push(boletosDia + ' Pases por día');
              }
              if (boletos2Dias>=1) {
                listadoProductos.push(boletos2Dias + ' Pases de  2 días');
              }
              if (boletoCompleto>=1) {
                listadoProductos.push(boletoCompleto + ' Pases completos');
              }
              if (cantCamisas>=1) {
                listadoProductos.push(cantCamisas + ' camisas');
              }
              if (cantEtiquetas>=1) {
                listadoProductos.push(cantEtiquetas + ' etiquetas');
              }

              lista_productos.style.display = "block";
              lista_productos.innerHTML = '';

              for( var i=0; i<listadoProductos.length; i++){
                lista_productos.innerHTML += listadoProductos[i] + "<br/>";
              }

              suma.innerHTML = "$ " + totalPagar.toFixed(2);

              botonRegistro.disabled = false;
              document.getElementById('total_pedido').value = totalPagar;
        }
      }

      function mostrarDias() {

        var boletosDia = parseInt(pase_dia.value, 10) || 0,
            boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
            boletoCompleto = parseInt(pase_completo.value, 10) || 0;

            var diasElegidos = [];

            if(boletosDia > 0){
              diasElegidos.push('viernes');
            }
            if(boletos2Dias > 0){
              diasElegidos.push('viernes', 'sabado');
            }
            if(boletoCompleto > 0){
              diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            //filtrado de dias repetidos 'Elegante'
            var NewdiasElegidos = diasElegidos.filter((dia, index) => diasElegidos.indexOf(dia) === index)


            //Mostrando eventos 'Viernes, Sabado o Domingo'
            for(var i= 0; i < NewdiasElegidos.length; i++){
              document.getElementById(NewdiasElegidos[i]).style.display = "block";
            }

            var xdias = NewdiasElegidos.length;
            console.log(NewdiasElegidos);


            var contenido_dia =document.querySelectorAll('.contenido-dia');


            for( var x = xdias; x < 3; x++){
                 contenido_dia[x].style.display = "none";
               }

            switch (diasElegidos.length) {
              case 0:
                    for(var i= 0; i < 3; i++){
                        contenido_dia[i].style.display = "none";
                        }
              break;
              case 1:
                    for(var i= 1; i < 3; i++){
                        contenido_dia[i].style.display = "none";
                        }
              break;
              case 2:
                    for(var i= 2; i < 3; i++){
                        contenido_dia[i].style.display = "none";
                        }
              break;
            }
      }

  } //cierre del If (para evitar error en consola)
    }; //DOM CONTENT LOADED
})();

$(function() {

   // Lettering titulo MünchenWebcamp
   $('.nombre-sitio').lettering();

   // Fijar barra de menu arriba (Scroll)
   var windowsHeight = $(window).height();
   var barraAltura = $('.barra').innerHeight();

   $(window).scroll(function() {
       var scroll = $(window).scrollTop();
       if (scroll > windowsHeight) {
           $('.barra').addClass('fixed');
           $('body').css({'margin-top': barraAltura+'px'});
       } else {
           $('.barra').removeClass('fixed');
           $('body').css({'margin-top': '0px'});
       }
   });

   // Menu Responsive
   $('.menu-movil').on('click', function() {
       $('.navegacion-principal').slideToggle();
   });

   //Agregar clase a menu (menu principal / pagina principal)
   $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
   $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
   $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');


   //Programa de Conferencias (pagina principal)
  $('.programa-evento .info-curso:first').show()
  $('.menu-programa a:first').addClass('activo')

  $('.menu-programa a').on('click', function() {
     $('.menu-programa a').removeClass('activo')
    $(this).addClass('activo')
    $('.ocultar').hide();
    var enlace = $(this).attr('href')
    $(enlace).fadeIn(1000);
    return false;
  });

  //Animacion numero - arriba de precio (pagina principal)
  $('.resumen-evento li:nth-child(1) p').animateNumber({number:6}, 1200);
  $('.resumen-evento li:nth-child(2) p').animateNumber({number:15}, 1500);
  $('.resumen-evento li:nth-child(3) p').animateNumber({number:3}, 1400);
  $('.resumen-evento li:nth-child(4) p').animateNumber({number:9}, 1500);

  //Countdown - dias que faltan (pagina principal)
  $('.cuenta-regresiva').countdown('2021/02/06 18:00:00', function(event){
     $('#dias').html(event.strftime('%D') );
     $('#horas').html(event.strftime('%H') );
     $('#minutos').html(event.strftime('%M') );
     $('#segundos').html(event.strftime('%S') );
 });

  //Colorbox (pagina invitados)
  $('.invitado-info').colorbox({inline:true, width: "50%",});

});
