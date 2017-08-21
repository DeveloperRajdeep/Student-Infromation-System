<?php
include'session.php';
?>
<html>
<head>
<style>
</style>
</head>
<body>
<?php
if(isset($_POST['submit']))
{

$subject=$_POST['select_subject'];
$id = $_POST['id'];
$conn2 = mysql_query("update subjects set subject_name='$subject' where id='$id'");

if($conn2==true)
{
header('location:admin2.php');
}
else{
	header('location:admin2.php');
	}
}
else if($_GET['edit'])
{
$id1=$_GET['edit'];
$sql=mysql_query("select * from subjects");
echo'<form action='.$_SERVER['PHP_SELF'].' method=post >';
	echo'<select name=select_subject >';
while($res=mysql_fetch_array($sql))
{
	$id=$res['id'];
	$subject=$res['subject_name'];
	echo'<option value='.$subject.'>'.$subject.'</option>';
	
}
echo'</select>';
echo'<input type=hidden name=id value='.$id1.' >';
echo '<input type=submit name=submit value=UPDATE >';
echo'</form>'; 
}

?>

</body>
</html>