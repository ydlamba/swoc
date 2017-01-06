<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Travelling Guide - Auli</title>
		<link rel="shortcut icon" type="image/png" href="../img/	favicon.png">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/city.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	</head>
	<body data-spy="scroll" data-target="#my-navbar">
<!-- Navbar starts -->
		<button class="up"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></button>
		<button class="change"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>
		<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../index.html" class="place">Home</a></li>
						<li><a href="#gen" class="place">Info</a></li>
						<li><a href="#history" class="place">History</a></li>
						<li><a href="#map" class="place">Route</a></li>
						<li><a href="#exp" class="place">Experiences</a></li>
					</ul>
				</div>	
			</div>
		</nav>
<!-- Navbar ends -->
<!-- header starts -->
			<header class="page-header my-header auli">
				<div class="container">
					<div class="my-heading text-center">
						<h1>Auli<small><br>ski destination</small></h1>
					</div>
				</div>
			</header>
<!-- header ends -->
			<div class="container" id="gen">
				<div class="page-header">
					<h2>General Information</h2>
				</div>
				<p>Auli in the Indian state of Uttarakhand is renowned for the fascinating ski resorts and stunning natural vistas. Bounded by the snowy peaks of the mighty Himalayas, this hilly terrain offers the enchanting sceneries of oak fringed slopes and coniferous forests. At an average height of 2800 meters, this might be the single spot where the visitors would get the unusual opportunity of a nice promenade.</p>
				<div class="row">
					<div class="col-lg-6 gen_box">
						<h4>When to visit</h4>Auli can be visited any time of the year. If you are going specifically for skiing, then January-March is the time to go - that's when there are skiing festivals and championships all across the town. September witnesses the Mata Mruti ka Mela, which is celebrated in nearby Badrinath.<h4>Accommodation</h4>Due to its elevation (3,000m) and relative remote location, only a handful of accommodations are available at Auli itself. A better option would be finding an accommodation at Joshimath where they are in abundance. At Joshimath(few km away) you’d be able to find a place to stay according to your budget.<h4>What to wear</h4>In summer, light woolens are advisable while heavy woolens are a necessity during winter.				
						<ul>
							<li><b>Altitude:</b> 3,049 m</li>
							<li><b>Temperature in Summer:</b> 10&#8451; - 20&#8451;</li>
							<li><b>Temperature in Winter:</b> -4&#8451; - 7&#8451;</li>	
							<li><b>Languages:</b> English and Hindi</li>
							<li><b>Best Time to Visit:</b> November to March</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<img src="../img/auli_right.jpg" width="550px" height="345px"><br><br>
						<img src="../img/auli_right2.jpg" width="550px" height="345px">
					</div>
				</div>
			</div>	
<!-- history starts -->
			<div class="container" id="history">
				<div class="page-header">
					<h2>History</h2>
				</div>
				<p>In the 8th century AD, the great Guru Adi Shankaracharya is said to have tread on these fields. The temple built by him at Joshimath still exists. For hundreds of years, the colorful semi-nomadic tribes of the Bhotiyas, of the Mongolian stock, traversed the trails at Auli, locally called Thatauli. Their longhaired yaks, laden with an assortment of goods, assisted them in conducting a flourishing trade with nearby Tibet. <br><br>Before Auli was developed as a ski resort, its slopes were the training ground for men of valor and courage-the ski-equipped men of the Indo-Tibetan Border Police Force. Among the awesome, legendary peaks ranged round Auli, the 23,490-feet-high Trishul (literal meaning, the strident of Lord Shiva) was the scene of a unique expedition in 1958. The mountaineers took four days to climb the peak and only 90 minutes to ski down to the base camp.</p>
			</div>
<!-- history starts -->
<!-- route starts -->
			<div class="container" id="map">
				<div class="page-header">
					<h2>How can you reach there</h2>
				</div>
				<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCjSaTeGdV7zdN-NHKHWtRIffN0mlTtkdM   &origin=IIT+Roorkee &destination=Auli" allowfullscreen>
				</iframe>
			</div>
<!-- route ends -->
<!-- experiences starts -->
			<div class="container" id="exp">
				<div class="page-header">
					<h2>IITR Junta Yelling their Experiences</h2>
					<?php 
						include "../php/connect.php";

						if($_SERVER["REQUEST_METHOD"] == "POST"){


						$name = htmlspecialchars($_POST["name"]);
						$exp = htmlspecialchars($_POST["exp"]);
						$city = htmlspecialchars($_POST["city"]);
						$rate = htmlspecialchars($_POST["rate"]);

						$sql_input = "INSERT INTO expData (Name,Experience,City,Rate) VALUES (?,?,?,?)";
						$queryI = $conn->prepare($sql_input);

						$queryI->execute(array($name,$exp,$city,$rate));
					
					}
					
					

					$sql_rate = "SELECT AVG(Rate) AS avg_rate , COUNT(*) AS total FROM expData WHERE City='Auli'";
					$query_rate = $conn->query($sql_rate);

					$query_rate->setFetchMode(PDO::FETCH_ASSOC);
					while($r1 = $query_rate->fetch()){
						echo "<div class='avgRate'>Rating : <span class='red'>",$r1["avg_rate"],"</span> ( ",$r1["total"]," Votes)</div>";
					}
				echo'	
				</div>
				
				<div class="row">

					<div class="col-lg-7 exp_box">

					' ;

					$sql_ouput = "SELECT * FROM expData WHERE City='Auli' ORDER BY ID DESC";
					$queryO = $conn->query($sql_ouput);

					$queryO->setFetchMode(PDO::FETCH_ASSOC);
					while($r = $queryO->fetch()){
						echo "<div class='userExp'><span class='user_name'>",$r["Name"] ,":</span><br><span class='rate'>Rating : ",$r["Rate"],"</span><br><hr><p class='user_text well'>",$r["Experience"],"</p></div>";
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
									<input type="text" value="Auli" name="city" id="city" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label for="exp" class="col-lg-2 control-label">Experience</label>
								<div class="col-lg-10">
									<textarea class="form-control" id="exp" name="exp" cols="20" rows="10" placeholder="What you want to say about this place?"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Rate</label>
								<div class="col-lg-10">
									<input type="radio" name="rate" value="1" id="one">&nbsp; 1 &nbsp;
									<input type="radio" name="rate" value="2" id="two">&nbsp; 2 &nbsp;
									<input type="radio" name="rate" value="3" id="three">&nbsp; 3 &nbsp;
									<input type="radio" name="rate" value="4" id="four">&nbsp; 4 &nbsp;				
									<input type="radio" name="rate" value="5" id="five">&nbsp; 5 &nbsp;
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button type="submit" class="btn btn-primary" id="form_submit">Submit</button>
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