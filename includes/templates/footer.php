<!-- -------------- Footer ------------- -->

  <footer class="site-footer">
      <div class="contenedor clearfix">
          <div class="footer-informacion">
            <h3>Sobre <span>gdlwebcam</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quasi mollitia, reiciendis tempore sunt facilis vel velit voluptatem beatae laborum quisquam ratione expedita eaque esse, ullam voluptatibus autem reprehenderit. Libero.</p>
          </div>
          <div class="ultimos-tweets">
            <h3>Ultimos <span>Tweets</span></h3>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat magni cupiditate eum illo ipsum voluptas consectetur necessitatibus quod impedit libero!</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat magni cupiditate eum illo ipsum voluptas consectetur necessitatibus quod impedit libero!</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat magni cupiditate eum illo ipsum voluptas consectetur necessitatibus quod impedit libero!</li>
            </ul>
          </div>
          <div class="menu">
            <h3>Redes <span>sociales</span></h3>
            <nav class="redes-sociales">
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-pinterest"></i></a>
               <a href="#"><i class="fab fa-youtube"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
          </div>
      </div>
      <p class="copyright">
        Todos los derechos reservados GDLWEBCAMP 2020.
      </p>
  </footer>


<!-- -------------- END ------------- -->
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>

  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/lightbox.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina == 'index'){
       echo '<script src="js/jquery.colorbox-min.js"></script>';
    } else if($pagina == 'conferencia') {
       echo '<script src="js/light.js"></script>';
    }
   ?>

</body>

</html>
