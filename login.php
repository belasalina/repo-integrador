<?php
  require_once "validaciones.php";

  if (usuarioLogueado()) {
    header("Location: inicio.php");
    exit;
  }

  $errores = [];

  if ($_POST) {
    $errores = validarLogin($_POST);
    $usuarioOK = trim($_POST["email"]);

    if (empty($errores)) {
      loguearUsuario($_POST["email"]);
      var_dump($_SESSION);

      header("Location: inicio.php");
      exit;
    }
  }



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="css/estilo-login.css">
     <title>FREESTYLE | LOG IN</title>
   </head>
   <body class="login">
     <nav class="navbar">
       <a class="navbar-brand" href="home.php">FREESTYLE</a>
     </nav>

     <div class="container">
       <h1 class="titulo">FREESTYLE</h1>
       <div class="login">
          <form class="form-inline" action="login.php" method="POST" enctype="multipart/form-data" id="loginPadre">

                <!-- usuario -->

               <label for="email" class="mb-4 mr-sm-4">Usuario:</label>
                 <input type="email" class="form-control mb-4 mr-sm-4" id="usuario" placeholder="Introduce tu Usuario" name="email" value="">
              <?php if(isset($errores["email"])): ?>
                <span class="small text-danger"><?= $errores["email"] ?></span>
              <?php endif; ?>

                <!-- contraseña -->

               <label for="pass" class="mb-4 mr-sm-4">Contraseña:</label>
                 <input type="password" class="form-control mb-4 mr-sm-4" id="pass" placeholder="Introduce tu Contraseña" name="pass">
              <?php if(isset($errores["pass"])): ?>
                 <span class="small text-danger"><?= $errores["pass"] ?></span>
               <?php endif; ?>

            <div class="form-check mb-4 mr-sm-4">
               <label class="form-check-label">
                 <input type="checkbox" class="form-check-input" name="remember"> Recordar mi usuario
               </label>
           </div>
           <button type="submit" class="btn btn-success mb-4">Ingresar</button>
        </form>
      </div class="linkRegistro">
      <p class="foot">Aún no estas registrado? <a href="registro.php">Registrate Aquí</a></p>
     </div>
   </body>
 </html>
