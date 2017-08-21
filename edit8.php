<?php
include'session.php';
?>
<html>
<head>
<style>
</style>
</head>
<body><?php
if(isset($_POST['submit']))
{
$id7=$_POST['id6'];
$class=$_POST['class'];
$subjects=$_POST['subject'];


$update_sql=mysql_query("update classsubject set class_name='$class', subject_name='$subjects' where id='$id7'");
if($update_sql==true)
{ header('location:Untitled-9.php');
}else{
header('location:Untitled-9.php');

}
}


else if($_GET['edit'])
{
	$id5=$_GET['edit'];



echo'<form action=edit8.php method=post>';

echo'<select name=class>';

$sql2=mysql_query('select * from class');
while($result=mysql_fetch_array($sql2))
{$id3=$result['id'];
$class=$result['classname'];
echo '<option value='.$class.'>'.$class.'</option>';
}
echo'</select>';
echo '<select name=subject required=required >'; 
$sql3=mysql_query('select * from subjects');
while($result2=mysql_fetch_array($sql3))
{$id4=$result2['id'];
$subject=$result2['subject_name'];
echo '<option value='.$subject.'>'.$subject.'</option>';
}
echo'</select>';
echo'<input type=hidden name=id6 value='.$id5.'>';
echo'<input type=submit name=submit value=UPDATE>';
echo'</form>'; 

}
?>
</body>
</html>