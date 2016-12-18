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

	<body data-spy="scroll" data-target="#my-navbar">
		<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
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
						<li><a href="#exp">Experiences</a></li>
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
				<div class="page-header">
					<h2>History</h2>
				</div>
				<p>The Hill station of Mussoorie owes its credit to the British army officer named Captain Young. The beauty of the hill station impressed the military officer a lot and he finally made up his mind to reside at the place, in the year 1825. This is how the hill station of Mussoorie was founded. Colonel Everest chose to stay here and built a home in 1832. More and more British officers followed suit and by the year 1901, the population of the hill resort was 6,461. During summers, the population of Mussoorie swelled up to a total of 15,000 at that time.<br><br>During 1920s and 1930s, the Nehru family became the frequent visitors to Mussoorie. Nehru’s daughter Indira Gandhi also spent much of her time at Mussoorie. During their visit, the members of the Nehru family also visited the hill station of Dehradun, which was just closeby. The Tibetan Government in Exile was also established by Dalai Lama in Mussoorie first, after fleeing Chinese occupation of Tibet in April 1959. Today, around 5,000 Tibetans are residents of Mussoorie.</p>
			</div>
			<div class="container" id="map">
				<div class="page-header">
					<h2>How can you reach there</h2>
				</div>
				<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCjSaTeGdV7zdN-NHKHWtRIffN0mlTtkdM   &origin=IIT+Roorkee &destination=Mussoorie" allowfullscreen>
				</iframe>
			</div>

			<div class="container" id="exp">
				<div class="page-header">
					<h2>IITR Junta Yelling their Experiences</h2>
				</div>

				<div class="row">

					<div class="col-lg-7">

					<?php 
					include "../php/connect.php";

					$sql_ouput = "SELECT * FROM swoc_comments";
					$queryO = $conn->query($sql_ouput);

					$queryO->setFetchMode(PDO::FETCH_ASSOC);
					while($r = $queryO->fetch()){
						echo "<div class='userExp'>",$r["Name"] ,":<br>",$r["Comments"],"</div>";
					}
					?>
					</div>
					<div class="col-lg-5">
						<form action="../php/connect.php" method="post" class="form-horizontal">
							<div class="form-group">
								<label for="name" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
								</div>
							</div>

							<div class="form-group">
								<label for="exp" class="col-lg-2 control-label">Experience</label>
								<div class="col-lg-10">
									<textarea class="form-control" id="exp" name="exp" cols="20" rows="10" placeholder="What you want to say about this place?"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>							
						</form>
					</div>
				</div>
			</div>







<!--javascript-->
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>
	</body>
</html>