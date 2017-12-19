<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
	include 'connect.php';

	$name = htmlspecialchars($_POST["name"]);
	$email = htmlspecialchars($_POST["email"]);
	$message = htmlspecialchars($_POST["msg"]);

	$sql="INSERT INTO suggestions (Name,Email,Message) VALUES(?,?,?)";
	$query = $conn->prepare($sql);

	$query->execute(array($name,$email,$message));
}

echo "<script>
	  alert('Thank you. We will reply you soon!');
	  window.location.href='../index.html';
	  </script>";

?>
