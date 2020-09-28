<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
  <h2>Calendario de Eventos</h2>

  <?php
    try {
      //creamos la conexion
      require_once('includes/funciones/bd_conexion.php');
      //escribimos la consulta
      $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
      $sql .= ' FROM eventos';
      $sql .= ' INNER JOIN categoria_evento';
      $sql .= ' ON eventos.id_cat_evento = categoria_evento.id_categoria';
      $sql .= ' INNER JOIN invitados';
      $sql .= ' ON eventos.id_inv = invitados.invitado_id';
      $sql .= ' ORDER BY evento_id';
      //consultamos la base de datos
      $resultado = $conn->query($sql);
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }
   ?>


       <?php
         $calendario = array();
         //imprimimos los resultados
         //fetch_assoc, es el formato como se muestra
         while ( $eventos = $resultado->fetch_assoc() ) {

              // obtener fecha del evento
              $fecha = $eventos['fecha_evento'];

              $evento = array(
                  'titulo' => $eventos['nombre_evento'],
                  'fecha' => $eventos['fecha_evento'],
                  'hora' => $eventos['hora_evento'],
                  'categoria' => $eventos['cat_evento'],
                  'icono' => $eventos['icono'],
                  'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
              );
              $calendario[$fecha] [] = $evento;
         } // while de fetch_assoc() ?>

      <div class="calendario">
       <?php
         //imprimir todos los Eventos
       foreach ($calendario as $dia => $lista_eventos) { ?>
         <h3>
           <i class="fas fa-calendar-alt"></i>
           <?php
           //Unix
           setlocale(LC_TIME, 'es_ES.UTF-8');
           //Windows
           setlocale(LC_TIME, 'spanish');
           echo strftime("%A, %d de %B del %Y", strtotime($dia) );
           ?>
         </h3>

         <?php foreach ($lista_eventos as $evento) { ?>
            <div class="dia">
                <p class="titulo"> <?php echo $evento['titulo']; ?></p>
                <p class="hora">
                    <i class="far fa-clock-o" aria-hidden="true"></i>
                    <?php echo $evento['fecha'] . " " . $evento['hora']; ?> </p>
                <p> <i class="<?php echo $evento['icono']; ?>" aria-hidden="true"> </i>
                    <?php echo $evento['categoria']; ?>
                </p>
                <p> <i class="fas fa-user-circle"></i> <?php echo $evento['invitado']; ?> </p>
            </div>


         <?php } // fin foreach eventos?>

       <?php } // fin foreach de dias?>

   </div> <!-- calendario -->

  <!-- //siempre cerrar la conexion.! -->
  <?php $conn->close(); ?>

</section>


<?php include_once 'includes/templates/footer.php'; ?>
