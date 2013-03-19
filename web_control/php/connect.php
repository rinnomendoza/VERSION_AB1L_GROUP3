<?php
	$conn = mysql_connect ('localhost', 'root', '') or die ('Could not establish a connection.');
	mysql_select_db ('cs128_dormdb', $conn) or die ('Error in selecting database.');
?>