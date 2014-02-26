<?php
/*
	comment
	$saludo = "hola Joga";
	$numero = 1000;
	echo $saludo;
*/
/*
RECUPERAR DATOS CON EL METODO $_POST

$nom=$_POST["nom"];
$ap=$_POST["ap"];
$pais=$_POST["pais"];

echo "nombre=$nom<br>apellido=$ap<br>país=$pais";
*/

/*
RECUPERAR DATOS CON EL METODO $_GET

$nom=$_GET["nom"];
$ap=$_GET["ap"];
$pais=$_GET["pais"];

echo "nombre=$nom<br>apellido=$ap<br>país=$pais";
*/

/*
RECUPERAR DATOS CON EL METODO $_REQUEST reconoce cualquiera de los dos metodos (el metodo en el formulario puede ser _POST o _GET )
Pero se recomienda especificar el metodo (_REQUEST NO RECOMENDADO POR DEFICIENCIAS DE SISTEMA o formularios procesados en un solo archivo)
*/

$nom=$_REQUEST["nom"];
$ap=$_REQUEST["ap"];
$pais=$_REQUEST["pais"];

echo "nombre=$nom<br>apellido=$ap<br>país=$pais";


?>