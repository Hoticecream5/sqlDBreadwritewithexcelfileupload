<?php
$servername='localhost';
$username="u362373351_jeremiahl";
$password="1trustTh3e*";

try
{
	$con=new PDO("mysql:host=$servername;dbname=u362373351_127_0_1_1",$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//echo 'connected';
}
catch(PDOException $e)
{
	echo '<br>'.$e->getMessage();
}
	
?>








