<?php
include "init.php";

$usuario = $dbAll->traerUsuarioLogueado();
$usuarioLogueado = $auth->  usuarioLogueado();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos-inicio.css">
  <title>FREESTYLE | INICIO</title>
</head>
  <body class="bodyHome">
    <div class="container">

          <!--- CABECERA --------------------------------->

      <header class="row bg-secondary cabecera">
        <div class="free col-md-4">
        <?php if ($auth->usuarioLogueado()): ?>
          <a href="inicio.php"><img src="images/logo5.png" alt="logo" style="width: 250px; margin-left: 30px;"></a>
        <?php else: ?>
          <a href="home.php"><img src="images/logo5.png" alt="logo" style="width: 250px; margin-left: 30px;"></a>
        <?php endif; ?>
        </div>
        <div class="bienvenido col-md-4 text-light">
          <?php if ($auth->usuarioLogueado()): ?>
              <?php if ($usuario->getGender() == "mujer"): ?>
               <h5><?= "Bienvenida ". $usuario->getName() . "!"?></h5>
             <?php elseif ($usuario->getGender() == "hombre"):?>
               <h5><?= "Bienvenido ". $usuario->getName() . "!"?></h5>
             <?php else: ?>
               <h5><?= "Bienvenid@ ". $usuario->getName() . "!"?></h5>
             <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-1">
        </div>
        <div class="salir col-md-3">
          <div class="">
            <?php if ($auth->usuarioLogueado()): ?>
              <a class="boton btn btn-danger btn-lg" href="logout.php">Salir</a>
            <?php else: ?>
              <a class="boton btn btn-success btn-lg" href="home.php">Ingresar</a>
            <?php endif; ?>
          </div>
        </div>
      </header>

      <div class="cuerpo-inicio row">

                <!-- PARTE IZQUIERDA DEL BODY ------------------->

        <div class="izquierda col-md-2" id="perfil">
          <div class="foto">
            <div class="img-perfil">
              <?php if ($auth->usuarioLogueado()): ?>
                  <img class="avatar" src="images/<?= $usuario->getAvatar() ?>" alt="" style="width: 100%;">
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

        <div class="centro col-md-7">
          <div class="cuerpo-central">
            <ul class="menu-p nav nav-pills nav-justified bg-secondary btn-lg">
               <li class="it nav-item">
                 <a class="link-menu nav-link text-light" href="#">Nuevo Post +</a>
               </li>
               <li class="it nav-item">
                 <a class="nav-link text-light" href="#">Mis Amigos</a>
               </li>
               <li class="it nav-item">
                   <a class="nav-link text-light" href="#">Link</a>
               </li>
           </ul><br>
          <div class="search">
            <input type="text" name="search" value="" placeholder="Search..." style="width: 100%;">
          </div>
          <div class="post">
            <div class="id-post row">
              <div class="img-id-post col-md-1">
                <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
              </div>
              <div class="nombre-id-post col-md-10">
                <h5>Nombre</h5>
              </div>
              <div class="time-post col-md-1">
                <p style="margin-bottom: 0px; color: gray;">2h.</p>
              </div>
            </div>
            <div class="post-img">
                <div class="principal-post">
                  <img class="" src="images/free.jpg" alt="" style="width: 100%; height: 350px;">
                  <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>
            </div>
            <div class="like-share row">
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-arrow-alt-circle-up" style="width: 20px;"></i><p class="pie">500 likes</p></a>
              </div>
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-share-square"></i><p class="pie">Compartir</p></a>
              </div>
            </div>
          </div>

          <div class="post">
            <div class="id-post row">
              <div class="img-id-post col-md-1">
                <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
              </div>
              <div class="nombre-id-post col-md-10">
                <h5>Nombre</h5>
              </div>
              <div class="time-post col-md-1">
                <p style="margin-bottom: 0px; color: gray;">2h.</p>
              </div>
            </div>
            <div class="post-img">
                <div class="principal-post">
                  <img class="" src="images/free.jpg" alt="" style="width: 100%; height: 350px;">
                  <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>
            </div>
            <div class="like-share row">
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-arrow-alt-circle-up" style="width: 20px;"></i><p class="pie">500 likes</p></a>
              </div>
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-share-square"></i><p class="pie">Compartir</p></a>
              </div>
            </div>
          </div>

          <div class="post">
            <div class="id-post row">
              <div class="img-id-post col-md-1">
                <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
              </div>
              <div class="nombre-id-post col-md-10">
                <h5>Nombre</h5>
              </div>
              <div class="time-post col-md-1">
                <p style="margin-bottom: 0px; color: gray;">2h.</p>
              </div>
            </div>
            <div class="post-img">
                <div class="principal-post">
                  <img class="" src="images/free.jpg" alt="" style="width: 100%; height: 350px;">
                  <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>
            </div>
            <div class="like-share row">
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-arrow-alt-circle-up" style="width: 20px;"></i><p class="pie">500 likes</p></a>
              </div>
              <div class="likes col-md-6">
                <a href="#"><i class="far fa-share-square"></i><p class="pie">Compartir</p></a>
              </div>
            </div>
          </div>
        </div>
       </div>

                      <!-- PARTE DERECHA DEL BODY ---------------------------------------->


       <div class="derecha col-md-3">
           <div class="chat row">
            <div class="img-id-post col-md-2">
               <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
           <div class="chat row">
             <div class="img-id-post col-md-2">
               <img class="profile" src="images/like2.png" alt="perfil-posteo" style="width:100%;">
             </div>
             <div class="nombre-id-post col-md-10">
               <h5>Nombre</h5>
             </div>
           </div>
       </div>
      </div>
    </div>
  </body>
</html>
