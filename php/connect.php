<?php 
require_once 'dbconfig.php';

try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
} catch(PDOException $e) {
	die("There is a problem.". $e->getMessage());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$name = htmlspecialchars($_POST["name"]);
	$comment = htmlspecialchars($_POST["comment"]);

	$sql_input = "INSERT INTO swoc_comments (Name,Comments) VALUES (?,?)";
	$queryI = $conn->prepare($sql_input);

	$queryI->execute(array($name,$comment));

	echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
}

?>