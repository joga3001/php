<?php
session_start();
// this function session_start() should go at the top no even comments or htmls

//funcion para llamar librerias externals (conexion.php) ERROR FATAL
require_once("conexion.php");

// preguntar si usuario existe en al base de datos
$sql="select user from usuarios
where
user='".$_POST["login"]."'";

$res=mysql_db_query($bd,$sql,$con);
// trabaja con la nueva function of the conextion.php
//$res=mysql_query($sql,$con);
if(mysql_num_rows($res) == 0)
{
	echo "<script type='text/javascript'>
	
	alert('El user ".$_POST["login"]." no existe en la base de datos');
	window.location='index.php';
	
	</script>";
	
}else{
	
//************************************************
	// ahora preguntamos si en el login si usuario y la contrasena coinciden en la base de datos

$consulta="select * from usuarios
where
user='".$_POST["login"]."'
and
pass='".$_POST["pass"]."' ";
$result=mysql_query($consulta,$con);
	if(mysql_num_rows($result) == 0)
	{
			echo "<script type='text/javascript'>
	
			alert('El user y el pass no coinciden');
			window.location='index.php';
	
	</script>";
	}else{
		
//************************************************
	// ahora le damos acceso a nuestros contenidos restringidos		
		
		$_SESSION["usuario"]=$_POST["login"];
		header("location: contenido.php");
		
	}


}


?>
<html>
<head>

<title></title>
</head>
<body>
	
</body>
</html>