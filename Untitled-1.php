<?php
session_start();
include 'conn.php';



$admin=mysql_query("select * from user where (username='".($post_username)."') and (password='".$post_password."')");
if($row=mysql_fetch_array($admin))
{$_session['user_id']=$row['login_id'];
$_session['username']=$row['username'];


}











?>