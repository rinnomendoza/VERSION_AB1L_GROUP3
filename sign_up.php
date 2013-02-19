<?php
	if(isset($_GET['error'])){
		echo "signup failed";
	}
?>
<?php require_once ('header.php');?>
<section class = "Mid">
	<section class="sign_up">
		<form action = "process_signup.php" method = "post">
			<input type = "radio" name = "role" value = "Student" required = "required"> Student
			<input type = "radio" name = "role" value = "Dorm Manager" required = "required"> Dorm Manager <br/><br/><br/>
			
			<label>Name</label><br/>
			<input class = "text-input" type = "text" name = "name" value = "" required = "required">
			<br/><br/>

			<label>*Student Number</label><br/>
			<input class = "text-input" type = "text" name = "studnum" pattern="[0-9]{4}-[0-9]{5}">
				<p>(*For Students Only)</p>
			<br/><br/>
			
			<label>*Course</label><br/>
			<input class = "text-input" type = "text" name = "course">
				<p>(*For Students Only)</p>
			<br/><br/>
			
			<label>*College</label><br/>
			<input class = "text-input" type = "text" name = "college">
				<p>(*For Students Only)</p>
			<br/><br/>
			
			<label>*Employee Number</label><br/>
			<input class = "text-input" type = "text" name = "empnum">
				<p>(*For Dorm Manager Only)</p>
			<br/><br/>
			
			<label>Email Address</label><br/>
			<input class = "text-input" type = "text" name = "eadd" required = "required">
			<br/><br/>
			
			<label>Contact Number</label><br/>
			<input class = "text-input" type = "text" name = "contactnum" required = "required">
			<br/><br/>
			
			<label>Username</label><br/>
			<input class = "text-input" type = "text" name = "username" required = "required">
			<br/><br/>
			
			<label>Password</label><br/>
			<input class = "text-input" type = "password" name = "password" required = "required">
			<br/><br/>
			
			<input class = "button" type = "submit" name = "signup" value = "Submit">
		</form>
	</section>
</section>
<?php require_once('footer.php')?>