<?php require_once "defines.php";?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset = "utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "../css/general.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/student.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/index.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/admin.css" />
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
			echo '<body onload = "log(\''.$_SESSION['log'].'\')">';
			$_SESSION = "";

			$_SESSION['uname'] = $uname;
			$_SESSION['flag'] = $flag;
		}
		else echo '<body>';
	?>
		<?php
					if (isset ($_SESSION['uname']) && $_SESSION['flag'])
					{
						if($_SESSION['flag'] == 2) header ("Location: dm.php");
						else if($_SESSION['flag'] == 3) header ("Location: student.php");
						else
						{
							echo '<section class = "post_name">';
							$user = $_SESSION['uname'];
							echo "<h3 style=\"text-align:right;float:left;\"> Hi, {$user}!";
							echo "| <a href=\"../../db_access/processes/process_sign_out.php\"> Logout </a></h3>";
							echo '</section>';
					}
					}
					else
					{
						header ("Location: index.php");
					}
				?>
		<section class = "post_form2" id = "pf">
			<?php echo '<form id = "post_form" name = "post_form" method = "post" action = "'.ObjectPath.'db_access/processes/process_post.php">';?>
				<textarea class = "post_area" name = "post_area" id = "post_area"></textarea>
				<input type = "submit" class = "submit" value = "POST"/>
			</form>
		</section>
		
		<section class = "wall2" id = "pa">
			<h2><center>ANNOUNCEMENTS:</center></h2>
			<section class = "holder">
				<section class = "frame">
					<?php
						include 'connect.php';
						$result = mysql_query("select username, postdescription, id from posts where role = 0");
						mysql_close($conn);
						
						$i=0;
						while($row = mysql_fetch_array($result))
						{
							echo "<h3>".$row[0] . ": ".$row[1]."</h3>";
							echo "<a href = \"../../db_access/processes/process_delete_post.php?user=".$row[0]."&post=".$row[1]."&id=".$row[2]."\">DELETE</a>";
							$i+=1;
						}
					?>
				</section>
			</section>
		</section>
		
		<section class = "announce4" id = "ann">
			<h2>Freedom Wall:</h2>
			<section class = "holder4">
				<section class = "frame">
					<?php
						include 'connect.php';
						$result = mysql_query("select username, postdescription, id from posts where role = 1");
						mysql_close($conn);
						
						$i=0;
						while($row = mysql_fetch_array($result))
						{
							echo "<h3>".$row[0] . ": ".$row[1]."</h3>";
							echo "<a href = \"../../db_access/processes/process_delete_post.php?user=".$row[0]."&post=".$row[1]."&id=".$row[2]."\">DELETE</a>";
							$i+=1;
						}
					?>
				</section>
			</section>
		</section>
		
		<section class = "signUp2" id = "up2">
			<?php echo '<form id = "add_admin" name = "add_admin" method = "post" action = "process_add_admin.php">';?>
					<input type = "text" class = "input" name = "uname" id = "uname" required="required" placeholder = "username"/>
					<input type = "email" class = "input" name = "email" id = "email" required="required" placeholder = "email"/>
					<input type = "password" class = "input" name = "pword" id = "pword" pattern=".{6,}" required="required" placeholder = "pass (min of 6)"/>
					<input type = "password" class = "input" name = "pword2" id = "pword2" pattern=".{6,}" required="required" placeholder = "re-enter pass"/>
					<input for = "sign_ in_form" type = "submit" value = "SIGN IN" class = "submit" />
				<?php echo '</form>';?>
		</section>
		
		<section class = "navigation AdminNav">
			<ul id="menu">
				<li><a href="#" onclick="slidePost2()">Home</a></li>
				<li><a href="#" onclick="slideAnnounce2()">Posts</a></li>
				<li><a href="#" onclick="slideNew()">New Admin</a></li>
			</ul>
		</section>
	</body>
</html>