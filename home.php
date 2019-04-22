<?php

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/estilos.css">
     <title>FREESTYLE | HOME</title>
   </head>
   <body class="bodyHome">
    <div class="container">
      <div class="title">
       <h1 class="titleF">F R E E S T Y L E</h1>
      </div>
      <!-- barra de navegacion -->
      <header class="main-header">
         <nav class="nav-header">
           <ul class="lista">
             <li class="item"><a class="items" href="registro.php">REGISTRO</a></li>
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

  <!-- The slideshow --> <!--   Aqui se agregan las imagenes para el carrusel-->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h3 class="carru">Compartí contenido!</h3>
            <img src="images/rsocial.jpg" alt="series" width="1400px" height="500px">
          </div>
          <div class="carousel-item">
            <h3 class="carru">Comparte tus gameplays!</h3>
            <img src="images/control-videogame.jpg" alt="controls" width="1400px" height="500px">
          </div>
          <div class="carousel-item">
            <h3 class="carru">Eventos, noticias</h3>
            <img src="images/events.jpg" alt="eventos" width="1400px" height="500px">
          </div>
        </div>

  <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
   </div>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
