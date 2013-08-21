<?php

	$fclass = $_POST['fclass'];
	
	$arrival = $_POST['arrival'];
	
	$fschedule = $_POST['fschedule'];
	$destination = $_POST['destination'];
	$contact = $_POST['contact'];
	$status = $_POST['status'];
	$id = $_POST['id'];
	$db = "reserve";
	$connection = mysql_connect("localhost","root","") or die("Couldn't connect to the database!");
	mysql_select_db($db);
	
	
	
	
	if($status == "Accept")
	{
		$sql ="UPDATE custreserve SET fclass='$fclass', status='$status', fschedule='$fschedule', destination='$destination', contact='$contact', arrival='$arrival' WHERE idnum = '$id' " ;
		mysql_query($sql);
		header("Location: admin.php");
	}
	else if($status == "Reject")
	{
		$sql ="UPDATE custreserve SET fclass='$fclass', status='$status', fschedule='$fschedule', destination='$destination', contact='$contact', arrival='$arrival' WHERE idnum = '$id' " ;
		mysql_query($sql);
		header("Location: admin.php");
	}
	else if($status == "Delete")
	{
		$sql ="DELETE FROM custreserve WHERE idnum = '$id'";
		mysql_query($sql);
		header("Location: admin.php");
	}

?>