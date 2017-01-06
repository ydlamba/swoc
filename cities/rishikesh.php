<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Travelling Guide - Rishikesh</title>
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
			<header class="page-header my-header rishi">
				<div class="container">
					<div class="my-heading text-center">
						<h1>Enjoy Rishikesh<small><br>World Capital of Yoga</small></h1>
					</div>
				</div>
			</header>
<!-- header ends -->
			<div class="container" id="gen">
				<div class="page-header">
					<h2>General Information</h2>
				</div>
				<p>The holy city of Rishikesh, in the base of the Himalayas, holds deep cultural and spiritual significance for local Hindus. Sacred rivers and mountains set the scene for yoga and reflective hikes, and rafting here is an absolute must. The Beatles got in touch with their Eastern spiritual side here, writing several songs during a 1968 stint at a local ashram.</p>
				<div class="row">
					<div class="col-lg-6 gen_box">
						<h4>When to visit</h4>Rishikesh is a picturesque destination affording enchanting views throughout the year.The climate here is continental type but its location in the foot hills gives it a pleasant weather throughout the year. One can visit Rishikesh <strong>ANY</strong> time of the year.<i>However right time to visit Rishikesh would be February, March,August-October.</i><h4>Accommodation</h4>There are lots of hotel to stay according to ones need.<h4>What to wear</h4>In summer, light woolens are advisable while woolens are a necessity during winter. The summer season extends from April to June. The winter season is from September to December.
						<ul>
							<li><b>Area:</b> 11.5 sq km</li>
							<li><b>Altitude:</b> 372 m</li>
							<li><b>Temperature in Summer:</b> 20&#8451; - 35&#8451;</li>
							<li><b>Temperature in Winter:</b> 8&#8451; - 20&#8451;</li>	
							<li><b>Languages:</b> English and Hindi</li>
							<li><b>Best Time to Visit:</b> February, March,August-October</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<img src="../img/rishi_right.jpg" width="550px" height="345px"><br><br>
						<img src="../img/rishi_right2.jpg" width="550px" height="345px">
					</div>
				</div>
			</div>	
<!-- history starts -->
			<div class="container-fluid" id="history">
				<div class="container">
					<div class="page-header">
						<h2>History</h2>
					</div>
					<p class="historyText">Rishikesh has been a part of the legendary 'Kedarkhand' (the present day Garhwal).Legends state that Lord Rama did penance here for killing Ravana, the asura king of Lanka; and Lakshmana, his younger brother, crossed the river Ganges, at a point, where the present 'Lakshman Jhula'bridge stands today, using a jute rope bridge.The 'Kedarkhand' of Skanda Purana, also mentions the existence of Indrakund at this very point. The jute-rope bridge was replaced by iron-rope suspension bridge in 1889. After it was washed away in the 1924 floods, it was replaced by the present stronger bridge. Another similar suspension bridge Ram Jhula was built in 1986 at nearby Sivananda Nagar.<br><br>The sacred river Ganges flows through Rishikesh. Here the river leaves the Shivalik Hills in the Himalayas and flows into the plains of northern India. Several temples, ancient and new, are along the banks of the Ganges in Rishikesh. Shatrughna Mandir, Bharat Mandir, Lakshman Mandir are the ancient temples established by Adi Shankaracharya. Shatrughna Temple is near Ram Jhula and Lakshman Mandir is near Lakshman Jhula.</p>
				</div>
			</div>
<!-- history starts -->
<!-- route starts -->
			<div class="container" id="map">
				<div class="page-header">
					<h2>How can you reach there</h2>
				</div>
				<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCjSaTeGdV7zdN-NHKHWtRIffN0mlTtkdM   &origin=IIT+Roorkee &destination=Rishikesh" allowfullscreen>
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
					
					

					$sql_rate = "SELECT AVG(Rate) AS avg_rate , COUNT(*) AS total FROM expData WHERE City='Rishikesh'";
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

					$sql_ouput = "SELECT * FROM expData WHERE City='Rishikesh' ORDER BY ID DESC";
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
									<input type="text" value="Rishikesh" name="city" id="city" class="form-control">
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