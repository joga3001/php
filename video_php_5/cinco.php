<?php

// combobox

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
?>
<select name="combo">
	<option value="0">seleccione el mes</option>


<?php for ($z=0; $z<count($meses); $z++){ ?>
	
	<option value="<?php echo $meses[$z]; ?>" title="<?php echo $meses[$z]; ?>" >
	<?php echo $meses[$z]; ?>
    </option>

	<?php }?>
</select>
