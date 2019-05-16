<?php

session_start();

function validarRegistro($datos){

  $errores = [];
  $datoFinal = [];

  foreach ($datos as $posicion => $valores) {
    if (!is_array($datos[$posicion])) {
      $datoFinal[$posicion] = trim($valores);
    }
  }

  // Errores de Nombre

    if(strlen($datoFinal["name"]) == 0){
      $errores["name"] = "Complete el campo nombre.";
    } elseif(ctype_alpha($datoFinal["name"]) == false){
      $errores["name"] = "Nombre debe contener sólo letras";
    }

  // Errores Apellido

    if(strlen($datoFinal["lastname"]) == 0){
      $errores["lastname"] = "Complete el campo Apellido.";
    } elseif (ctype_alpha($datoFinal["lastname"]) == false){
      $errores["lastname"] = "Apellido debe contener sólo letras";
    }

  // Errores mail

    if (strlen($datoFinal["email"]) == 0){
      $errores["email"] = "Complete el campo Email.";
    } elseif (!filter_var($datoFinal["email"], FILTER_VALIDATE_EMAIL)) {
      $errores["email"] = "Ingrese un formato de email válido.";
    }

  // Errores contraseña //

    if(strlen($datoFinal["pass"]) == 0){
      $errores["pass"] = "Contraseña no puede estar vacío.";
    } elseif (strlen($datoFinal["pass"]) < 8) {
      $errores["pass"] = "La Contraseña debe tener al menos 8 caracteres";
    } elseif (!preg_match('`[a-z]`',$datoFinal["pass"])) {    //valida que contenga al menos una minuscula//
      $errores["pass"] = "Contraseña debe contener al menos una minuscula";
    } elseif (!preg_match('`[A-Z]`',$datoFinal["pass"])){     //valida que contenga al menos una mayuscula//
      $errores["pass"] = "Contraseña debe contener al menos una mayuscula";
    }

    // repetir contraseña //

     if(strlen($datoFinal["pass2"]) == 0){
      $errores["pass2"] = "Repita su contraseña.";
    } elseif($datoFinal["pass"] !== $datoFinal["pass2"]){
      $errores["pass"] = "Las contraseñas no coinciden.";
    }

    // Errores Género

      if(!isset($datoFinal["gender"])){
        $errores["gender"] = "Por favor elija un género";
      }

      // intereses

      if(!isset($datos["interes"])){
        $errores["interes"] = "Por favor elija al menos un interes";
      }

return $errores;
}

 // funcion para agregar id a usuario //

function nextId(){
  if (!file_exists("db.json")) {
    $json = "";
  } else {
    $json = file_get_contents("db.json");
  }

  if ($json == "") {
    return 1; //si no hay usuario inicia con 1//
  }

  $array = json_decode($json, true);
  $ultimoUsuario = array_pop($array["usuarios"]); //se obtiene el ultimo usuario //
  $lastId = $ultimoUsuario["id"];

  return $lastId + 1;   //se le suma 1 al id del ultimo usuario//
}

  // armar usuario para luego guardar como json //

function armarUsuario(){
  return [
    "id" => nextId(),
    "nombre" => trim($_POST["name"]),
    "apellido" => trim($_POST["lastname"]),
    "email" => trim($_POST["email"]),
    "pass" => password_hash($_POST["pass"], PASSWORD_DEFAULT),
    "genero" => trim($_POST["gender"]),
  ];
}

  // guardar usuario en json //

function guardarUsuario($usuario){
  if (!file("db.json")) {
    $json = "";
  } else {
    $json = file_get_contents("db.json");
  }

  $array = json_decode($json, true);
  $array["usuarios"][] = $usuario;  // se agrega usuario al array
  $array = json_encode($array, JSON_PRETTY_PRINT);

  file_put_contents("db.json", $array);
}


function buscarUsuarioPorMail($email){
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);

  foreach ($array["usuarios"] as $usuario) {
    if($usuario["email"] == $email){
      return $usuario;
    }
  }
  return null;
}

function existeUsuario($email){
  return buscarUsuarioPorMail($email) !== null;
}

            // LOGIN //

function validarLogin($datos){

  $errores = [];

    if(strlen($datos["email"]) == 0){
      $errores["email"] = "Por favor complete el campo usuario.";
      } elseif (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
      $errores["email"] = "Por favor ingrese un usuario valido";
    } elseif(!existeUsuario($datos["email"])){
      $errores["email"] = "El usuario no se encuentra registrado.";
    }

    if(strlen($datos["pass"]) == 0){
      $errores["pass"] = "El campo contraseña no puede estar vacío.";
    } else {
      $usuario = buscarUsuarioPorMail($datos["email"]);
    if(!password_verify($datos["pass"], $usuario["pass"])){
      $errores["pass"] = "La contraseña es incorrecta.";
      }
    }

    return $errores;
}


function loguearUsuario($email){
  $_SESSION["email"] = $email;
}

function usuarioLogueado(){
  return isset($_SESSION["email"]);
}

function traerUsuarioLogueado(){
  if (isset($_SESSION["email"])) {
    $usuario = buscarUsuarioPorMail($_SESSION["email"]);
    return $usuario;
  } else {
    return false;
  }
}


function listaUsuarios(){
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);

  return $array["usuarios"];
}

 ?>
