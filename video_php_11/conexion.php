<?php
// datos para conectar al gestor de base de datos
$con=mysql_connect("localhost","root","root");

$bd="trabajo_de_curso";
// si php no reconoce la funcion comentada usar esta
//$bd=mysql_select_db("trabajo_de_curso",$con);
//*******************************

function saludo ()
{
	echo "hola gente";
}
?>