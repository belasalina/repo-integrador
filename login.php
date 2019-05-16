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
   <header class="main-header">
       <nav class="nav-header">
         <div class="title">
          <h1 class="titleF"><a href="home.php" id="free">F R E E S T Y L E</a></h1>    <!--TITULO-->
         </div>
         <ul class="lista">
           <li class="item"><a class="items" href="home.php">HOME</a></li>
           <li class="item"><a class="items" href="registro.php">REGISTER</a></li>
         </ul>
       </nav>
     </header>

     <div class="container">
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
      <p class="pregunta-reg">Aún no estas registrado? <a href="registro.php">Registrate Aquí</a></p>
     </div>
     <div class="foot">
     <footer>© 2019 Digital House Argentina, Todos los derechos reservados.<a href="tyc" class="itemsF">Términos y Condiciones</a> | <a href="pdp" class="itemsF">Políticas de Privacidad</a></footer>
   </div>
   </body>
 </html>