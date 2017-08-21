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

$exam_name=$_POST['select_exam'];
$total_marks=$_POST['select_marks'];
$id = $_POST['id'];
$conn2 = mysql_query("update exam set exam_name='$exam_name',total_marks='$total_marks' where id='$id'");

if($conn2==true)
{
header('location:admin4.php');
}
else{header('location:admin4.php');
	
	}
}
else if($_GET['edit'])
{
$id1=$_GET['edit'];



$sql=mysql_query("select * from exam");
echo'<form action='.$_SERVER['PHP_SELF'].' method=post >';
	echo'<select name=select_exam >';
while($res=mysql_fetch_array($sql))
{
	$id=$res['id'];
	$exam_name=$res['exam_name'];
	echo'<option value='.$exam_name.'>'.$exam_name.'</option>';
	
}
echo'</select>';
echo'<select name=select_marks>';
$sql1=mysql_query("select * from exam");
for($total_marks=10;$total_marks<=100;$total_marks=$total_marks+10)
{
echo'<option value='.$total_marks.'>'.$total_marks.'</option>';
}
echo'</select>';	
echo'<input type=hidden name=id value='.$id1.' >';
echo '<input type=submit name=submit value=UPDATE >';
echo'</form>'; 
}

?>

</body>
</html>