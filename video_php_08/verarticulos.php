<?php
// llamar librerias externals (conexion.php) WARNING
//include("conexion.php");

// otra funcion para llamar librerias externals (conexion.php) ERROR FATAL

require_once("conexion.php");

$sql="select * from noticias";
mysql_select_db($bd,$con);
$res=mysql_query($sql,$con);

?>
<html>
<head>
<title>Ver Articulos</title>
<style>
.wrapper{
	width:600px;
	margin: 0 auto;
	padding:20px;
	background:#FFC;}
h2{
	text-transform:uppercase;
	color:#0C6;}
li.titulo{
	color:#933;
	text-transform:lowercase;
	background:#CCC;
}
ul li {
	list-style:none;}
li.detalle{
	text-align:justify;
	margin-bottom:20px;}
</style>
</head>

<body>
<div class="wrapper">
<h2>Articulos de mi sitio-web300</h2>
	<ul>

	<?php
	$i=0;
    while($reg=mysql_fetch_assoc($res))
    { $i++; 
		echo '<li class="titulo">' . $reg["titulo"] . '</li>';
		echo '<li class="detalle">' . $reg["detalle"] . '</li>';
    }
    ?>
    </ul>
    
</div>
</body>
</html>