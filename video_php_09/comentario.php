<?php
// llamar librerias externals (conexion.php) WARNING
//include("conexion.php");

// otra funcion para llamar librerias externals (conexion.php) ERROR FATAL
require_once("conexion.php");

// una forma de llamar al detalle de la noticia mediante GET  referente a su id
$sql="insert into comentarios
values
(null, '".$_POST["nom"]."','".$_POST["correo"]."','".$_POST["mensaje"]."','".$_POST["id_noticias"]."')";

$res=mysql_db_query($bd,$sql,$con);

header("Location: detalle.php?id_noticias=".$_POST["id_noticias"]);

?>
