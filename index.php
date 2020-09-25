<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
      <h2>La mejor conferencia de diseño web en español</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam vero necessitatibus et omnis reprehenderit accusamus laboriosam harum, suscipit sapiente pariatur. Vitae delectus quisquam consequuntur quos atque inventore pariatur earum ab?</p>
    </section> <!--Seccion-->

    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster"img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogv">
        </video>
      </div> <!--contenedor-video-->

      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa de Evento</h2>

            <nav class="menu-programa">
              <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
              <a href="#conferencias"><i class="far fa-comment"></i>Conferencias</a>
              <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
            </nav>

            <div id="talleres" class="info-curso ocultar clearfix">
               <div class="detalle-evento">
                  <h3>HTML5, CSS3 y JavaScript</h3>
                  <p><i class="far fa-clock"></i>16:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
                  <p><i class="fas fa-user-circle"></i>Juan Pablo de la Torre Valdez</p>
               </div>
               <div class="detalle-evento">
                  <h3>Responsive Web Design</h3>
                  <p><i class="far fa-clock"></i>20:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
                  <p><i class="fas fa-user-circle"></i>Juan Pablo de la Torre Valdez</p>
               </div>
               <a href="#" class="button float-right">Ver todos</a>
            </div> <!--Talleres-->

            <div id="conferencias" class="info-curso ocultar clearfix">
               <div class="detalle-evento">
                  <h3>Como ser freelance</h3>
                  <p><i class="far fa-clock"></i>10:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
                  <p><i class="fas fa-user"></i>Gregorio Sanchez</p>
               </div>
               <div class="detalle-evento">
                  <h3>Tecnologias del futuru</h3>
                  <p><i class="far fa-clock"></i>17:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
                  <p><i class="fas fa-user"></i>Susan Sanchez</p>
               </div>
               <a href="#" class="button float-right">Ver todos</a>
            </div> <!--conferencias-->

            <div id="seminarios" class="info-curso ocultar clearfix">
               <div class="detalle-evento">
                  <h3>Diseño UX/UI para móviles</h3>
                  <p><i class="far fa-clock"></i>17:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>11 de Dic</p>
                  <p><i class="fas fa-user"></i>harold Garcia</p>
               </div>
               <div class="detalle-evento">
                  <h3>Aprende a programar en una mañana</h3>
                  <p><i class="far fa-clock"></i>10:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>11 de Dic</p>
                  <p><i class="fas fa-user"></i>Susana Rivera</p>
               </div>
               <a href="#" class="button float-right">Ver todos</a>
            </div> <!--seminarios-->

          </div>
        </div>
      </div><!--contenido-programa-->

    </section> <!--programa-->

    <!-- -------------- Nuestros Invitados ------------- -->

    <?php include_once 'includes/templates/invitados.php'; ?>


  <!-- -------------- Contador ------------- -->

    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li> <p class="numero"></p> Invitados</li>
          <li> <p class="numero"></p> Talleres</li>
          <li> <p class="numero"></p> Días </li>
          <li> <p class="numero"></p> Conferencias</li>
        </ul>
      </div>
    </div>

  <!-- -------------- Lista de Precios ------------- -->
    <div class="precios seccion">
       <h2>Precios</h2>
       <div class="contenedor ">
          <ul class="lista-precios clearfix">
             <li>
                 <div class="tabla-precio">
                    <h3>Pase por día</h3>
                    <p class="numero">$30</p>
                    <ul>
                       <li>Bocadillo Gratis</li>
                       <li>Todas las conferencias</li>
                       <li>Todos los talleres</li>
                    </ul>
                    <a href="#" class="button hollow">Comprar</a>
                </div>
             </li>

             <li>
                <div class="tabla-precio">
                    <h3>Todos los días</h3>
                    <p class="numero">$50</p>
                    <ul>
                       <li>Bocadillo Gratis</li>
                       <li>Todas las conferencias</li>
                       <li>Todos los talleres</li>
                    </ul>
                    <a href="#" class="button">Comprar</a>
                </div>
             </li>

             <li>
                 <div class="tabla-precio">
                    <h3>Pase por 2 días</h3>
                    <p class="numero">$45</p>
                    <ul>
                       <li>Bocadillo Gratis</li>
                       <li>Todas las conferencias</li>
                       <li>Todos los talleres</li>
                    </ul>
                    <a href="#" class="button hollow">Comprar</a>
                </div>
             </li>
          </ul>

       </div> <!--Contenedor-->
    </div> <!--Precios-->

  <!-- -------------- Mapa Google ------------- -->
    <div id="mapa" class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10656.106501035236!2d11.5241498!3d48.109722100000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sde!4v1599776565410!5m2!1ses!2sde" width="100%" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="1"></iframe>
    </div>

  <!--  Testimoniales --------------->
    <section class="seccion">
        <div class="testimoniales contenedor clearfix">
            <h2>Testimoniales</h2>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eos consequuntur quae alias veniam amet ex in ipsum illum cupiditate.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div> <!--Testimonial-->

            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eos consequuntur quae alias veniam amet ex in ipsum illum cupiditate.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div> <!--Testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eos consequuntur quae alias veniam amet ex in ipsum illum cupiditate.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div> <!--Testimonial-->
        </div>
    </section>

  <!-- -------------- Registrate ------------- -->

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Registrate al newsletter:</p>
            <h3>gldwebcamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div> <!--contenido-->
    </div> <!--newsletter-->

  <!-- -------------- Cuenta regresiva ------------- -->
    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li> <p id="dias" class="numero"></p> días </li>
                <li> <p id="horas" class="numero"></p> horas </li>
                <li> <p id="minutos" class="numero"></p> minutos </li>
                <li> <p id="segundos" class="numero"></p> segundos </li>
            </ul>
        </div>
    </section>
<?php include_once 'includes/templates/footer.php'; ?>
