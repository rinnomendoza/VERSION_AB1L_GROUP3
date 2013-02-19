<?php
	$role = $_POST['role'];
	$name = $_POST['name'];
	$studnum = $_POST['studnum'];
	$course = $_POST['course'];
	$college = $_POST['college'];
	$empnum = $_POST['empnum'];
	$eadd = $_POST['eadd'];
	$contactnum = $_POST['contactnum'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	require_once ("connect.php"); //database connection
	
	if($role == 'Student'){
		$query = "Select * from student";
		$handle=mysql_query($query,$conn);
		$row=mysql_fetch_array($handle);
		//echo "asdf";
		if($row==NULL){
			$query="Insert into student values ('{$studnum}','{$name}','{$course}','{$college}','{$contactnum}','{$eadd}','{$username}','{$password}')";
			mysql_query($query,$conn);
			echo "Hello";
		}
		else{
			echo "Hi";
			$query="Select * from student where username='{$username}'";
			$handle=mysql_query($query,$conn);
			$row=mysql_fetch_array($handle);
			if($row==NULL){//no duplicate username
				$query="Insert into student values ('{$studnum}','{$name}','{$course}','{$college}','{$contactnum}','{$eadd}','{$username}','{$password}')";
				mysql_query($query,$conn);
				header("Location:index.php");
			}else{
			header("Location:signup.php?error=1");
			}
		}
	}else if($role == 'Dorm Manager'){
		$query1 = "Select * from dormmanager";
		$handle1=mysql_query($query1,$conn);
		$row1=mysql_fetch_array($handle1);
		//echo "asdf";
		if($row1==NULL){
			$query1="Insert into dormmanager values ('{$empnum}','{$name}','{$contactnum}','{$eadd}','{$username}','{$password}')";
			mysql_query($query1,$conn);
			echo "Hello";
		}
		else{
			echo "Hi";
			$query1="Select * from dormmanager where username='{$username}'";
			$handle1=mysql_query($query1,$conn);
			$row1=mysql_fetch_array($handle1);
			if($row1==NULL){//no duplicate username
				$query1="Insert into dormmanager values ('{$empnum}','{$name}','{$contactnum}','{$eadd}','{$username}','{$password}')";
				mysql_query($query1,$conn);
				header("Location:index.php");
			}else{
			header("Location:signup.php?error=1");
			}
		}
	}
?>