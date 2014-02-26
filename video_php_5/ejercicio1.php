<?php

$meses[0] = "enero";
$meses[1] = "febrero";
$meses[2] = "marzo";
$meses[3] = "abril";
$meses[4] = "mayo";
$meses[5] = "junio";
$meses[6] = "julio";
$meses[7] = "agosto";
$meses[8] = "septiembre";
$meses[9] = "octubre";
$meses[10] = "noviembre";
$meses[11] = "diciembre";

// echo "mese = " . count($meses);

switch ($meses) {
    case 'enero':
	case 'marzo':
	case 'mayo':
	case 'julio':
	case 'agosto':
	case 'octubre':
	case 'diciembre':
        $days = 31;
    case 'abri':
	case 'junio':
	case 'septiembre':
	case 'noviembre':
        $days = 30;
case 'febrero':
        $days = 28;
}


// mostrar valores del arreglo
for ($i=0; $i<count($meses); $i++){
	
	echo $meses[$i];
	echo $days;
	echo "<br>";
	
}
	?>
