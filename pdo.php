<?php

$dsn = "mysql:host=127.0.0.1;dbname=freestyle_db;port=8889";
$user = "root";
$pass = "";

try {
  $db = new PDO($dsn, $user, $pass);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (\Exception $e) {
  echo "Hubo un error!<br>";
  echo $e->getMessage();
  exit;
}


 ?>
