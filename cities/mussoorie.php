<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Travelling Guide - Mussoorie</title>
		<link rel="shortcut icon" type="image/png" href="../img/	favicon.png">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/city.css">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a href="#" class="navbar-brand">SDSLabs</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Home</a></li>
						<li><a href="#history">History</a></li>
						<li><a href="#map">Route</a></li>
						<li><a href="#">Experiences</a></li>
						<li><a href="#">Stay</a></li>
					</ul>
				</div>	
			</div>
		</nav>

			<header class="page-header my-header">
				<div class="container">
					<div class="my-heading text-center">
						<h1>Mussoorie Welcomes You<small><br>queen of hills</small></h1>
					</div>
				</div>
			</header>

			<div class="container" id="history">
				<h2>History</h2>
				<p>The Hill station of Mussoorie owes its credit to the British army officer named Captain Young. The beauty of the hill station impressed the military officer a lot and he finally made up his mind to reside at the place, in the year 1825. This is how the hill station of Mussoorie was founded. Colonel Everest chose to stay here and built a home in 1832. More and more British officers followed suit and by the year 1901, the population of the hill resort was 6,461. During summers, the population of Mussoorie swelled up to a total of 15,000 at that time.<br><br>During 1920s and 1930s, the Nehru family became the frequent visitors to Mussoorie. Nehru’s daughter Indira Gandhi also spent much of her time at Mussoorie. During their visit, the members of the Nehru family also visited the hill station of Dehradun, which was just closeby. The Tibetan Government in Exile was also established by Dalai Lama in Mussoorie first, after fleeing Chinese occupation of Tibet in April 1959. Today, around 5,000 Tibetans are residents of Mussoorie.</p>
			</div>
			<div class="container" id="map">
				<h2>How can you reach there</h2>
				<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCjSaTeGdV7zdN-NHKHWtRIffN0mlTtkdM   &origin=IIT+Roorkee &destination=Mussoorie" allowfullscreen>
				</iframe>
			</div>

			<div class="container" id="exp">
				<h2>IITR Junta Yelling their Experiences</h2>
				<form action="../php/connect.php" method="post">
					<table>
						<tr>
							<td><label for="name">Name :</label></td>
							<td><input type="text" name="name" id="name"></td>
						</tr>
						<tr>
							<td><label for="comment">Comment :</label></td>
							<td><textarea name="comment" id="comment" cols="30" rows="10"></textarea></td>
						</tr>		
					</table>
					<input type="submit" name="submit">
				</form>
				<?php 
				include "../php/connect.php";

				$sql_ouput = "SELECT * FROM swoc_comments";
				$queryO = $conn->query($sql_ouput);

				$queryO->setFetchMode(PDO::FETCH_ASSOC);
				while($r = $queryO->fetch()){
					echo "<div class='com'>",$r["Name"] ,":<br>",$r["Comments"],"</div>";
				}
				?>


			</div>







<!--javascript-->
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>
	</body>
</html>