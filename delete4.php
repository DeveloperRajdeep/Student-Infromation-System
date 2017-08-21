<?php 
include'session.php';
?>
<html>
<body>
<?php
$id1=$_GET['delete'];
$sql=mysql_query("delete from exam where id=$id1");
if($sql==true)
{header('location:admin4.php');
}
else
{
echo'not deleted';
}


?>
</body>
</html>