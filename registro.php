<?php
  include "validaciones.php";
  $errores = [];
  $nameOk = "";

  if($_POST){
      $errores = validarRegistro($_POST);
      $nameOk = trim($_POST["name"]);

      if(empty($errores)){
      }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css\estilo-registro.css">
    <title>| Registrate </title>
  </head>

  <body>
    <div class="cabecera">
      <header>
        <h1>Crea una cuenta</h1>
        <h2>y empezá a disfrutar Freestyle.</h2>
      </header>
    </div>

    <div class="container">
    <form class="" action="index.html" method="post">
        <ul class="form-group">
          <?php foreach ($errores as $error): ?>
            <li><?= $error  ?></li>
          <?php endforeach; ?>
        </ul>
      <div class="form-row align-items-center">
        <!-- nombre -->
        <div class="col-sm-3 my-1">
          <label for="name" class="mb-4 mr-sm-4"></label>
          <input type="text" class="form-control" id="name" placeholder="Nombre">
        </div>

        <!-- Apellido -->
        <div class="col-sm-3 my-1">
          <label for="lastname" class="mb-4 mr-sm-4"></label>
          <input type="text" class="form-control" id="lastname" placeholder="Apellido">
        </div>
      </div>

        <!-- mail -->
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4"></label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
      </div>

        <!-- contraseña -->
      <div class="form-row align-items-center">
        <div class="col-sm-3 my-1">
          <label for="inputPassword4" class="mb-4 mr-sm-4"></label>
          <input type="password" class="form-control" id="pass1" placeholder="Contraseña">
        </div>
        <div class="col-sm-3 my-1">
          <label for="inputPassword4" class="mb-4 mr-sm-4"></label>
          <input type="password" class="form-control" id="pass2" placeholder="Repetir contraseña">
        </div>
      </div>

        <!-- género -->
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="gender" type="checkbox" id="gridCheck" value="mujer">
          <label class="form-check-label" for="gridCheck">
            Mujer
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="gender" type="checkbox" id="gridCheck" value="hombre">
          <label class="form-check-label" for="gridCheck">
            Hombre
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="gender" type="checkbox" id="gridCheck" value="otro">
          <label class="form-check-label" for="gridCheck">
            Otro
          </label>
        </div>
        <br>
        <br>
        <!-- Boton registro -->
        <button type="submit" class="btn btn-primary">Registrate</button>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
