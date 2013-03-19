<?php
	$dormname=$_GET['dormname'];
?>

<?php include('header.html');?>
<section class = "Mid">
	<section class="sign_up">
		<form action = 'process_reserve.php?dormname=<?php echo $dormname?>' method='post'>
			<label>Name</label><br/>
			<input class = "text-input" type = "text" name = "name" value = "" required = "required"/>
			<br/><br/>

			<label>Student Number</label><br/>
			<input class = "text-input" type = "text" name = "studnum" pattern="[0-9]{4}-[0-9]{5}"/>
			<br/><br/>
			
			<label>Course</label><br/>
			<input class = "text-input" type = "text" name = "course"/>
			<br/><br/>
			
			<label>College</label><br/>
			<input class = "text-input" type = "text" name = "college"/>
			<br/><br/>
			
			<label>Home Address</label><br/>
			<input class = "text-input" type = "text" name = "address" required = "required"/>
			<br/><br/>
			
			<label>Email Address</label><br/>
			<input class = "text-input" type = "text" name = "eadd" required = "required"/>
			<br/><br/>
			
			<label>Sex: </label>
			<select name="sex" class = "text-input">
				<option value="male">male</option>
				<option value="female">female</option>
			</select>
			<br /><br />
			
			<label>Contact Number</label><br/>
			<input class = "text-input" type = "text" name = "contactnum" required = "required"/>
			<br/><br/>
			
			<label>Parent's or Guardian's Name</label><br/>
			<input class = "text-input" type = "text" name = "pgname" value = "" required = "required"/>
			<br/><br/>
			
			<label>Contact Number</label><br/>
			<input class = "text-input" type = "text" name = "pgcontactnum" required = "required"/>
			<br/><br/>
			
			
			<input class = "button" type = "submit" name = "reserve" value = "Submit"/>
		</form>
	</section>
</section>
<?php include('footer.html')?>