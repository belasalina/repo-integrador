<?php

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/estilos.css">
     <title>FREESTYLE | HOME</title>
   </head>
   <body class="bodyHome">
    <div class="container">

      <!-- barra de navegacion -->
      <header class="main-header">
         <nav class="nav-header">
           <div class="title">
            <h1 class="titleF">F R E E S T Y L E</h1>    <!--TITULO-->
           </div>
           <ul class="lista">
             <li class="item"><a class="items" href="registro.php">REGISTRATE!</a></li>
             <li class="item"><a class="items" href="login.php">LOGIN</a></li>
           </ul>
         </nav>
       </header>

       <!---carrusel--------------->

  <div class="carousel">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->

        <ul class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>

  <!-- The slideshow --> <!--     Aqui se agregan las imagenes para el carrusel-->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <section class="its">
              <div class="texto">
                <h3 class="carru">Compartí contenido!</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <div class="imgns">
                <img src="images/rsocial.jpg" alt="series" width="700px" height="500px">
              </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="its">
              <div class="texto">
                <h3 class="carru">Compartí tus gameplays!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <div class="imgns">
                <img src="images/control-videogame.jpg" alt="controls" width="700px" height="500px">
              </div>
            </section>
          </div>
          <div class="carousel-item">
             <section class="its">
              <div class="texto">
                <h3 class="carru">Compartí contenido!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <div class="imgns">
                <img src="images/events.jpg" alt="eventos" width="700px" height="500px">
              </div>
            </section>
          </div>
        </div>

  <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" id="prev">
          <span class="carousel-control-prev-icon" id="arrow"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next" id="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
   </div>

   <div class="texto-resp">
     <h3 class="carru">Compartí contenido!</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   </div>

   <!--- -   footer ----------------->

   <div class="foot">
     <footer>© 2019 Digital House Argentina, Todos los derechos reservados. <a href="tyc" class="items">Términos y Condiciones</a> | <a href="pdp" class="items">Políticas de Privacidad</a></footer>
   </div>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
