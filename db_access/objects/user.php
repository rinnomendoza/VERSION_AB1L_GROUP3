<?php session_start();
/*-------------------------------------------------
class for users: dorm manager, student, admin
-------------------------------------------------*/
class user
{
	private $uname;
	private $pword;
	private $fname;
	private	$id;
	private $cnumber;
	private $eadd;
	private $role;
	
	function __construct($uname, $pword)
	{
			$this->uname = $uname;
			$this->pword = $pword;
	}
	
	function auth_sign_in(){
		include 'connect.php';
		$result = mysql_query("select * from admin where username = '".htmlspecialchars($this->uname)."' and password = '".htmlspecialchars($this->pword)."'");
		if(mysql_fetch_array($result) != NULL)
		{
			mysql_close($conn);
			return 1;
		}
		else
		{
			$result = mysql_query("select * from user where username = '".htmlspecialchars($this->uname)."' and password = '".htmlspecialchars($this->pword)."'");
			mysql_close($conn);
			$row = mysql_fetch_array($result);
			if($row == NULL)return 0;
			else if($row['role'] == 1) return 3;
			else if($row['role'] == 0) return 2;
		}
	}
	
	function add_details($fname, $id, $cnumber, $eadd, $role)
	{
		$this->fname = $fname;
		$this->id = $id;
		$this->cnumber = $cnumber;
		$this->eadd = $eadd;
		$this->role = $role;
	}
	
	function validate_details($pword2)
	{
		if($this->pword!=$pword2)return 1;
		else
		{
			include 'connect.php';
			$result = mysql_query("select * from user where username = '".htmlspecialchars($this->uname)."'");
			mysql_close($conn);
			if(NULL != mysql_fetch_array($result))return 2;
			else return 0;
		}
	}
	
	function insert($course, $coll, $dorm)
	{
		include 'connect.php';
		if($this->role == 'student') $role = 1;
		else if($this->role == 'dm') $role = 0;
		$result = mysql_query("insert into user values(".$role.", \"".htmlspecialchars($this->fname)."\", \"".htmlspecialchars($this->id)."\", \"".htmlspecialchars($course)."\",\"".htmlspecialchars($coll)."\", \"".htmlspecialchars($dorm)."\", \"".htmlspecialchars($this->cnumber)."\", \"".htmlspecialchars($this->eadd)."\",\"".htmlspecialchars($this->uname)."\",\"".htmlspecialchars($this->pword)."\")");
		mysql_close($conn);
	}
}
?>