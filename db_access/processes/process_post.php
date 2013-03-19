<?php
	require_once('../objects/posts.php');
	if(!isset($_SESSION['uname']))header ("Location: ../../web_control/php/index.php");
	
	$post = $_POST['post_area'];
	if($post == NULL){
		$_SESSION['log'] = "Post Unsuccessful: Text-area is empty.";
	}else{
		$post = new post($_SESSION['uname'], $post);
		$post->insert($_SESSION['flag']);
		$_SESSION['log'] = "Post Successful.";
	}
	if($_SESSION['flag'] == 1)header ("Location: ../../web_control/php/admin.php");
	if($_SESSION['flag'] == 2)header ("Location: ../../web_control/php/dm.php");
	if($_SESSION['flag'] == 3)header ("Location: ../../web_control/php/student.php");
?>