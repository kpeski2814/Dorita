<?php 

require "config.php";

 $id =$_POST['id'];


$datos=array();

$sql="SELECT * FROM `ubprovincia` WHERE idDepa=$id;";

$resultado= mysql_query($sql);

while ($fs = mysql_fetch_object($resultado)) {
	$datos[]=$fs;
}
?>





<select name="provincia" id="provincia">
	
	<?php 
    for ($i=0; $i < count($datos); $i++) { 
   ?>
	<option value="<?= $datos[$i]->idProv ?>"><?= $datos[$i]->provincia ?></option>
	
	 <?php 
   }
  ?>

	
</select>










 