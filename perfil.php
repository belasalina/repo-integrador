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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>FREESTYLE | PERFIL</title>
  </head>
  <body>
    <header class="row perfil bg-secondary">
      <div class="col-sx-12">
        <div class="center-block">
          <h1>Mi Perfil</h1>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row  foto-perfil">
        <div class="col-xs-12 text-center">
            <?php if (usuarioLogueado()): ?>
                <img class="avatar" src="images/<?= $usuario["avatar"] ?>" alt="perfil" style="width: 400px;">
              <?php else: ?>
                <img class="avatar" src="images/perfil-anonimo.jpg" alt="perfil" style="width: 400px;">
              <?php endif; ?>
        </div>
      </div>
      <div class="">
        <a href="inicio.php">Volver a Inicio</a>
      </div>
      <div class="row lista-info">
        <div class="col-xs-12 text-center">
          <ul>
            <li><strong>Nombre:</strong>  <?=  $usuario["nombre"] ?></li>
            <li><strong>Apellido:</strong>  <?=  $usuario["apellido"] ?></li>
            <li><strong>Email:</strong>  <?=  $usuario["email"] ?></li>
            <li><strong>Genero:</strong>  <?=  $usuario["genero"] ?></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
