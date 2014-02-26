<?php

// llenar un arreglo dinamicamente
for ($i=0; $i<2011; $i++){
	
	$array[$i]=$i;

	}
	
for ($j=1950; $j<sizeof($array); $j++)
{
	echo $array[$j];
	echo "<br>";
	
	}

?>
