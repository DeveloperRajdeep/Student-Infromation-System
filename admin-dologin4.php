<?php
include 'conn.php';
?>
<html><body>
<?php
ob_start();
session_start();
if(isset($_POST['submit']) && empty($_POST['username']) && empty($_POST['password']))
{header('locatio:admin-login4.php');
}

elseif(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']))
	
	{$uname=$_POST['username'];
$ps=$_POST['password'];
	$sql=mysql_query("select * from admin where username='$uname' and password='$ps'");
	if(mysql_num_rows($sql)==1)
	{ $_SESSION['username']=$uname;
	header('location:admin_home.php');

}else{
	session_destroy();
	header('location:admin-login4.php');

}

	}


?>
</body>
</html>