<?php

	$id = $_POST['idme'];
	$db = "reserve";
	$connection = mysql_connect("localhost","root","") or die("Couldn't connect to the database!");
	mysql_select_db($db);
	
	$sql ="DELETE FROM custreserve WHERE idnum = '$id' " ;
	mysql_query($sql);
?>