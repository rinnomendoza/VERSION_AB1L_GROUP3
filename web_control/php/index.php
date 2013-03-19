<?php require_once "defines.php";
	session_start();
		if(isset($_SESSION['uname']))
		{
			if($_SESSION['flag'] == 1)header ("Location: ../../web_control/php/admin.php");
			else if($_SESSION['flag'] == 2)header ("Location: ../../web_control/php/dorm_manager.php");
			else if($_SESSION['flag'] == 3)header ("Location: ../../web_control/php/student.php");
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset = "utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "../css/general.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/index.css" />
		<script type="text/javascript" src = "../javascript/index.js"></script>
	</head>
	<?php 
		if(isset($_SESSION['log']))
		{
			echo '<body onload = "place(1, \''.$_SESSION['log'].'\')">';
			if(isset($_SESSION['uname']))
			{
				if($_SESSION['flag'] == 1)header ("Location: ../../web_control/php/admin.php");
				else if($_SESSION['flag'] == 2)header ("Location: ../../web_control/php/dorm_manager.php");
				else if($_SESSION['flag'] == 3)header ("Location: ../../web_control/php/student.php");
			}
			session_destroy();
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
		
        <div id="viewarea"><h2>ABOUT UPLB</h2>
			<br/><br />
                    The University of the Philippines Los Baños (UPLB), a coeducational, publicly funded academic, research and extension institution, is one of the six constituent universities of the University of the Philippines System. It started out as a College of Agriculture in 1909; and became a full-fledged university in 1972. It has emerged as a leading academic institution in Southeast Asia. UPLB is dedicated to advancing knowledge and educating students in science, technology, agriculture, forestry, veterinary medicine and other areas of scholarship that will best serve the Filipinos and the humanity in the 21st century. Its outstanding achievements in the basic and applied sciences are testaments to the great strides it has made for the past ninety years. The alumni continue to be the prime movers in academe, in government and in business.			
			<br/><br />
            
			</div>
            <div id="viewarea2"><h3>ABOUT UHO</h3>
            <br/><br />
                                The UPLB Housing Office is the unit of the University of the Philippines Los Baños that manages the staff and private housing units, as well as regulates the allied agencies’ housing units on University land. Currently, there are 240 staff housing units and 39 private housing units. 

                During its 1113th meeting held on 23 October 1997, the Board of Regents approved the creation of the Staff Housing Office (SHO) as a unit under the supervision of the Vice Chancellor for Community Affairs. It is headed by a Chief who is appointed from among the faculty and other staff of the University on an additional assignment basis, in accordance with the pertinent University policies, rules and procedures. 

                During its 1232nd meeting held on May 30, 2008 at U.P. Visayas Cebu College, Lahug, Cebu City, the UP Board of Regents approved the creation and renaming of the Staff Housing Office to UPLB Housing Office. 

                On May 5, 2010, Chancellor Luis Rey I. Velasco issued Administrative Order No. 065 S. 2010 to transfer the administrative control and supervision of the Student Housing Division from the Office of Student Affairs to the UPLB Housing Office.
            <br/><br />
            </div>
        <section class = "bg" id= "bg">
        </section>
        
		<section class = "partial up" id = "up">
			<section class = "student" id = "block1">
				<a href = "#" class = "choice" onclick = "reSize(1)">Student</a>
				<br /><br /><br />
				<?php echo '<form id = "student_sign_up" name = "student_sign_up" method = "post" action = "'.ObjectPath.'db_access/processes/process_sign_up.php">';?>
					<input type = "text" class = "hidden" value = "student" id = "role" name = "role"/>
					<input type = "text" class = "signup" name = "fname" id = "fname" required="required" placeholder = "Full Name"/>
					<input type = "text" class = "signup" name = "coll" id = "coll" required="required" placeholder = "College"/>
					<input type = "text" class = "signup" name = "uname" id = "uname" required="required" placeholder = "Username"/>
					<input type = "text" class = "signup" name = "id" id = "id" required="required" placeholder = "Student Number"/>
					<input type = "text" class = "signup" name = "cn" id = "cn" required="required" placeholder = "Contact Number"/>
					<input type = "password" class = "signup" name = "pword1" id = "pword1" required="required" placeholder = "Password"/>
					<input type = "text" class = "signup" name = "course" id = "course" required="required" placeholder = "Course"/>
					<input type = "email" class = "signup" name = "eadd" id = "eadd" required="required" placeholder = "E-add"/>
					<input type = "password" class = "signup" name = "pword2" id = "pword2" required="required" placeholder = "Re-Enter Password"/>
					<input type = "submit" value = "SIGN UP" class = "submit2" for = "student_sign_up"/>
				</form>
			</section>
		</section>
        
          
		
		<section class = "navigation IndexNav">
			<ul id="menu">
				<li><a href="#" onclick = "cl()">Home</a></li>
				<li><a href="#">Posts</a>
					<ul>
						<li><a href="#">Announcements</a></li>
						<li><a href="#" onclick = "map()">Map</a></li>
						<li><a href="#">Gallery</a></li>
					</ul>
				</li>
				<li><a href="#">Access</a>
					<ul>
						<li><a href="#" onclick = "signIn()">Sign In</a></li>
						<li><a href="#" onclick = "signUp()">Sign Up</a></li>
					</ul>
				</li>
				</li>
			</ul>
		</section>
		
		<section class = "partial" id = "in">
			<section class = "signin">
				<?php echo '<form id = "sign_in_form" name = "sign_in_form" method = "post" action = "'.ObjectPath.'db_access/processes/process_sign_in.php">';?>
					<input type = "text" class = "input" name = "uname" id = "uname" required="required" placeholder = "username"/>
					<input type = "password" class = "input" name = "pword" id = "pword" required="required" placeholder = "password"/>
					<input for = "sign_ in_form" type = "submit" value = "SIGN IN" class = "submit" />
				<?php echo '</form>';?>
			</section>
		</section>
		
		<section class = "full" id = "MAP">
			<section class = "slider">
			</section>
			<section class = "list">
				<ul id = "mapList">
					<li><a href = "#">acci</a></li>
					<li><a href = "#">ati</a></li>
					<li><a href = "#">foreha</a></li>
					<li><a href = "#">international house</a></li>
					<li><a href = "#">mareha</a></li>
					<li><a href = "#">men's dorm</a></li>
					<li><a href = "#">new dorm</a></li>
					<li><a href = "#">new foreha</a></li>
					<li><a href = "#">vetmed</a></li>
					<li><a href = "#">women's dorm</a></li>
				</ul>
			</section>
			<img src = "../../images/web_img/closeButton.png" class = "close" onclick = "cl()"/>
		</section>
	</body>
</html>