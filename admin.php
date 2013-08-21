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
			<?
				
				$db = "reserve";
				$connection = mysql_connect("localhost","root","") or die("Couldn't connect to the database!");
				mysql_select_db($db);
				
				$sql = "SELECT * FROM custreserve";
				$query = mysql_query($sql);
				
			?>
		
		
		
			<center>
			
			<table style="border:1px solid;">
			
			
			
				<tr>
					<td>ID No</td>
					<td>Full Name</td>
					<td>Flight Class </td>
					<td>Time of Arrival</td>
					<td>Flight Schedule</td>
					<td>Destination</td>
					<td>Contact</td>
					<td>Status</td>
				</tr>
				<?php
						while($retrieve = mysql_fetch_assoc($query))
						{
					?>
				<tr>
					<td><?php echo $retrieve['idnum']; ?></td>
					<td><?php echo $retrieve['fullname']; ?></td>
					<td><?php echo $retrieve['fclass']; ?></td>
					<td><?php echo $retrieve['arrival']; ?></td>
					<td><?php echo $retrieve['fschedule']; ?></td>
					<td><?php echo $retrieve['destination']; ?></td> 
					<td><?php echo $retrieve['contact']; ?></td> 
					<td><?php echo $retrieve['status']; ?></td> 
				</tr>
				<?php } ?>
			</table>
				<br />
				<form action="editadmin.php" method="POST">
					Edit ID No: <input type="text" name="search" /> &nbsp;<input type="submit" value="Search" />
					
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