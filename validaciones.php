<?php
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
    $errores["name"] = "Por favor complete el campo nombre.";
  } elseif(ctype_alpha($datoFinal["name"]) == false){
    $errores["name"] = "El nombre debe contener sólo letras";
  }

  // Errores Apellido
  if(strlen($datoFinal["lastname"]) == 0){
    $errores["lastname"] = "Por favor complete el campo Apellido.";
  } elseif (ctype_alpha($datoFinal["lastname"]) == false){
    $errores["lastname"] = "El apellido debe contener sólo letras";
  }

  // Errores Género
  if(!isset($datoFinal["gender"])){
    $errores["gender"] = "Por favor elija un género";
  }

  // Errores mail
  if (strlen($datoFinal["email"]) == 0){
    $errores["email"] = "Por favor complete el campo Email.";
  } elseif (!filter_var($datoFinal["email"], FILTER_VALIDATE_EMAIL)) {
    $errores["email"] = "Ingrese un formato de email válido.";
  }

  // Errores contraseña //
  if(strlen($datoFinal["pass1"]) == 0){
    $errores["pass1"] = "El campo contraseña no puede estar vacío.";
  } elseif (strlen($datoFinal["pass1"]) < 8) {
    $errores["pass1"] = "La Contraseña debe tener al menos 8 caracteres";
  } elseif (!preg_match('`[a-z]`',$datoFinal["pass1"])) {    //valida que contenga al menos una minuscula//
    $errores["pass1"] = "La Contraseña debe contener al menos una minuscula";
  } elseif (!preg_match('`[A-Z]`',$datoFinal["pass1"])){     //valida que contenga al menos una mayuscula//
    $errores["pass1"] = "La Contraseña debe contener al menos una mayuscula";
  }

    // repetir contraseña //

   if(strlen($datoFinal["pass2"]) == 0){
    $errores["pass1"] = "Por favor repita su contraseña.";
  } elseif($datoFinal["pass1"] !== $datoFinal["pass2"]){
    $errores["pass1"] = "Las contraseñas no coinciden.";
  }
return $errores;
}
 ?>
