<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

	include 'connect.php';

	$name = htmlspecialchars($_POST["name"]);
	$exp = htmlspecialchars($_POST["exp"]);
	$city = htmlspecialchars($_POST["city"]);

	$sql_input = "INSERT INTO expData (Name,Experience,City) VALUES (?,?,?)";
	$queryI = $conn->prepare($sql_input);

	$queryI->execute(array($name,$exp,$city));

	$lowcity = strtolower($city);


?>