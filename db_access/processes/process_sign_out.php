<?php
	session_start();
	require_once '../defines.php';
	session_destroy();
	header ("Location: ../../web_control/php/index.php");
?>