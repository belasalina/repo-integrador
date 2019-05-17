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
      <header class="main-header">
           <nav class="nav-header">
             <div class="foto" >
             <?php if (usuarioLogueado()): ?>
                 <img class="avatar" src="images/<?= $usuario["email"] . ".jpg"?>" alt="">
               <?php else: ?>
                 <img class="avatar" src="images/perfil-anonimo.jpg" alt="">
               <?php endif; ?>
             </div>

             <div class="title">
              <a class="navbar-brand" href="home.php"><h1 class="titleF">F R E E S T Y L E</h1></a>    <!--TITULO-->
              <?php if (usuarioLogueado()): ?>
                <h5><?= "Bienvenido ". $usuario["nombre"]. "!"?></h5>
              <?php endif; ?>
             </div>

              <div class="logout">
               <?php if (usuarioLogueado()): ?>
                 <a class="btn btn-danger btn-lg" href="logout.php">Salir</a>
               <?php else: ?>
                 <a class="btn btn-success btn-lg" href="login.php">Ingresar</a>
               <?php endif; ?>
              </div>
         </nav>
       </header>
    </div>

  </body>
</html>
