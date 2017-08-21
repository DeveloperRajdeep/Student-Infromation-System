<?php
include'session.php';
?>
<html>
<body>
<?php if(isset($_POST['submit']))
{	if(!empty($_POST['select_class']) && !empty($_POST['select_subject']))
{
	$select_class=$_POST['select_class'];
	$select_subject=$_POST['select_subject'];
	foreach($select_subject as $value)
	{
	$conn1=mysql_query("select * from classsubject where class_name='$select_class' and subject_name='$value'");
	if(mysql_num_rows($conn1)>=1)
	{header('location:Untitled-9.php');
	}
	else
	{$conn2=mysql_query("insert into classsubject(class_name,subject_name) values('$select_class','$value')");
	}
	}
}
}

?>	
	
<form>
<input type='button' value='ASSIGN SUBJECT' onclick='assign_subject()' />
</form>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<p id='assign'></p>
</form>
<?php
$sql=mysql_query("select * from classsubject");
while($res=mysql_fetch_array($sql))
{$id=$res['id'];
$class_name=$res['class_name'];
$subject_name=$res['subject_name'];

echo '<table>';
		echo'<tr>';
		echo'<td>'.$id.'</td>';
		
		echo'<td>'.$class_name.'</td>';
		
		echo'<td>'.$subject_name.'</td>';
		echo'<td>'.'<a href=edit8.php?edit='.$id.'>EDIT</a>'.'</td>';
		echo '<td>'.'<a href=delete6.php?delete='.$id.'>DELETE</a>'.'</td>';
		echo'</tr>';
		echo'</table>';	
	
	}
	?>
	<script>
	function assign_subject()
	{
	document.getElementById('assign').innerHTML="<?php

	$sql1=mysql_query('select * from class');
	$num=mysql_num_rows($sql1);
	echo '<select name=select_class>';
	while($res1=mysql_fetch_array($sql1))
	{	$id=$res1['id'];
		  $class_name=$res1['classname'];
		echo '<option value='.$class_name.'>'.$class_name.'</option>';
	}
	echo '</select>';
	?>"+"<?php
	$sql2=mysql_query('select * from subjects');


		echo '<select name=select_subject[] multiple>';		
	while($res2=mysql_fetch_array($sql2))
	{
		$id=$res2['id'];
		$subject_name=$res2['subject_name'];
		echo '<option value='.$subject_name.'>'.$subject_name.'</option>';	
	
	}echo '</select>';
	echo '<br/><input type=submit name=submit value=ADD />';
	?>";
	}
	</script>
    </body>
    </html>