<?php
// llamar librerias externals (conexion.php) WARNING
//include("conexion.php");

// otra funcion para llamar librerias externals (conexion.php) ERROR FATAL
require_once("conexion.php");

// llamar registro de tabla noticias
$sql="select * from noticias order by id_noticias desc";
mysql_select_db($bd,$con);
$res=mysql_query($sql,$con);

?>
<html>
<head>
<title>Ver Noticias</title>
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
div.hold-lis{
	background: #CCC;
	}
	img{
		width:66px;
		height:46px;}
</style>
</head>

<body>
<div class="wrapper">
<h2>Las Noticias</h2>
	

	<?php
    while($reg=mysql_fetch_assoc($res))
    {  ?>
	<div class="hold-lis"><ul>
<?php		echo '<li class="titulo">' . $reg["titulo"] . '</li>';
			echo '<li class="detalle">' . $reg["detalle"] . '</li>';
			echo '<li class="fecha">' . $reg["fecha"] . '</li>';
			echo '<li class="hora">' . $reg["hora"] . '</li>';
?>
			<a href="detalle.php?id_noticias=<?php echo $reg["id_noticias"] ?>" title="detalle de <?php echo $reg["titulo"] ; ?>" >
<img src="search.png">
			</a>

	</ul></div>
  <?php  } ?>
    
    
</div>
</body>
</html>