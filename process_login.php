<?php
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	require_once ("connect.php"); //database connection
	
	$query = "Select * from student where stuname = '{$uname}' AND stpword = '{$pword}'";
	$handle = mysql_query($query,$conn);
	$row=mysql_fetch_array($handle);
	if($row == NULL){
		echo "Login failed";
		header("Location:login.php?error=0");
	}else{
		echo "success";
		header("Location:login.php?error=1");
	}
?>