<?php
include 'conn.php';
session_start();
unset($_SESSION['roll']);
unset($_SESSION['username']);

session_destroy();
header('location:user_view_main.php');

?>