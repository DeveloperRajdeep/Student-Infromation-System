<?php

if(isset($_POST['submit']))
{

$class=$_POST['class'];
$id = $_POST['id'];
$conn2 = mysql_query("update class set classname='$class' where id='$id'");

if($conn2==true)
{

}
else{
	
	}
}
elseif(isset($_GET['id']))
{
$id1=$_GET['id'];
$sql2 = mysql_query("select * from class where id='$id1'");
while($row2 = mysql_fetch_array($sql2))
{
$classname = $row2['classname'];
echo'<form action=admin2.php method= "post" >';
?>
<input type="text" name="class" value=<?php echo $classname ?> />
<input type="hidden" name="id" value= "<?php echo $id1; ?>" >
<?php
echo'<input type="submit" name="submit" value=assign >';
echo'</form>';
}
}
else
{
	
}
/*$sql=mysql_query("select * from class");
echo'<form action='.$_SERVER['PHP_SELF'].' method=post >';
	echo'<select name=select_class >';
while($res=mysql_fetch_array($sql))
{
	$id=$res['id'];
	$class=$res['classname'];
	echo'<option value='.$class.'>'.$class.'</option>';
	
}
echo'</select>';
echo '<input type=submit name=submit value=UPDATE >';
echo'</form>'; 
*/?>
</body>
</html>