<?php 
include 'conn.php';
?>
<html>
<body>
<?php
$id1=$_GET['delete1'];
$sql=mysql_query("delete from class where id=$id1");
if($sql==true)
{header('location:admin2.php');
}
else
{
echo'not deleted';
}


?>
</body>
</html>