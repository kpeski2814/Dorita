<?php 

error_reporting(0);

$server="localhost";
$usuario="root";
$password="";
$basedatos="nortwin";

$cn=mysql_connect($server,$usuario,$password);

if (!$cn) 
	die("Error al conectarse al servidor");


$db=mysql_select_db($basedatos);
if (!$db) 
	die("Error al conectarse a la base de datos");



?>