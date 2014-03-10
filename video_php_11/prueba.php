<?php
session_start();

if ($_SESSION["usuario"])
{


?>
<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>otro</title>
</head>

<body>

otro contenido hola <?php echo $_SESSION["usuario"];?>
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