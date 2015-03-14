<?php 

require "config.php";
$datos=array();

$sql="SELECT * FROM ubdepartamento";

$resultado= mysql_query($sql);

while ($fs = mysql_fetch_object($resultado)) {
	$datos[]=$fs;
}
?>





<select name="departamento" id="departamento">
	
	<?php 
    for ($i=0; $i < count($datos); $i++) { 
   ?>
	<option value="<?= $datos[$i]->idDepa ?>"><?= $datos[$i]->departamento ?></option>
	
	 <?php 
   }
  ?>

	
</select>










 