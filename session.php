<?php
include 'conn.php';

session_start();
$username1=$_SESSION['username'];
if($username1==null)
{
header('location:admin-login4.php');

}
?>
