<?php
	session_start();
    if(isset($_GET['dormname'])){
		$dormname=$_GET['dormname'];
	}
	else header ("Location: index.php")
?>

<?php require_once "defines.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset = "utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "../css/general.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/index.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/DormInfo.css" />
		<script type="text/javascript" src = "../javascript/index.js"></script>
		<script type="text/javascript" src = "../javascript/di.js"></script>
		
	</head>
	<body onload = "place(0, 'none')">
	<?php
		$mens="Mens";
		$womens="Womens";
		$new="New";
		$ih="Ih";
		$ati="Ati";
		$acci="Acci";
		$mareha="Mareha";
		$foreha="Foreha";
		$newforeha="Newforeha";
		$vetmed="Vetmed";
	?>
		<section class = "Bottom">
				<a href = 'DormInfo.php?dormname=<?php echo $mens?>' method='post'><img src = "../../images/dorms/mens-dorm.jpg" class = "img" id = "i1" alt = "men's dorm"/></a>
				<a href = 'DormInfo.php?dormname=<?php echo $womens?>' method='post'><img src = "../../images/dorms/womens-dorm.jpg" class = "img" id = "i2" /></a>
				<a href = 'DormInfo.php?dormname=<?php echo $ih?>' method='post'><img src = "../../images/dorms/ih.jpg" class = "img" id = "i3" /></a>
				<a href = 'DormInfo.php?dormname=<?php echo $acci?>' method='post'><img src = "../../images/dorms/acci-upper.jpg" class = "img" id = "i4" /></a>
				<a href = 'DormInfo.php?dormname=<?php echo $foreha?>' method='post'><img src = "../../images/dorms/foreha.jpg" class = "img" id = "i5" /></a>
				<a href = 'DormInfo.php?dormname=<?php echo $mareha?>' method='post'><img src = "../../images/dorms/mareha.jpg" class = "img" id = "i6" /></a>
				<a href = 'DormInfo.php?dormname=<?php echo $new?>' method='post'><img src = "../../images/dorms/new-dorm-2.jpg" class = "img" id = "i7" /></a>
				<a href = 'DormInfo.php?dormname=<?php echo $newforeha?>' method='post'><img src = "../../images/dorms/new-foreha-sign.jpg" class = "img" id = "i8" /></a>
				<a href = 'DormInfo.php?dormname=<?php echo $vetmed?>' method='post'><img src = "../../images/dorms/vetmed-dorm-sign.jpg" class = "img" id = "i9" /></a>
				<img src = "../../images/web_img/left.png" id = "b1" class = "Button" onclick = "moveLeft()" />
				<img src = "../../images/web_img/right.png" class = "Button" id = "b2" onclick = "moveRight()" />
		</section>
		
		<section class = "navigation DormNav">
			<ul id="menu">
				<li><a href="index.php">Back to Home</a></li>
			</ul>
		</section>

<section class = "announce3 ment">
			<?php
				include("connect.php");
				$query="Select * from dormitory where dormname='{$dormname}'";
				$handle=mysql_query($query,$conn);
				$arr=mysql_fetch_array($handle);
				/*$dormpick="Mens";*/
				echo "<h1> {$arr['dormname']} </h1>";
				echo "<p> {$arr['dormdescription']} </p>";
				echo "Location: {$arr['dormlocation']}<br/>";
				echo "No. of units: {$arr['dormunits']}<br/>";
				echo "Type of Dorm: {$arr['dormtype']}<br/>";
				echo "Monthly fee: PhP {$arr['dormmonthlyfee']}<br/>";
				echo "Total Reservation Fee: PhP {$arr['dormresfee']}<br/>";
				echo "Available slots: {$arr['availableslots']}<br/>";
			?>	
			<?php
				if($arr['availableslots']!=0 && isset($_SESSION['uname'])){
					include('connect.php');
					$query="Select id from user where username=\"".$_SESSION['uname']."\"";
					$handle=mysql_query($query,$conn);
					$id=mysql_fetch_array($handle);
					$query="Select id from reservation where id=\"{$id['id']}\"";
					$handle=mysql_query($query,$conn);
					$qq="Select status from reservation where id=\"{$id['id']}\"";
					$hh=mysql_query($qq,$conn);
					$aa=mysql_fetch_array($hh);
					if(mysql_fetch_array($handle)==NULL){
						echo "<input class='button' type='submit' value='Reserve' onclick ='signUp2()'/></form>";
					}else echo 'A reservation has already been made!! >w<';
				}else if($arr['availableslots']==0){
					echo "<p>No More Available Slot for You! :(</p>";
				}else{
					echo "<p>Sign-in to reserve :)</p>";
				}
				mysql_close($conn);
			?>
</section>

<section class = "bg di" id= "bg">
</section>
	<section class = "signUp2" id = "up2">
					Reservation Form
					<br />
					<?php echo "<form id = 'student_sign_up' name = 'student_sign_up' method = 'post' action = 'process_reserve.php?dormname=$dormname'>";?>
						<input type = "text" class = "signup" name = "name" required="required" placeholder = "Fullname"/>
						<input type = "text" class = "signup" name = "id" required="required" pattern="[0-9]{4}-[0-9]{5}" placeholder = "Student Number"/>
						<input type = "text" class = "signup" name = "course" required="required" placeholder = "Course"/>
						<input type = "text" class = "signup" name = "contactnum" required="required" placeholder = "Contact Number"/>
						<input type = "email" class = "signup" name = "eadd" required="required" placeholder = "Email"/>
						<select name="sex" class = "signup">
							<option value="male">male</option>
							<option value="female">female</option>
						</select>
						<input type = "text" class = "signup" name = "college" required="required" placeholder = "College"/>
						<input type = "text" class = "signup" name = "address" required="required" placeholder = "Home Address"/>
						<input type = "text" class = "signup" name = "pgname" required="required" placeholder = "Parent/Guardian Name"/>
						<input type = "text" class = "signup" name = "pgcontactnum" required="required" placeholder = "P/G Contact Number"/>
						<input type = "text" class = "signup" name = "uname" required="required" placeholder = "Username"/>
						<input type = "submit" value = "SUBMIT" class = "submit2"/>
					<?php echo '</form>'; ?>
					<input type = "submit" value = "CANCEL" class = "submit2" onclick="mover()"/>
				
			</section>
	</body>
</html>