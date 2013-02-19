<?php
	$dorm=$_GET['dorm'];
	require_once("connect.php");
	echo $dorm;
	$query="Select * from dormitory where dormname='{$dorm}'";
	$handle=mysql_query($query,$conn);
	$arr=mysql_fetch_array($handle);
	$avslot=$arr['availableslots'];
	$avslot--;
	$q="Update dormitory set availableslots ={$avslot} where dormname='{$dorm}'";
	mysql_query($q,$conn);
	header("Location:ResForm.php");
?>