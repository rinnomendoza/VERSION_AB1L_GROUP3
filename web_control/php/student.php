<?php include "defines.php";?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset = "utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "../css/general.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/student.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/index.css" />
		<script type="text/javascript" src = "../javascript/index.js"></script>
		<script type="text/javascript" src = "../javascript/student.js"></script>
	</head>
	<?php
		session_start();
		if (!isset($_SESSION['uname']))header ("Location: index.php");
		else if(isset($_SESSION['log']))
		{
			$uname = $_SESSION['uname'];
			$flag = $_SESSION['flag'];
			echo '<body onload = "place(1, \''.$_SESSION['log'].'\')">';
			$_SESSION = "";

			$_SESSION['uname'] = $uname;
			$_SESSION['flag'] = $flag;
		}
		else echo '<body onload = "place(0, \'none\')">';
	?>
		
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
		<section class = "navigation StudentNav">
			<ul id="menu">
				<li><a href="#" onclick = "slidePost()">Home</a></li>
				<li><a href="#" onclick = "slideAnnounce()">Announcements</a></li>
				<li><a href="#" onclick = "view()">Profile</a></li>
			</ul>
		</section>
		
		<?php
			if (isset ($_SESSION['uname']) && $_SESSION['flag'])
			{
				if($_SESSION['flag'] == 1) header ("Location: admin.php");
				else if($_SESSION['flag'] == 2) header ("Location: dm.php");
				else
				{
					echo '<section class = "post_name">';
						$user = $_SESSION['uname'];
						echo "<h1 style=\"text-align:right;float:left;\"> Hi, {$user}!";
						echo "| <a href=\"../../db_access/processes/process_sign_out.php\"> Logout </a></h3>";
					echo '</section>';
				}
			}
		?>
		
		<section class = "post_form" id = "pf">
			<?php echo '<form id = "post_form" name = "post_form" method = "post" action = "'.ObjectPath.'db_access/processes/process_post.php">';?>
				<textarea class = "post_area" name = "post_area" id = "post_area"></textarea>
				<input type = "submit" class = "submit" value = "POST"/>
			</form>
		</section>
		
		<section class = "wall" id = "pa">
			<h1>Narinig ko sa DORM(overDORM)</h1>
			<section class = "holder">
				<section class = "frame">
					<?php
						include 'connect.php';
						$result = mysql_query("select username, postdescription from posts where role = 1");
						mysql_close($conn);
						
						$i=0;
						while($row = mysql_fetch_array($result))
						{
							echo "<h3>".$row[0] . ": ".$row[1]."</h3>";
							$i+=1;
						}
					?>
				</section>
			</section>
		</section>
		
		<section class = "announce" id = "ann">
			<h2>ANNOUNCEMENTS:</h2>
			<section class = "holder2">
				<section class = "frame">
					<?php
						include 'connect.php';
						$result = mysql_query("select username, postdescription from posts where role = 0");
						mysql_close($conn);
						
						$i=0;
						while($row = mysql_fetch_array($result))
						{
							echo "<h3>".$row[0] . ": ".$row[1]."</h3>";
							$i+=1;
						}
					?>
				</section>
			</section>
		</section>
		
		<section class = "announce2" id = "prof">
			<h2>Profile</h2>
			<section class = "holder3">
			<?php
				include("connect.php");
				$role = 'student';
				echo "Logged in as: $role<br/>";
					$handle = mysql_query("select * from user where role = 1 AND username = \"".$_SESSION['uname']."\"");
					$arr = mysql_fetch_array($handle);
					if($arr!=NULL){
						echo "<h1>{$arr['username']}</h1>";
						echo "Student Number: {$arr['id']}<br/>";
						echo "Course: {$arr['course']}<br/>";
						echo "College: {$arr['college']}<br/>";
						echo "Contact Number: {$arr['contactnumber']}<br/>";
						echo "Email Address: {$arr['email']}<br/>";
						$q = "Select * from reservation where id = \"{$arr['id']}\"";
						$hand = mysql_query($q,$conn);
						$arrarr = mysql_fetch_array($hand);
						$dormname=$arrarr['resdorm'];
						if($arrarr!=NULL){
							$username=$arr['username'];
							echo "<h1>Reservation:</h1>";
							echo "Reservation in {$arrarr['resdorm']} Dormitory<br />";
							echo "Status: {$arrarr['status']}<br />";
							if($arrarr['status']=='pending'){
								echo "<a class='statup' href=process_updatestatus.php?username=$username&upstat=2&dormname=$dormname>CANCEL</a>";
							}
						}
						else{
							echo "It is either No reservation has been made! or Your reservation request is Rejected :)<br/>";
						}
					}
			?>
			</section>
		</section>
		
	</body>	
</html>