<?php 

include 'dbconfig.php';

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
} catch(PDOException $e) {
	die("There is a problem.". $e->getMessage());
}

?>