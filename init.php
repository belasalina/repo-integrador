<?php

include "classes/usuario.php";
include "classes/db.php";
include "classes/dbMysql.php";
include "classes/dbJson.php";
include "classes/validador.php";
include "classes/auth.php";

$dbAll = new DbMysql; //En caso de usar json cambiar por new DbJson
$auth = new Auth;
