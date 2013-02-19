<?php
    $dorm=$_GET['dorm'];
?>

<?php require_once ('header.php');
?>

<section class = "Mid">
			<?php
				require_once("connect.php");
				$query="Select * from dormitory where dormname='{$dorm}'";
				$handle=mysql_query($query,$conn);
				$arr=mysql_fetch_array($handle);
				/*$dormpick="Mens";*/
				echo "<h1> {$arr['dormname']} </h1><br/>";
				echo "<p> {$arr['dormdescription']} </p><br/>";
				echo "Location: {$arr['dormlocation']}<br/>";
				echo "No. of units: {$arr['dormunits']}<br/>";
				echo "Type of Dorm: {$arr['dormtype']}<br/>";
				echo "Available slots: {$arr['availableslots']}";
				?>
			<!--<form action='reserve.php?dorm=<?php echo $dormpick?>' method='post'>
			<?php
				
				 //echo "<input class='button' type='submit' value='Reserve' /></form>";
				mysql_close($conn);
				?>
</section>
<?php require_once('footer.php')?>
	</body>
</html>