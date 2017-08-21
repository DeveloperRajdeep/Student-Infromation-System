<?php
include'session.php';
?>
<html>
<body>
<?php
$id=$_GET['delete'];
$sql=mysql_query("delete from classsubject where id='$id'");
if($sql==true)
{header('location:admin8.php');
}
else
{echo 'not deleted';
header('location:admin8.php');
}?>
</body>
</html>


