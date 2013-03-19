<?php 
	session_start();
	if(isset($_GET['username'])){
		$username=$_GET['username'];
	}
	if(isset($_GET['upstat'])){
		$upstat=$_GET['upstat'];
	}
	if(isset($_GET['dormname'])){
		$dormname=$_GET['dormname'];
	}
	else{
		echo "AW";
	}
	echo $username ;
	echo $upstat ;
	echo $dormname ;
?>


<?php
	include ("connect.php"); //database connection
	$accepted='accepted';
	$rejected='rejected';
	$canceled='canceled';
	
	if($upstat==1){//accepted
		//$q= "Update reservation set status = '{$accepted}' where username='{$username}'";
		$handle = mysql_query("Update reservation set status = 'accepted' where username='{$username}'");
	}/*else if($upstat==0){
		//$qu="Update reservation set status = '{$rejected}' where username='{$username}'";
		$handl = mysql_query("Update reservation set status = 'rejected' where username='{$username}'");
	}*/
	else{
		//$qu="Update reservation set status = '{$canceled}' where name='{$name}'";
		//$qu="Delete from reservation where username='{$username}'";
		$handl = mysql_query("Delete from reservation where username='{$username}'");
		
		//$que="Select * from dormitory where dormname='{$dormname}'";
		$h=mysql_query("Select * from dormitory where dormname='{$dormname}'");
		$arr=mysql_fetch_array($h);

		$avslot=$arr['availableslots'];
		$avslot+=1;
		$q="Update dormitory set availableslots ={$avslot} where dormname='{$dormname}'";
		mysql_query($q,$conn);
	}
	$_SESSION['log']="Reservation Status now updated :)";
	header("Location:student.php");
?>
	