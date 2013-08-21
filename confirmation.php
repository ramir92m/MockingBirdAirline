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
		
			<center>
				<?php
					session_start();
					
					
					$username = $_POST['user'];
					$password = $_POST['pass'];
					$db = "reserve";
					$dbuser;
					$dbpass;
					
				
					$connection = mysql_connect("localhost","root","") or die("Couldn't connect to the database!");
					mysql_select_db($db);
					
				
					$sql = "SELECT * FROM reg WHERE user='$username' AND pass='$password'"; 
					$query = mysql_query($sql);
					$num = mysql_num_rows($query);
					
					if($num != 0)
					{
						while($retrieve = mysql_fetch_assoc($query))
						{
						$dbuser = $retrieve['user'];
						$dbpass = $retrieve['pass'];
						$dbname = $retrieve['fullname'];
						}
					}
					else
					{
						echo "Invalid";
					}
					
					
					if($username == $dbuser && $password == $dbpass)
					{
						Header("Location: index.php");
						$_SESSION['name'] = $dbname;
					}
					else if($username == "admin" && $password == "admin")
					{
						header("Location: admin.php");
					}
					else
					{					
						echo "invalid";
					}
					
				?>
			</center>
		<center>
		
		</center>
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