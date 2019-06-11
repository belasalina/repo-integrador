<?php

/**
 *
 */
class Auth
{

  function __construct()
  {
    session_start();
  }

  function loguearUsuario($email){
    $_SESSION["email"] = $email;
  }

  function usuarioLogueado(){
    return isset($_SESSION["email"]);
  }
}
