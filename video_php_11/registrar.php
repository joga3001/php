<?php
// otra funcion para llamar librerias externals (conexion.php) ERROR FATAL
require_once("conexion.php");

// una forma de llamar al detalle de la noticia mediante GET  referente a su id
$sql="insert into usuarios
values
(null,'".$_POST["nom"]."','".$_POST["users"]."','".$_POST["passs"]."')";

$resultado=mysql_db_query($bd,$sql,$con);

header("Location: index.php");

?>