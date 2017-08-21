<?php
include 'conn.php';
session_start();
$check=$_SESSION['username'];
$connect=mysql_query("select * from security_details where username='$check' and status=1 ");
while($res=mysql_fetch_array($connect))
{$name=$res['username'];
$roll=$res['roll_no'];
}
$_SESSION['roll']=$roll;
if(!isset($name))
{header('location:user_view_main.php');
}

?>