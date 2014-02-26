<?php
	//ciclo while solo permite pasar una condicion

$i =1;

while ($i<10000)
{
//$i++ empezaria en el numero 2 ya q la variable se inicializo en 1 + $i(1) = 2
	echo $i;
	echo "<br>";
	$i++; // para incrementar el valor de 1 en 1 y empezar en 1 debe estar esto al final de echo si se pone sobre echo empezaria en 2
}



?>