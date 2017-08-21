<?php
include 'conn.php';
session_start();

unset($_SESSION['username']);
session_destroy();
header('location:admin-login4.php');

?>