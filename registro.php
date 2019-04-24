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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>| Registro </title>
  </head>
  <body>
    <h1>Crea una cuenta</h1>
    <h2>y empezá a disfrutar Freestyle.</h2>
    <!-- Formulario -->
    <form>
      <!-- nombre -->
  <div class="form-row">
    <ul class="col-md-6 offset-md-3 errores alert alert-danger">
      <?php foreach ($errores as $error): ?>
        <li><?= $error  ?></li>
      <?php endforeach; ?>
    </ul>
    <div class="form-group col-md-6">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" placeholder="Nombre">
    </div>
    <!-- Apellido -->
    <div class="form-group col-md-6">
      <label for="lastname">Apellido</label>
      <input type="text" class="form-control" id="lastname" placeholder="Apellido">
    </div>
    <!-- género -->
    <div class="form-check">
      <input class="form-check-input" name="gender" type="checkbox" id="gridCheck" value="mujer">
      <label class="form-check-label" for="gridCheck">
        Mujer
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" name="gender" type="checkbox" id="gridCheck" value="hombre">
      <label class="form-check-label" for="gridCheck">
        Hombre
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" name="gender" type="checkbox" id="gridCheck" value="otro">
      <label class="form-check-label" for="gridCheck">
        Otr@
      </label>
    </div>
    <!-- estado civil -->
    <div class="form-group col-md-4">
      <label for="inputState">Estado civil</label>
      <select id="State" class="form-control">
        <option selected>Choose...</option> //Debería ser array.
        <option>...</option>
        <option>Solter@</option>
        <option>Concubinat@</option>
        <option>Casad@</option>
        <option>Viud@</option>
        <option>Otr@</option>
      </select>
    </div>
    <br>
    <!-- mail -->
    <div class="form-group col-md-6">
      <label for="mail">Email</label>
      <input type="email" class="form-control" id="mail" placeholder="Email">
    </div>
    <!-- contraseña -->
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="pass1" placeholder="Password">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Repetir contraseña</label>
      <input type="password" class="form-control" id="pass2" placeholder="Password">
    </div>
    <br>
  </div>
  <!-- locacion -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCountry">Pais</label>
      <select id="Country" class="form-control">
        <option selected>Choose...</option>//Debería ser array.
        <option>...</option>
        <option>Argentina</option>
        <option>Brasil</option>
        <option>Uruguay</option>

      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Ciudad</label>
      <select id="City" class="form-control">
        <option selected>Choose...</option> //Debería ser array.
        <option>...</option>
        <option>Buenos Aires</option>
        <option>Río de Janeiro</option>
        <option>Asunción</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="localidad">Localidad</label>
      <input type="text" class="form-control" id="localidad" placeholder="localidad">
    </div>
    <br>
  </div>
  <!-- hobbies -->
  <p>Tus intereses en Freestyle: </p>
  <div class="form-group">
    <div class="form-check">
      <!-- lista de arrays. -->
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Musica
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Cine
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Literatura
      </label>
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Registrate</button>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
