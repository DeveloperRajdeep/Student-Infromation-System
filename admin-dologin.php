<?php
include 'conn.php';


if(isset($_POST['submit']))
{
	

$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysql_query("select * from admin where username='$username' and password='$password'");
if(mysql_num_rows($sql)>0)
{

	
	echo "successful";
	header("refresh:0;url=admin_design.php");
	
}
else
{
	echo '<img src="../imp_images/access1.jpg" width="100%" height="100%">';
	header("refresh:6;url=admin_login.php");
}



}

?>