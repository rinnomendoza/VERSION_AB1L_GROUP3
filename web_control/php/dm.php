<?php require_once "defines.php";?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset = "utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "../css/general.css" />
        <link rel = "stylesheet" type = "text/css" href = "../css/index.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/student.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/dm.css" />
        <link rel = "stylesheet" type = "text/css" href = "../css/admin.css" />
		<script type="text/javascript" src = "../javascript/index.js"></script>
		<script type="text/javascript" src = "../javascript/student.js"></script>
	</head>
	<?php
		session_start();
		if (!isset($_SESSION['uname']))header ("Location: index.php");
		else if(isset($_SESSION['log']))
		{
			$username = $_SESSION['uname'];
			$flag = $_SESSION['flag'];
			echo '<body onload = "log(\''.$_SESSION['log'].'\')">';
			$_SESSION = "";

			$_SESSION['uname'] = $username;
			$_SESSION['flag'] = $flag;
			
		}
		else echo '<body onload = "place(0, \'none\')">';
	?>
		<?php
			if (isset ($_SESSION['uname']) && $_SESSION['flag'])
			{
				if($_SESSION['flag'] == 1) header ("Location: admin.php");
				else if($_SESSION['flag'] == 3) header ("Location: student.php");
				else
				{
					$user = $_SESSION['uname'];
					echo "<h3 style=\"text-align:right;float:left;\"> Hi, {$user}!";
					echo "| <a href=\"../../db_access/processes/process_sign_out.php\"> Logout </a></h3>";
				}
			}
		?>
		<section class = "navigation DMNav">
			<ul id="menu">
				<li><a href="#" onclick = "slidePost()">Home</a></li>
				<li><a href="#" onclick = "slideAnnounce()">Posts</a></li>
				<li><a href="#" onclick = "view()">Profile</a></li>
			</ul>
		</section>
		
		<section class = "post_form3" id = "pf">
			<?php echo '<form id = "post_form" name = "post_form" method = "post" action = "'.ObjectPath.'db_access/processes/process_post.php">';?>
				<textarea class = "post_area" name = "post_area" id = "post_area"></textarea>
				<input type = "submit" class = "submit" value = "POST"/>
			</form>
		</section>
		
		<section class = "wall3" id = "pa">
			<h2>ANNOUNCEMENTS:</h2>
			<section class = "holder">
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
		
		<section class = "announce4" id = "ann">
			<h2>Narinig Ko Sa DORM(overDORM)</h2>
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
		
		<section class = "announce5" id = "prof">
			<h2>Profile</h2>
			<section class = "holder2">
			<?php
				include("connect.php");
				$username = $_SESSION['uname'];
				$role = 'Dorm Manager';
					$query1 = "Select * from user where role = 0 AND username = '{$username}'";
					$handle1 = mysql_query($query1,$conn);
					$arr1 = mysql_fetch_array($handle1);
					$dormname=$arr1['dormhandle'];
						if($arr1!=NULL){
							echo "<h1>{$arr1['dormhandle']} Dormitory</h1><br/>";
							echo "Employee Number: {$arr1['id']}<br/>";
							echo "Contact Number: {$arr1['contactnumber']}<br/>";
							echo "Email Address: {$arr1['email']}<br/>";
							$q = "Select name,course,contactnumber,address,pgname,pgnum,status,username from reservation where resdorm='{$dormname}'";
							//$q = "Select * from reservation where resdorm='{$dormname}'";
							$hand = mysql_query($q,$conn);
							//$arr2 = mysql_fetch_array($hand);
							$i=0;
							///*
							
								echo "<br/>";
								echo "<table>";
								echo "<tr>";
								echo "<td>Name</td>";
								echo "<td>Course</td>";
								echo "<td>Contact Number</td>";
								echo "<td>Address</td>";
								echo "<td>Parent/Guardian</td>";
								echo "<td>P/G Contact Number</td>";
								echo "<td>Status</td>";
								while($arrrow=mysql_fetch_array($hand)){
									echo '<tr>';
									echo '<td>';
									echo $arrrow[0]; 
									echo '</td>';
									echo '<td>';
									echo $arrrow[1]; 
									echo '</td>';
									echo '<td>';
									echo $arrrow[2]; 
									echo '</td>';
									echo '<td>';
									echo $arrrow[3]; 
									echo '</td>';
									echo '<td>';
									echo $arrrow[4]; 
									echo '</td>';
									echo '<td>';
									echo $arrrow[5]; 
									echo '</td>';
									echo '<td>';
									echo $arrrow[6]; 
									echo '</td>';
									if($arrrow[6]=='pending'){
										$username=$arrrow[7];
										echo "<td><a class='statup' href=process_updatestatus.php?username=$username&upstat=1&dormname=$dormname>ACCEPT</a></td>";
										echo "<td><a class='statup' href=process_updatestatus.php?username=$username&upstat=0&dormname=$dormname>REJECT</a></td>";
									}
									
									echo '</tr>';
									$i+=1;
								}
								echo "</table>";
							if($i==0){
								echo "No reservation has been made! :)<br/>";
							}
						}
				?>
			</section>
		</section>					
		
	</body>
</html>