<?php include 'conn.php';
if(isset($_POST['submit']))
{
$in=$_POST['a'];
$sql=mysql_query("insert into table (b) values ('$in')");
if($sql==true)
{echo'inserted';
}
else{echo'not';
}
}
?>