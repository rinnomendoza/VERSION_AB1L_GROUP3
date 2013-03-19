<?php
	session_start();
	
	/*-------------------------------------------------
	class for posts
	-------------------------------------------------*/
	
	class post
	{
		private $user;
		private $post;
		
		function __construct($uname, $post)
		{
			$this->user = $uname;
			$this->post = $post;
		}
		
		function insert($flag)
		{
			if($flag == 3)$role = 1;
			else $role = 0;
			include 'connect.php';
			mysql_query("insert into posts(username, postdescription, role) values(\"".htmlspecialchars($this->user)."\",\"".htmlspecialchars($this->post)."\", \"".$role."\")");
			mysql_close($conn);
		}
		
		function delete($id)
		{
			include 'connect.php';
			mysql_query("delete from posts where id = \"".$id."\"");
			mysql_close($conn);
		}
	}
?>