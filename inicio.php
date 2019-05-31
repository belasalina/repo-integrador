<?php
require 'validaciones.php';

$usuario = traerUsuarioLogueado();
$usuarioLogueado = usuarioLogueado();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos-inicio.css">
  <title>FREESTYLE | INICIO</title>
</head>
  <body class="bodyHome">
    <div class="container">

          <!--- CABECERA --------------------------------->

      <header class="row bg-secondary cabecera">
        <div class="free col-md-4">
          <img src="images/logo5.png" alt="logo" style="width: 250px; margin-left: 30px;">
        </div>
        <div class="bienvenido col-md-4 text-light">
          <?php if (usuarioLogueado()): ?>
              <?php if ($usuario["genero"] == "mujer"): ?>
               <h5><?= "Bienvenida ". $usuario["nombre"]. "!"?></h5>
             <?php elseif ($usuario["genero"] == "hombre"):?>
               <h5><?= "Bienvenido ". $usuario["nombre"]. "!"?></h5>
             <?php else: ?>
               <h5><?= "Bienvenid@ ". $usuario["nombre"]. "!"?></h5>
             <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-1">
        </div>
        <div class="salir col-md-3">
          <div class="">
            <?php if (usuarioLogueado()): ?>
              <a class="boton btn btn-danger btn-lg" href="logout.php">Salir</a>
            <?php else: ?>
              <a class="boton btn btn-success btn-lg" href="home.php">Ingresar</a>
            <?php endif; ?>
          </div>
        </div>
      </header>

      <div class="cuerpo-inicio row">

                <!-- PARTE IZQUIERDA DEL BODY ------------------->

        <div class="izquierda col-md-3" id="perfil">
          <div class="foto">
            <div class="img-perfil">
              <?php if (usuarioLogueado()): ?>
                  <img class="avatar" src="images/<?= $usuario["avatar"] ?>" alt="" style="width: 100%;">
                <?php else: ?>
                  <img class="avatar" src="images/perfil-anonimo.jpg" alt="" style="width: 100%;">
                <?php endif; ?>
            </div>
          </div>
          <section class="informacion">
            <ul>
              <li><a href="perfil.php">Mi perfil</a></li>
              <li><a href="#">Mis Amigos</a></li>
              <li><a href="#">Mis Posteos</a></li>
              <li><a href="#">Mis Intereses</a></li>
            </ul>
          </section>
        </div>

                    <!-- PARTE CENTRAL DEL BODY ---------------------------->

        <div class="centro col-md-6">
          <div class="search">
            <input type="text" name="search" value="" placeholder="Search..." style="width: 100%;">
          </div>
          <div class="post">
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
          </div>
          <div class="post">
            <img src="images/controls.jpg" alt="" style="width: 100%">
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
          </div>
          <div class="post">
            <img src="images/controls.jpg" alt="" style="width: 100%">
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
          </div>
       </div>

                      <!-- PARTE DERECHA DEL BODY ---------------------------------------->


       <div class="derecha col-md-3">
         <div class="publicidad">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
         <div class="publicidad">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
       </div>
      </div>
    </div>
  </body>
</html>
