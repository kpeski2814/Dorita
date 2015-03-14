<?php 

require "config.php";
$datos=array();

$sql="SELECT * FROM ubdepartamento";

$resultado= mysql_query($sql);

while ($fs = mysql_fetch_object($resultado)) {
	$datos[]=$fs;
}
?>









 