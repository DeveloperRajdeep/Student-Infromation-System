<?php 
include 'conn.php';
session_start();

{
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$result=mysql_query("select * from security_details where username='$username' and password='$password' and status=1");
	$total=mysql_num_rows($result);
	
 

	if($total>=1)
	{
		$_SESSION['username']=$username;
		header('location:profile_view.php');
	}
	else
	{
			header('location:user_view_main.php');
			
	}
}

?>