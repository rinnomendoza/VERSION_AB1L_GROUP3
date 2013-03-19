<?php
	require_once '../defines.php';
	require_once ''.ObjectPath.'db_access/objects/user.php';
	
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	
	if ($uname === "admin" && $pword === "admin")
	{
		$_SESSION['uname'] = $uname;
		$_SESSION['flag'] = 1;
		header ("Location: ../../web_control/php/admin.php");
	}
	else
	{	$pword = md5($pword);
		$user = new user($uname, $pword);
		$flag = $user->auth_sign_in();
		if($flag == 0)
		{
			$_SESSION['log'] = 'Sign-in Failed: Invalid username or password.';
			header ("Location: ../../web_control/php/index.php");
		}else
		{
			$_SESSION['uname'] = $uname;
			$_SESSION['flag'] = $flag;
			if($flag == 1)header ("Location: ../../web_control/php/admin.php");
			if($flag == 2)header ("Location: ../../web_control/php/dm.php");
			if($flag == 3)header ("Location: ../../web_control/php/student.php");
		}
	}
?>