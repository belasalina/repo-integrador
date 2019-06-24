<?php
require 'init.php';

$usuario = $dbAll->traerUsuarioLogueado();
$usuarioLogueado = $auth->usuarioLogueado();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>FREESTYLE | PERFIL</title>
  </head>
  <body>
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
    <div class="container">
      <div class="row  foto-perfil">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <div class="uno">
            <?php if ($auth->usuarioLogueado()): ?>
                <img class="avatar" src="images/<?= $usuario->getAvatar() ?>" alt="perfil" style="width: 400px;">
              <?php else: ?>
                <img class="avatar" src="images/perfil-anonimo.jpg" alt="perfil" style="width: 400px;">
              <?php endif; ?>
            </div>
            <div class="dos">
              <ul>
                <li><strong>Nombre:</strong>  <?=  $usuario->getName() ?></li>
                <li><strong>Apellido:</strong>  <?=  $usuario->getLastname() ?></li>
                <li><strong>Email:</strong>  <?=  $usuario->getEmail() ?></li>
                <li><strong>Genero:</strong>  <?=  $usuario->getGender() ?></li>
              </ul>
            </div>
        </div>
        <div class="col-md-3">

        </div>
      </div>
      <div class="">
        <a href="inicio.php">Volver a Inicio</a>
      </div>
      <div class="row lista-info">

      </div>
    </div>
  </body>
</html>
