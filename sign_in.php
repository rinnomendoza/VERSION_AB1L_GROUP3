<?php
	if(isset($_GET['error']))
	{
		if($_GET['error'] == 0)
		{
			echo "signup failed";
		}
		
		else echo "signup succesful";
	}
?>
<?php require_once ('header.php');?>
<section class = "Mid">
	<section class="sign_in">
		<form method = "post" action="process_login.php">
			<br/>
			USERNAME <input type = "text" name = "uname" required = "required"> <br/>
			PASSWORD <input type ="password" name ="pword" required = "required"> <br/>
			<input type = "submit" value = "Login">
		</form>
	</section>
</section>
<?php require_once('footer.php')?>