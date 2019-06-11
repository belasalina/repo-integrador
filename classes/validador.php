<?php


class Validador
{
  public static function validarRegistro($datos)
  {
      global $dbAll;

      $errores = [];
      $datoFinal = [];

      foreach ($datos as $posicion => $valores) {
        if (!is_array($datos[$posicion])) {
          $datoFinal[$posicion] = trim($valores);
        }
      }

        if($_FILES["avatar"]["error"] !== 0){
        $errores["avatar"]="Hubo un error. Por favor, vuelva a subir la imagen";
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

      // Errores mail

        if (strlen($datoFinal["email"]) == 0){
          $errores["email"] = "Por favor complete el campo Email.";
        } elseif (!filter_var($datoFinal["email"], FILTER_VALIDATE_EMAIL)) {
          $errores["email"] = "Ingrese un formato de email válido.";
        }

      // Errores contraseña //

        if(strlen($datoFinal["pass"]) == 0){
          $errores["pass"] = "El campo contraseña no puede estar vacío.";
        } elseif (strlen($datoFinal["pass"]) < 8) {
          $errores["pass"] = "La Contraseña debe tener al menos 8 caracteres";
        } elseif (!preg_match('`[a-z]`',$datoFinal["pass"])) {    //valida que contenga al menos una minuscula//
          $errores["pass"] = "La Contraseña debe contener al menos una minuscula";
        } // } elseif (!preg_match('`[A-Z]`',$datoFinal["pass"])){     //valida que contenga al menos una mayuscula//
        //   $errores["pass"] = "La Contraseña debe contener al menos una mayuscula";
        // }

        // repetir contraseña //

         if(strlen($datoFinal["pass2"]) == 0){
          $errores["pass2"] = "Por favor repita su contraseña.";
        } elseif($datoFinal["pass"] !== $datoFinal["pass2"]){
          $errores["pass"] = "Las contraseñas no coinciden.";
        }

        // Errores Género

          if(!isset($datoFinal["gender"])){
            $errores["gender"] = "Por favor elija un género";
          }

          // intereses

          if(!isset($datos["interes"])){
            $errores["interes"] = "Decinos al menos un interes";
          }

    return $errores;
  }

  public static function validarLogin($datos){
    global $dbAll;

    $errores = [];

      if(strlen($datos["email"]) == 0){
        $errores["email"] = "Por favor complete el campo usuario.";
      } elseif (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
        $errores["email"] = "Por favor ingrese un usuario valido";
      } elseif (!$dbAll->existeUsuario($datos["email"])){
        $errores["email"] = "El usuario no se encuentra registrado.";
      }

      if(strlen($datos["pass"]) == 0){
        $errores["pass"] = "El campo contraseña no puede estar vacío.";
      } else {
        $usuario = $dbAll->buscarUsuarioPorMail($datos["email"]);

        if(!password_verify($datos["pass"], $usuario->getPass())){
        $errores["pass"] = "La contraseña es incorrecta.";
        }
      }
      return $errores;
  }
}
