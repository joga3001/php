<?php
//  funcion para llamar librerias externals (conexion.php) ERROR FATAL
require_once("conexion.php");
if( isset($_GET["id"])){
$sql="select
h.foto,c.texto
from
header as h,contenido as c
where
h.id_menu=".$_GET["id"]."
and
c.id_menu=".$_GET["id"]."
";
}else{
	
$sql="select
h.foto,c.texto
from
header as h,contenido as c
where
h.id_menu=1
and
c.id_menu=1
";	
	
	}
$res=mysql_db_query($bd,$sql,$con);
if($reg=mysql_fetch_assoc($res))
{
	$header=$reg["foto"];
	$contenido=$reg["texto"];
}
else{
	
	header("location: index.php");
	}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sitio Dinamico</title>
<style>
body {
	}
	#principal{
		width:600px;
		height:500px;
		border:1px solid black;
		margin:0 auto;
		text-align:center;}
	#header{
		width:600px;
		height:100px;
		float:left;
		color:#FFF;
		font-size:40px;
		}
	#main{
		width:600px;
		height:400px;
		float:left;}
	#menu{
		width:100px;
		height:400px;
		float:left;
		}
	.boton{
		width: 100px;
		height:25px;
		float:left;
		background:#666;
		color:#fff;
		text-align:left!important;
		padding-left:10px; }
	#content{
		width:500px;
		height:400px;
		float:left;
		}
	.boton a{
		text-decoration:none;
		color: #FFF;
		}
</style>
</head>

<body>

<div id="principal">

	<div id="header">
    <img src="img/<?=$header; ?>" width="600" align="100" >
    
    </div>
    
    <div id="main">
    	<div id="menu">
			<?php
			$sql="select * from menu";
			$res=mysql_db_query($bd,$sql,$con);
				while($reg=mysql_fetch_assoc($res))
				{ ?>
					<div class="boton">
                    <a href="index.php?id=<?=$reg["id_menu"]?>">
					<?=$reg["texto"]; ?>
                    </a>
                    </div>
			<?php } ?>
             
        </div>
        <div id="content">
        <?=$contenido; ?>
        Q mas
        </div>
    </div>

</div>

</body>
</html>
