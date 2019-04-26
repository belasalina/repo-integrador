<?php

function validarRegistro($datos){
  $errores = [];
  $datofinal = [];

  foreach ($datos as $posicion => $valores) {
  if (!is_array($datos[$posicion])) {
    $datofinal[$posicion] = trim($valores);
  }
}
  // Errores de Nombre
  if(strlen($datoFinal["name"]) == 0){
    $errores["name"] = "Por favor complete el campo nombre.";
  } elseif(ctype_alpha($datoFinal["name"]) == false){
    $errores["name"] = "El nombre debe contener sólo letras";
  }

  // Errores Apellido
  if (strlen($datoFinal["lastname"])==0){
    $errores["lastname"] = "Por favor complete el campo Apellido.";
  }elseif (ctype_alpha($datoFinal["lastname"])==false){
    $errores["lastname"] = "El apellido debe contener sólo letras";
  }

  // Errores Género
  if(!isset($datoFinal["gender"])){
    $errores["gender"] = "Por favor elija una opción";
  }

  // Errores mail
  if (strlen($datoFinal["mail"])==0){
    $errores["mail"] = "Por favor complete el campo Email.";
  } elseif (!filter_var($datoFinal["mail"], FILTER_VALIDATE_EMAIL)) {
    $errores["mail"] = "Ingrese un formato de email válido.";
  }

  // Errores contraseña
  if(strlen($datoFinal["pass1"]) == 0){
    $errores["pass1"] = "El campo contraseña no puede estar vacío.";
  } if(strlen($datoFinal["pass2"]) == 0){
    $errores["pass1"] = "Por favor repita su contraseña.";
  } elseif($datoFinal["pass1"] !== $datoFinal["pass2"]){
    $errores["pass1"] = "Las contraseñas no coinciden.";
  }

return $errores;
}

 ?>
