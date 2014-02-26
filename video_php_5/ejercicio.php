<select name="combo">
	<option value="0">seleccione su ant</option><?php

// llenar un arreglo dinamicamente
for ($i=0; $i<2015; $i++){
	
	$array[$i]=$i;

	} ?>


<?php for ($j=1950; $j<sizeof($array); $j++)
{?>
	<option value="<?php echo $array[$j]; ?>" ><?php echo $array[$j]; ?></option>
	
	<?php }

?>
</select>


