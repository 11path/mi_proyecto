<?php


$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'contacto';


$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if (!$db) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

return $db;


?>
