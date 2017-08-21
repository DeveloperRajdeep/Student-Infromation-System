<?php
include'session.php';
?>
<html>
<body>
<?php

if(isset($_POST['submit']))
{

$class=$_POST['select_class'];
$id = $_POST['id'];
$conn2 = mysql_query("update class set classname='$class' where id='$id'");

if($conn2==true)
{
header('location:admin1.php');
}
else{
	
	}
}
else if($_GET['id'])
{
$id1=$_GET['id'];


$sql=mysql_query("select * from class");
echo'<form action='.$_SERVER['PHP_SELF'].' method=post >';
	echo'<select name=select_class >';
while($res=mysql_fetch_array($sql))
{
	$id=$res['id'];
	$class=$res['classname'];
	echo'<option value='.$class.'>'.$class.'</option>';
	
}
echo'</select>';
echo'<input type=hidden name=id value='.$id1.' >';
echo '<input type=submit name=submit value=UPDATE >';
echo'</form>'; 
}

?>

</body>
</html>