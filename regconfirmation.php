<?php
	
	$fullname = $_POST['fullname'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$db = "reserve";
	$connection = mysql_connect("localhost","root","") or die("Couldn't connect to the database!");
	mysql_select_db($db);
	
	$sql = "INSERT INTO reg(fullname,user,pass) VALUES('$fullname','$user','$pass')"; 
	mysql_query($sql);
	header("Location: login.php");
	
?>