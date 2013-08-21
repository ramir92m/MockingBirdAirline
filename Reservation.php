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
		<div id="welheader">
				
				<?php
				session_start();
				if(isset($_SESSION['name']))
				{
					
					echo "Welcome ".$_SESSION['name']." <a href='logout.php' >Logout</a>";	
				}
				else
				{
					header("Location: login.php");
				}
				
				?>
			</div>
		<br />
		
			<center>
			<form action="confirmreserve.php" method="POST">
				<br/>
				<table>
					<tr>
						<td>Flight Class:</td>
						<td>
							<select name="fclass">
								<option value="Commercial">Commercial</option>
								<option value="Class A">Class A</option>
								<option value="Private">Private</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Flight Arrival:</td>
						<td>
							<select name="time">
								<option value="1:00">1:00</option>
								<option value="2:00">2:00</option>
								<option value="3:00">3:00</option>
								<option value="4:00">4:00</option>
								<option value="5:00">5:00</option>
								<option value="6:00">6:00</option>
								<option value="7:00">7:00</option>
								<option value="8:00">8:00</option>
								<option value="9:00">9:00</option>
								<option value="10:00">10:00</option>
							</select>
							<select name="meridian">
								<option value="PM">PM</option>
								<option value="AM">AM</option>
								
							</select>
						</td>
					</tr>
					<tr>
						<td>Date of Schedule:</td>
						<td>
							<input type="text" name="fschedule" />
						
						</td>
					</tr>
					<tr>
						<td>Destination: </td>
						<td>
							<input type="text" name="destination" />
							
						
						</td>
					<tr>
						<td>Contact: </td>
						<td>
							<input type="text" name="contact" />
							
						
						</td>
					</tr>
					</tr>
					
				</table>
				
				
				<br/><br/>
				
				
				<input type="submit" value="Reserve" />
				
				
			</form>
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