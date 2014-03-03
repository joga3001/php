<html>
<head>
<title>
prueba
</title>
</head>
<body>


<form name="form" method="post" action="cinco.php">
<?php

  $meses[0] = "Enero";
  $meses[1] = "Febrero";
  $meses[2] = "Marzo";
  $meses[3] = "Abril";
  $meses[4] = "Mayo";
  $meses[5] = "Junio";
  $meses[6] = "Julio";
  $meses[7] = "Agosto";
  $meses[8] = "Septiembre";
  $meses[9] = "Octubre";
  $meses[10] = "Noviembre";
  $meses[11] = "Diciembre";  

  $cantidad_dias[0] = "31";
  $cantidad_dias[1] = "28";
  $cantidad_dias[2] = "31";
  $cantidad_dias[3] = "30";
  $cantidad_dias[4] = "31";
  $cantidad_dias[5] = "30";
  $cantidad_dias[6] = "31";
  $cantidad_dias[7] = "31";
  $cantidad_dias[8] = "30";
  $cantidad_dias[9] = "31";
  $cantidad_dias[10] = "30";
  $cantidad_dias[11] = "31";
?>

<select name ="mes" onchange="document.form.submit()">
<option value = "0">Seleccione el mes: </option>
    <?php
	//******************************************************************************
	//serÌa bueno que al hacer post, dejemos seleccionado en el combo mes el valor seleccionado por 
	//el usuario, para ello, haremos un condicional, y usaremos el atributo selected de un option
    for ($z = 0; $z < count($meses); $z++) {
        if (isset($_POST["mes"]) and $meses[$z]==$_POST["mes"]){
		?>
        <option value = "<?php echo $meses[$z] ?>" title = "<?php echo $meses[$z] ?>" selected="selected">
        <?php echo $meses[$z];
        ?>
        </option>
        <?php
    }else{
	?>
	<option value = "<?php echo $meses[$z] ?>" title = "<?php echo $meses[$z] ?>">
        <?php echo $meses[$z];
        ?>
        </option>
	<?php
	}
	
	}
    ?>
</select>
<hr />
<?php
//**********************************************************************
	//Pregunto q dÌa es el que seleccionÛ el usuario, este dato viene del combo mes
    	if ( isset($_POST["mes"]) ){//pregunto si es que se recibiÛ o existe $_POST["mes"] usando la funciÛn isset()
			//echo "el mes es".$_POST["mes"]."<br>";
			//ahora hago un switch para preguntar quÈ mes es e indicarle el Ìndice del arrego cantidad_dias que debo mostrar
			switch ($_POST["mes"]){
				case 'Enero':
					$indice=0;
				break;
				case 'Febrero':
					$indice=1;
				break;
				case 'Marzo':
					$indice=2;
				break;
				case 'Abril':
					$indice=3;
				break;
				case 'Mayo':
					$indice=4;
				break;
				case 'Junio':
					$indice=5;
				break;
				case 'Julio':
					$indice=6;
				break;
				case 'Agosto':
					$indice=7;
				break;
				case 'Septiembre':
					$indice=8;
				break;
				case 'Octubre':
					$indice=9;
				break;
				case 'Noviembre':
					$indice=10;
				break;
				case 'Diciembre':
					$indice=11;
				break;
			}
			//echo "$indice<br>";
		}
?>

<select name = "dia">

<option value = "0">Seleccione el dia: </option>
    <?php
	//ahora ya tengo el valor por el cual debo hacer el for. este valor corresponde al Ìndice que acabo de generar en el switch relacionado con el mes seleccionado por el usuario
	for ($z = 1; $z <= $cantidad_dias[$indice]; $z++) {
	
        ?>
        <option value = "<?php echo $z ?>" title = "<?php echo $z ?>">
        <?php echo $z ?>
        </option>
        <?php
    }
    ?>
</select>
<hr />
<select name = "anio">
<option value = "0">Seleccione el Anio: </option>
    <?php
    for ($z = 1900; $z <=2029 ; $z++) {
        ?>
        <option value = "<?php echo $z ?>" title = "<?php echo $z ?>">
        <?php echo $z ?>
        </option>
        <?php
    }
    ?>
</select>
</form>
</body>
</html>