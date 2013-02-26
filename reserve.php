<?php
	$dorm=$_GET['dorm'];
?>

<?php
	$name = $_POST['name'];
	$studnum = $_POST['studnum'];
	$course = $_POST['course'];
	$college = $_POST['college'];
	$address = $_POST['address'];
	$eadd = $_POST['eadd'];
	$contactnum = $_POST['contactnum'];
	$sex = $_POST['sex'];
	$pgname= $_POST['pgname'];
	$pgnum= $_POST['pgcontactnum'];

	require_once("connect.php"); //database connection
	$status="pending";

	$que="Select * from dormitory where dormname='{$dorm}'";
	$h=mysql_query($que,$conn);
	$arr=mysql_fetch_array($h);
	if($arr['dormtype']==$sex || $arr['dormtype']=='coed'){
		$avslot=$arr['availableslots'];
		$avslot--;
		$q="Update dormitory set availableslots ={$avslot} where dormname='{$dorm}'";
		mysql_query($q,$conn);
		
		$query = "Select * from reservation";
		$handle=mysql_query($query,$conn);
		$row=mysql_fetch_array($handle);
		
		$quer="Insert into reservation(resdorm,name,stdnum,course,college,contnum,address,eadd,sex,pgname,pgnum,status) values('{$dorm}','{$name}','{$studnum}','{$course}','{$college}','{$contactnum}','{$address}','{$eadd}','{$sex}','{$pgname}','{$pgnum}','{$status}')";
		$result=mysql_query($quer,$conn);
		//echo gettype($result);
		if(!$result) echo "fail";
	}else{
		echo "<p>You are not allowed on this Dormitory! KEEP OUT! </p>";
	}
	
	//header("Location:DormInfo.php?dorm=".$dorm);
?>
<a href='DormInfo.php?dorm=<?php echo $dorm?>' method='post'>Go Back</a>