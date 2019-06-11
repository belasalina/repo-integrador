<?php

/**
 *
 */
class Usuario
{
  private $id;
  private $name;
  private $lastname;
  private $email;
  private $pass;
  private $gender;
  private $avatar;

  function __construct($array)
  {
    if (isset($array["id"])){
      $this->id = $array["id"];
      $this->pass = $array["pass"];
      $this->name = trim($array["nombre"]);
      $this->lastname = trim($array["apellido"]);
      $this->email = trim($array["email"]);
      $this->gender = $array["genero"];
      $this->avatar = $array["avatar"];
    } else {
      $this->id = null;
      $this->pass = password_hash($array["pass"], PASSWORD_DEFAULT);
      $this->name = trim($array["name"]);
      $this->lastname = trim($array["lastname"]);
      $this->email = trim($array["email"]);
      $this->gender = $array["gender"];
      $this->avatar = $_FILES["avatar"]["name"];
    }

  }

    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }
    public function setLastame($lastname)
    {
      $this->lastname = $lastname;
      return $this;
    }
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }
    public function setPass($pass)
    {
      $this->pass = $pass;
      return $this;
    }
    public function setAvatar($avatar)
    {
      $this->avatar = $avatar;
      return $this;
    }

    public function getName()
    {
      return $this->name;
    }
    public function getLastname()
    {
      return $this->lastname;
    }
    public function getGender()
    {
      return $this->gender;
    }
    public function getEmail()
    {
      return $this->email;
    }
    public function getPass()
    {
      return $this->pass;
    }
    public function getAvatar()
    {
      return $this->avatar;
    }
}
