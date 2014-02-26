<select>
<!--combo box with for
-->
<?php

for ($i=1; $i<10; $i++)
{
?>
	<option value="<?php echo '$i'; ?>" >
	
    <?php echo "$i";?>
    </option>
<?php } ?>
</select>


<!--combo box with while
--><select>

<?php
$i =2;

while ($i<10)
 {
?>
	<option value="<?php echo '$i'; ?>" >
	
    <?php  echo "$i"; ?>
    <?php $i++; ?>
    </option>
<?php
 }
?>
</select>



<!--<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>-->