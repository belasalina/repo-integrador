<?php

/**
 *
 */
class DbMysql extends Db
{
  public $connection;

  function __construct()
  {
    $dsn = "mysql:host=127.0.0.1;dbname=freestyle_db;port=8889";
    $user = "root";
    $pass = "";

    try {
      $this->connection = new PDO($dsn, $user, $pass);

      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (\Exception $e) {
      echo "Hubo un error!<br>";
      echo $e->getMessage();
      exit;
    }
  }

    public function guardarUsuario(Usuario $usuario){

      $stmt = $this->connection->prepare("INSERT INTO usuarios VALUES(default,:nombre,:apellido,:email,:pass,:genero,:avatar)");  //Hay que explicitar los campos que son cadena de texto en SQL.

      $stmt->bindValue(':nombre', $usuario->getName());
      $stmt->bindValue(':apellido', $usuario->getLastname());
      $stmt->bindValue(':email', $usuario->getEmail());
      $stmt->bindValue(':pass', $usuario->getPass());
      $stmt->bindValue(':genero', $usuario->getGender());
      $stmt->bindValue(':avatar', $usuario->getAvatar());
      $stmt->execute();

    }

    public function buscarUsuarioPorMail($email){

      $stmt = $this->connection->prepare("SELECT * FROM usuarios WHERE email=:email");
      $stmt->bindValue(':email', $email);
      $stmt->execute();
      $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($usuario) {
        $usuario = new Usuario($usuario);
        return $usuario;
      }
        return null;
    }

    public function existeUsuario($email){
      return $this->buscarUsuarioPorMail($email) !== null;
    }

    public function traerUsuarioLogueado(){
      if (isset($_SESSION["email"])) {
        $usuario = $this->buscarUsuarioPorMail($_SESSION["email"]);
        return $usuario;
      } else {
        return false;
      }
    }
}
