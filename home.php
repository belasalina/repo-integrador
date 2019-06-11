<?php
require 'init.php';

if ($auth->usuarioLogueado()) {
  header("Location: inicio.php");
  exit;
}

$errores = [];
if ($_POST) {
  $errores = Validador::validarLogin($_POST);
  $usuarioOK = trim($_POST["email"]);
  if (empty($errores)) {
    $auth->loguearUsuario($_POST["email"]);

    header("Location: inicio.php");
    exit;
  }
}
// $usuario = traerUsuarioLogueado();
// $usuarioLogueado = usuarioLogueado();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/estilos.css">
   <title>FREESTYLE | HOME</title>
 </head>
 <body>
   <div class="container">
     <header class="row bg-secondary cabecera">
       <div class="free col-md-4">
         <img src="images/logo5.png" alt="logo" style="width: 250px; margin-left: 50px;">
       </div>
       <div class="col-md-4">
       </div>
       <div class="col-md-3 btn-registro">
         <ul class="lista">
           <li class="item text-light">Aun no estas registrado?</li>
           <li class="item btn btn-primary text-light"><a class="items" href="registro.php">Registrate</a></li>
         </ul>
       </div>
       <div class="col-md-1">
       </div>
     </header>
      <div class="container1">
        <div class="container-img">
           <div class="imagen" style="width: 100%;">
              <div class="row img-principal">
                <div class="col-md-8">
                </div>
                <div class="login col-md-4">
                   <form id="loginPadre"class="form-inline" action="home.php" method="POST" enctype="multipart/form-data">

                       <!-- usuario -->
                     <div class="campo">
                          <input type="email" class="form-control mb-4 mr-sm-4" id="usuario" placeholder="Introduce tu Usuario" name="email" value="">
                           <?php if(isset($errores["email"])): ?>
                           <span class="small text-danger"><?= $errores["email"] ?></span>
                           <?php endif; ?>
                     </div>
                       <!-- contraseña -->
                     <div class="campo">
                          <input type="password" class="form-control mb-4 mr-sm-4" id="pass" placeholder="Introduce tu Contraseña" name="pass">
                           <?php if(isset($errores["pass"])): ?>
                           <span class="small text-danger"><?= $errores["pass"] ?></span>
                           <?php endif; ?>
                     </div>
                       <div class="form-check mb-4 mr-sm-4 campo">
                         <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="remember"> Recordar mi usuario
                         </label>
                       </div>
                       <div class="campo">
                         <button type="submit" class="btn btn-success mb-4">Ingresar</button>
                       </div>
                   </form>
                 </div>
              </div>
           </div>
         </div>
           <ul class="nav nav-pills nav-justified bg-secondary btn-lg">
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Link</a>
              </li>
          </ul>
       </div>

     <div class="container2">
       <div class="cuerpo row">
         <div class="article col-md-5 col-sm-8">
           <div class="foto">
             <img src="images/rsocial.jpg" alt="" style="width: 350px">
           </div>
           <div class="txt">
             <h5>Comparti cualquier tipo de contenido</h5>
           </div>
         </div>
         <div class="article col-md-5 col-sm-8">
           <div class="foto">
             <img src="images/like2.png" alt="" style="width: 200px">
           </div>
           <div class="txt">
             <h5>Olvidate de los haters...solo recibi likes!</h5>
           </div>
         </div>
         <div class="article col-md-5 col-sm-8">
           <div class="foto">
             <img src="images/chatea3.png" alt="" style="width: 230px">
           </div>
           <div class="txt">
             <h5>Chatea solo con tus amigos</h5>
           </div>
         </div>
         <div class="article col-md-5 col-sm-8">
            <div class="foto">
             <img src="images/intereses2.jpg" alt="" style="width: 250px">
           </div>
           <div class="txt">
             <h5>Conoce personas que comparatan tus intereses!</h5>
           </div>
          </div>
       </div>
     </div>
     <div class="foot">
      <footer>© 2019 Digital House Argentina, Todos los derechos reservados. <a href="tyc" class="itemsF">Términos y Condiciones</a> | <a href="pdp" class="itemsF">Políticas de Privacidad</a></footer>
     </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
</html>
