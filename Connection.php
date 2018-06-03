<?php
$servername="localhost";
$username = "CasterlyRock";
$password = "Crock";
$db = "CasterlyRock";
$dsn= "mysql:host=$servername;dbname=$db";

try{
	$conn = new PDO($dsn, $username, $password);
 
 	if($conn){
	//	echo "Connected To The <strong>$db</strong> Database Successfully!";
        }
}catch (PDOException $e){
	echo $e->getMessage();
}

?>