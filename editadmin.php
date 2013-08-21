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
				
			
			</div>
		<br />
			
			<?php
				$id = $_POST['search'];
				$db = "reserve";
				$connection = mysql_connect("localhost","root","") or die("Couldn't connect to the database!");
				mysql_select_db($db);
				
				$sql = "SELECT * FROM custreserve WHERE idnum='$id'";
				$query = mysql_query($sql);
				
			?>
		
		
			<center>
			<form action="adminconfirm.php" method="POST">
				<br/>
				<table>
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				<?php 
				
				while($retrieve = mysql_fetch_assoc($query)) 
				{
				
				?>
					<tr>
						
						<td>Flight Class:</td>
						<td>
							<input type="text" name="fclass" value="<?php echo $retrieve['fclass']; ?>" />
						</td>
					</tr>
					<tr>
						<td>Flight Arrival:</td>
						<td>
							<input type="text" name="arrival" value="<?php echo $retrieve['arrival']; ?>" />
						</td>
					</tr>
					<tr>
						<td>Date of Schedule:</td>
						<td>
							<input type="text" name="fschedule" value="<?php echo $retrieve['fschedule']; ?>" />
						
						</td>
					</tr>
					<tr>
						<td>Destination: </td>
						<td>
							<input type="text" name="destination" value="<?php echo $retrieve['destination']; ?>" />
							
						
						</td>
					</tr>
					<tr>
						<td>Contact: </td>
						<td>
							<input type="text" name="contact" value="<?php echo $retrieve['contact']; ?>" />
							
						
						</td>
					</tr>
					<?php } ?>
				</table>
				
				
				<br/><br/>
				<form action="adminconf.php" method="post" >
				<table>
					<tr>
						<input type="submit" value="Submit" />
					</tr>
					<tr>
						<select name="status">
							<option value="Accept">Accept</option>
							<option value="Reject">Reject</option>
							<option value="Delete">Delete</option>
						</select>
						</form>
					</tr>
					<tr>
						
					</tr>
				</table>
				
				
				
				
				
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