<?php
	$dormname=$_GET['dormname'];
?>
<?php
	include("defines.php");
	session_start();
?>
<?php
	$name = $_POST['name'];
	$id = $_POST['id'];
	$course = $_POST['course'];
	$college = $_POST['college'];
	$address = $_POST['address'];
	$eadd = $_POST['eadd'];
	$contactnum = $_POST['contactnum'];
	$sex = $_POST['sex'];
	$pgname= $_POST['pgname'];
	$pgnum= $_POST['pgcontactnum'];
	$uname= $_SESSION['uname'];
	include("connect.php"); //database connection
	$status="pending";
	
	$que="Select * from dormitory where dormname='{$dormname}'";
	$h=mysql_query($que,$conn);
	$arr=mysql_fetch_array($h);
	$coed='coed';
	if(($arr['dormtype'] != $sex && $arr['dormtype'] != $coed)){
		$_SESSION['log']="KEEP OUT! You are not allowed Here!";
	}else{	
		$avslot=$arr['availableslots'];
		$avslot--;
		$q="Update dormitory set availableslots ={$avslot} where dormname='{$dormname}'";
		mysql_query($q,$conn);
		
		$query = "Select * from reservation";
		$handle=mysql_query($query,$conn);
		$row=mysql_fetch_array($handle);
		
		$quer="Insert into reservation(resdorm,name,id,course,college,contactnumber,address,email,sex,pgname,pgnum,status,username) values('{$dormname}','{$name}','{$id}','{$course}','{$college}','{$contactnum}','{$address}','{$eadd}','{$sex}','{$pgname}','{$pgnum}','{$status}','{$uname}')";
		$result=mysql_query($quer,$conn);
		//echo gettype($result);
		//if(!$result) echo "fail";
		$_SESSION['log']="Reservation Form Sent";
		?>
		
		<?php }
			header("Location:student.php");
		?>