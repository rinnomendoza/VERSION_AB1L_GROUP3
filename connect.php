<?php
	$conn = mysql_connect ('localhost', 'root', '') or die ('Could not establish a connection.');
	mysql_select_db ('dorm', $conn) or die ('Error in selecting database.');
?>