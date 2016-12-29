<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["msg"];
$to = "yashdev18@gmail.com";
$header = "From: $email ($name)\n";
$subject = "Suggestions From SWOC-The Travelling Guide";

$userheader = "From: yashdev18@gmail.com\n";
$usersubject = "Thank You";
$usermessage = "Thank You for your value Suggestions";

mail($to,$subject,$message,$header);
mail($user,$usersubject,$usermessage,$userheader);

echo "Thank you.We will be replying you soon.<a href='../index.html'>Click here</a>"
?>