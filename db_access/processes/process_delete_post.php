<?php
	require_once('../objects/posts.php');
	if(!isset($_GET['user']))header ("Location: index.php");
	
	$user = $_GET['user'];
	$post = $_GET['post'];
	$id = $_GET['id'];
	
	$post = new post($user, $post);
	$post->delete($id);
	
	$_SESSION['log'] = 'Delete Successful.';
	if($_SESSION['flag'] == 1)header ("Location: ../../web_control/php/admin.php");
	if($_SESSION['flag'] == 2)header ("Location: ../../web_control/php/dm.php");
	if($_SESSION['flag'] == 3)header ("Location: ../../web_control/php/student.php");
	
?>