<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Travelling Guide - Nainital</title>
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
			<header class="page-header my-header naini">
				<div class="container">
					<div class="my-heading text-center">
						<h1>First Time? Nainital<small><br>queen of lakes</small></h1>
					</div>
				</div>
			</header>
<!-- header ends -->
			<div class="container" id="gen">
				<div class="page-header">
					<h2>General Information</h2>
				</div>
				<p>One of the most popular and exquisite hill stations <strong>Nainital</strong> is located in the Kumaon region in the state of Uttarakhand. It is a distinct and famous tourist destination of India.  The town not only lures the domestic travelers and tourists but also a number of foreign tourists.  It shines as a glittering jewel in the Himalayan Mountains and is surrounded with lakes and nature's bounty.</p>
				<div class="row">
					<div class="col-lg-6 gen_box">
						<h4>When to visit</h4>No time is a bad time to arrive in Nainital. The weather at this strikingly expressive hill station remains pleasant throughout the year. The greenery in  Nainital can be seen at its blooming best between September and November. <i>The ideal time to make a tour to Nainital is either between April and June or between September and November.</i><h4>Accommodation</h4>Nainital has both mid range and budget accommodation but it is advisable to travel during off season when you can get hefty discounts. While most of the expensive hotels are situated around Mallital on the northern edge of the lake, budget rooms are available around Tallital, towards the southern side.<h4>What to wear</h4>In summer, light woolens are advisable while heavy woolens are a necessity during winter. The summer season extends from April to June. The winter season is from September to December.
						<ul>
							<li><b>Area:</b> 11.73 sq km</li>
							<li><b>Altitude:</b> 2,084 m</li>
							<li><b>Temperature in Summer:</b> 10.6&#8451; - 26.7&#8451;</li>
							<li><b>Temperature in Winter:</b> 1.1&#8451; - 7.2&#8451;</li>	
							<li><b>Languages:</b> English , Hindi and Kumaoni</li>
							<li><b>Best Time to Visit:</b> March to June and September to October</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<img src="../img/naini_right.jpg" width="550px" height="345px"><br><br>
						<img src="../img/naini_right2.jpg" width="550px" height="345px">
					</div>
				</div>
			</div>	
<!-- history starts -->
			<div class="container-fluid" id="history">
				<div class="container">
					<div class="page-header">
						<h2>History</h2>
					</div>
					<p class="historyText">Nainital is referred to in the ‘Manas Khand’ of the ‘Skanda Purana’ as the Tri-Rishi-Sarovar,the lake of the three sages ,Atri,Pulastya and Pulaha who were reputed to have arrived here on a penitential piligrimage, and, finding no water to quench their thirst dug a hole and siphoned water into it from Mansarovar the sacred lake in Tibet. <br><br>The Second important mythological reference to Nainital is as one of 64 ‘Shakti Peeths’.These centres were created wherever parts of charred body of Sati fell ,when Lord Shiva was carrying around her corpse in grief .It is said that the left eye (Nain) of Sati fell here and this gave rise to patron deity of town Nainital . It is said that the lake is formed in the emerald eye shape . Naina Devi temple is located at the northern end of the lake . Thus name of Nainital derivated from Naina and the tal (Lake).</p>
				</div>
			</div>
<!-- history starts -->
<!-- route starts -->
			<div class="container" id="map">
				<div class="page-header">
					<h2>How can you reach there</h2>
				</div>
				<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCjSaTeGdV7zdN-NHKHWtRIffN0mlTtkdM   &origin=IIT+Roorkee &destination=Nainital" allowfullscreen>
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
					
					

					$sql_rate = "SELECT AVG(Rate) AS avg_rate , COUNT(*) AS total FROM expData WHERE City='Nainital'";
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

					$sql_ouput = "SELECT * FROM expData WHERE City='Nainital' ORDER BY ID DESC";
					$queryO = $conn->query($sql_ouput);

					$queryO->setFetchMode(PDO::FETCH_ASSOC);
					while($r = $queryO->fetch()){
						echo "<div class='userExp'><span class='user_name'>",$r["Name"] ,":</span><br><span class='rate'>Rating : ",$r["Rate"],"</span><br><hr><p class='user_text well'>",$r["Experience"],"</p></div>";
					}
					?>					</div>
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
									<input type="text" value="Nainital" name="city" id="city" class="form-control">
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