<?php

$meses[0] = "january";
$meses[1] = "febrery";
$meses[2] = "march";
$meses[3] = "april";
$meses[4] = "may";
$meses[5] = "june";
$meses[6] = "july";
$meses[7] = "august";
$meses[8] = "september";
$meses[9] = "october";
$meses[10] = "november";
$meses[11] = "december";

// echo "mese = " . count($meses);
// echo "mese es igual a " . sizeof($meses);

// mostrar valores del arreglo
for ($i=0; $i<count($meses); $i++){
	
	echo $meses[$i];
	echo "<br>";

	}
	
// buscar un valor dentro de un arreglo con condicional
for ($i=0; $i<count($meses); $i++){
	
	if ($meses[$i]=="january"){
	echo "it is the first day of the month";
		}
	}

?>
