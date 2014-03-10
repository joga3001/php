<?php
// llamar librerias externals (conexion.php) WARNING
//include("conexion.php");

// otra funcion para llamar librerias externals (conexion.php) ERROR FATAL
require_once("conexion.php");

// una forma de llamar al detalle de la noticia mediante GET  referente a su id
$sql="select * from noticias where id_noticias =" .$_GET["id_noticias"]  . " ";
// otra forma
//$id_noticias=$_GET["id_noticias"];
//$sql="select * from noticias where id_noticias =$id_noticias ";

$res=mysql_db_query($bd,$sql,$con);

?>
<html>
<head>
<?php
	if($reg=mysql_fetch_assoc($res)){
?>
<title><?php	echo  $reg["titulo"] ; ?></title>
</head>
<body>
	
<h3><?php	echo  $reg["titulo"] ; ?> </h3>
<p><?php	echo  $reg["detalle"] ; ?> </p>



<hr>
<div>
<form name="form" action="comentario.php" method="post">

nombre: <input type="text" name="nom">
<br>
email: <input type="text" name="correo">
<br>
mensaje: <textarea name="mensaje" cols="40" rows="10" > </textarea>
<br>
<input type="hidden" name="id_noticias" value="<?php echo $_GET["id_noticias"]; ?>" >
<input type="submit" value="enviar" title="enviar">
<br>
</form>
</div>
<div>
<?php 
	$consultas="select * from comentarios where id_noticias=".$_GET["id_noticias"]." order by id_comentario desc";
$result=mysql_db_query($bd,$consultas,$con);
?><ul>	
<?php	while($rows=mysql_fetch_assoc($result))
	{ ?>
		
        <li>
        <stron> nombre:</strong><?php echo $rows["nombre"]; ?>
        <br>
        <stron> mensaje:</strong><?php echo $rows["mensaje"]; ?>
        <hr>
        </li>
<?php	}
?>
</div>
</div>
<?php
}
?>
</body>
</html>