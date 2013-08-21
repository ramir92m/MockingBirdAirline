<?php
	session_start();
	
	$fullname = $_SESSION['name']; 
	$fclass = $_POST['fclass'];
	$time = $_POST['time'];
	$meridian= $_POST['meridian'];
	
	$arrival = $time." ".$meridian;
	
	$fschedule = $_POST['fschedule'];
	$destination = $_POST['destination'];
	$contact = $_POST['contact'];

	
	$db = "reserve";
	$connection = mysql_connect("localhost","root","") or die("Couldn't connect to the database!");
	mysql_select_db($db);
	
	$sql = "INSERT INTO custreserve(fullname,fclass,arrival,fschedule,destination,contact) VALUES('$fullname','$fclass','$arrival','$fschedule','$destination','$contact')"; 
	mysql_query($sql);
	header("Location: Reservation.php");
?>