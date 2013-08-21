<html>
	<head>
		<title>Mockingbird Airlines | Flying unto dreams</title>
		
		<link rel="stylesheet" type="text/css" href="main.css" />
	</head>
	
	<body>
		<div id="header">
			<div id="logo"></div>
			<div id="login"></div>
			<ul class="meow">
				<li><a href="index.php">Home</a></li>
				<li><a href="About.html">About</a></li>
				<li><a href="Reservation.php">Reservation</a></li>
				<li><a href="login.php">Login</a></li>
				
			</ul>
		</div>
		
		<div id="nav">
			
		</div>
		
		<div id="content">
		<br />
			<div id="welheader">
				
				<?php
				session_start();
				if(isset($_SESSION['name']))
				{
					
					echo "Welcome ".$_SESSION['name']." <a href='logout.php' >Logout</a>";	
				}
				
				?>
			</div>
			<div>
				
				<div id="contentone">
				<h2></h2>
				</div>
				
					 
				
				
				<div id="contenttwo"></div>
				<div id="contentthree"></div>
			</div>
			<div>
				
				<div id="contentonesub">
					<center>
						<p>Experience a world class airplane that has a great ambient surroundings inside it</p>
					</center>
				</div>
				
					 
				
				
				<div id="contenttwosub">
				
					<center>
						<p>Everything from commercial to first-class store can be seen through here</p>
					</center>
				</div>
				<div id="contentthreesub">
				
					<center>
						<p>Our employee are friendly and reliable, whenever some problems come up, feel free to ask them </p>
					</center>
				</div>
			</div>
		
		</div>
		
		<div id="footer">
		
		</div>
		<div id="credits">
			<center>
			<br />
			MockingBird Airlines 2012 - All Rights Serve
			</center>
		</div>
	</body>
	
	
</html>