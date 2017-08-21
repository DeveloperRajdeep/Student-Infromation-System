<html>
<head>
<style>
</style>
</head>
<body>
<?php
include'session.php';

if(isset($_POST['submit']))
{

$teacher=$_POST['select_teacher'];
$id = $_POST['id'];
$conn2 = mysql_query("update teacher set teacher_name='$teacher' where id='$id'");

if($conn2==true)
{
header('location:admin3.php');
}
else{header('location:admin3.php');
	
	}
}
else if($_GET['edit'])
{
$id1=$_GET['edit'];



$sql=mysql_query("select * from teacher");
echo'<form action='.$_SERVER['PHP_SELF'].' method=post >';
	echo'<select name=select_teacher >';
while($res=mysql_fetch_array($sql))
{
	$id=$res['id'];
	$teacher=$res['teacher_name'];
	echo'<option value='.$teacher.'>'.$teacher.'</option>';
	
}
echo'</select>';
echo'<input type=hidden name=id value='.$id1.' >';
echo '<input type=submit name=submit value=UPDATE >';
echo'</form>'; 
}

?>

</body>
</html>