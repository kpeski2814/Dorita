<?php 

require "config.php";

 $id =$_POST['id'];


$datos=array();

$sql="SELECT * FROM `ubdistrito` WHERE idProv=$id;";

$resultado= mysql_query($sql);

while ($fs = mysql_fetch_object($resultado)) {
	$datos[]=$fs;
}
?>





<select name="distrito" id="distrito">
	
	<?php 
    for ($i=0; $i < count($datos); $i++) { 
   ?>
	<option value="<?= $datos[$i]->idDist ?>"><?= $datos[$i]->distrito ?></option>
	
	 <?php 
   }
  ?>

	
</select>










 