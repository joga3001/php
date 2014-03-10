<?php
session_start();

if ($_SESSION["usuario"])
{


?>
<html>
<head>
<title>Ver contenidos restringidos</title>
</head>

<body>
holas <?php echo $_SESSION["usuario"];?>
<br>
<a href="prueba.php">ir</a>
<br>
<a href="salir.php">salir</a>
</body>
</html>
<?php
}
else

{

echo"<script type='text/javascript'>

alert('No estas logeado');
window.location='index.php';	
	</script>";
}
?>