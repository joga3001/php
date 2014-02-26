<?php

// Capturar variable
$nom=$_POST["nom"];
$pais=$_POST["pais"];
$sexo=$_POST["sexo"];

// en caso sea method SWITCH

switch ($pais)
{
	case'peru':
		$saludo="Ud. es de nacionalidad peruana";
	break;
	
	case'espana' :	
		$saludo="Ud. es de nacionalidad española";
	break;
	
	case'suecia' :	
		$saludo="Ud. es de nacionalidad sueca";
	break;
	
	case'chile' :
		$saludo="Ud. es de nacionalidad chilena";
	break;
	
}



//preguntar si es masculino o femenino method IF ELSE + SWITCH $saludo

if($sexo == "f"){

	echo "Hola $nom, bienvenida, eres mujer y $saludo";	
	
}else{
	
	echo "Hola $nom, bienvenido, eres hombre y $saludo";
}

/* METHOD IF
if($sexo == "m"){
	echo "Hola $nom, bienvenido";
	
}

*/
/*
mayor que >
menor que <
menor o igual que <=
mayor o igual que >=
igual que ==

*/
?>