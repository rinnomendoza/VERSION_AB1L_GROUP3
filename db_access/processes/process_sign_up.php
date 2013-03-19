<?php
	require_once '../defines.php';
	require_once ''.ObjectPath.'db_access/objects/user.php';
	if(!isset($_POST['uname']))header ("Location: index.php");
	
	$uname = $_POST['uname'];
	$pword1 = $_POST['pword1'];
	$pword2 = md5($_POST['pword2']);
	
	$pword1 = md5($pword1);
	$user = new user($uname, $pword1);
	$valid = $user->validate_details($pword2);
	
	if($valid == 0)
	{
		$role = $_POST['role'];
		$fname = $_POST['fname'];
		$id = $_POST['id'];
		$cn = $_POST['cn'];
		$eadd = $_POST['eadd'];
		$user->add_details($fname, $id, $cn, $eadd, $role);
		if($role == 'dm')
		{
			$dorm = $_POST['dorm'];
			$user->insert(NULL, NULL, $dorm);
		}
		else if($role = 'student')
		{
			$course = $_POST['course'];
			$coll = $_POST['coll'];
			$user->insert($course, $coll, NULL);
		}
		$_SESSION['log'] = 'Sign-up Successful.';
		
	}
	else if($valid == 1)$_SESSION['log'] = 'Sign-up Failed: Password missmatch.';
	else if($valid == 2)$_SESSION['log'] = 'Sign-up Failed: Username already exist.';
	
	header ("Location: ../../web_control/php/index.php");
?>