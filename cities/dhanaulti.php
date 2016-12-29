<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Travelling Guide - Dhanaulti</title>
		<link rel="shortcut icon" type="image/png" href="../img/	favicon.png">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/city.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	</head>
<!-- Navbar starts -->
	<body data-spy="scroll" data-target="#my-navbar">
		<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a href="https://sdslabs.co" target="_blank" class="navbar-brand">SDSLabs</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../index.html">Home</a></li>
						<li><a href="#gen">Info</a></li>
						<li><a href="#history">History</a></li>
						<li><a href="#map">Route</a></li>
						<li><a href="#exp">Experiences</a></li>
					</ul>
				</div>	
			</div>
		</nav>
<!-- Navbar ends -->
<!-- header starts -->
			<header class="page-header my-header dhan">
				<div class="container">
					<div class="my-heading text-center">
						<h1>Welcome to Dhanaulti<small><br>an icy heaven</small></h1>
					</div>
				</div>
			</header>
<!-- header ends -->
			<div class="container" id="gen">
				<div class="page-header">
					<h2>General Information</h2>
				</div>
				<p>The tinsel town of Dhanaulti is emerging as a popular winter destination because of its tranquil vistas and its proximity to Delhi and various other cities of Uttarakhand. This magical hill station is perched at an elevation of 2286 metres above sea level and offers panoramic views of the lofty Himalayas.</p>
				<div class="row">
					<div class="col-lg-6 gen_box">
						<h4>When to visit</h4>
						Dhanaulti is at its best in summers, from March to June and again in winters, from November to February, making these months the <b>best times to travel.</b>
						<h4>Accommodation</h4>
						Though there are not too many accommodation options in Dhanaulti, there is no dearth of accommodation places either. Apart from the hotels, the hill resort also boasts of a Tourist Bungalow and a Forest Rest.
						<h4>What to wear</h4>
						In summer, light woolens or cotton clothes are advisable while heavy woolens are a necessity during winter.
						Dhanaulti serves as a base for trekking, hiking and camping and so the summer and the winter months are very suitable for these activities.  
						<ul>
							<li><b>Altitude:</b> 2286 m</li>
							<li><b>Temperature in Summer:</b> 7.5&#8451; - 31&#8451;</li>
							<li><b>Temperature in Winter:</b> -1&#8451; - 7&#8451;</li>	
							<li><b>Languages:</b> English and Hindi</li>
							<li><b>Best Time to Visit:</b> March - June or November - February</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<img src="../img/dhan_right.jpg" width="550px" height="345px"><br><br>
						<img src="../img/dhan_right2.jpg" width="550px" height="345px">
					</div>
				</div>
			</div>	
<!-- history starts -->
			<div class="container-fluid" id="history">
				<div class="page-header">
					<h2>History</h2>
				</div>
				<p>Before the independence of India in 1947, Dhanaulti was a part of the Tehri Garhwal region which was a princely state at that time. It was reigned by King Sudarshan Shah, who founded the dynasty and made Tehri his capital. This dynasty ruled the region from the year 1815 to 1949. People from this region actively participated in the freedom struggle. They were part of the Quit India Movement. The people also revolted against the rule of the king of Tehri Riyasat. After the revolt, they were successful in getting independence from the Maharaja and later, the district was merged with the state of Uttar Pradesh in India. After the bifurcation of Uttar Pradesh in the year 2000, the district of Tehri Garhwal became a part of the new state of Uttarakhand. Through the years, Dhanaulti has become a popular tourist destination in the country, especially in North India. As it is located close to the tourist destinations of Dehradun, Mussoorie and Chamba, the place is slowly gaining popularity.</p>
			</div>
<!-- history starts -->
<!-- route starts -->
			<div class="container-fluid" id="map">
				<div class="page-header">
					<h2>How can you reach there</h2>
				</div>
				<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCjSaTeGdV7zdN-NHKHWtRIffN0mlTtkdM   &origin=IIT+Roorkee &destination=Dhanaulti" allowfullscreen>
				</iframe>
			</div>
<!-- route ends -->
<!-- experiences starts -->
			<div class="container" id="exp">
				<div class="page-header">
					<h2>IITR Junta Yelling their Experiences</h2>
				</div>

				<div class="row">

					<div class="col-lg-7 exp_box">

					<?php 
					include "../php/connect.php";

					if($_SERVER["REQUEST_METHOD"] == "POST"){


						$name = htmlspecialchars($_POST["name"]);
						$exp = htmlspecialchars($_POST["exp"]);
						$city = htmlspecialchars($_POST["city"]);

						$sql_input = "INSERT INTO expData (Name,Experience,City) VALUES (?,?,?)";
						$queryI = $conn->prepare($sql_input);

						$queryI->execute(array($name,$exp,$city));

					}

					$sql_ouput = "SELECT * FROM expData WHERE City='Dhanaulti' ORDER BY ID DESC ";
					$queryO = $conn->query($sql_ouput);

					$queryO->setFetchMode(PDO::FETCH_ASSOC);
					while($r = $queryO->fetch()){
						echo "<div class='userExp'><span class='user_name'>",$r["Name"] ,":</span><br><hr><p class='user_text well'>",$r["Experience"],"</p></div>";
					}
					?>
					</div>
					<div class="col-lg-5 form_box">
						<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" class="form-horizontal">
							<div class="form-group">
								<label for="name" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
								</div>
							</div>
							<div class="form-group hide">
								<label for="city" class="col-lg-2 control-label">City</label>
								<div class="col-lg-10">
									<input type="text" value="Dhanaulti" name="city" id="city" class="form-control">
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
<!-- experiences ends-->
<!-- footer starts -->
			<footer>
				<div class="container-fluid footer">
					<a href="https://www.facebook.com/SDSLabs" target="_blank"><img src="../img/fb.png"></a>
					<p>Copyright &copy; SDSLabs 2016</p>					
				</div>
			</footer>
<!-- footer ends -->
<!--javascript-->
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>
	</body>
</html>