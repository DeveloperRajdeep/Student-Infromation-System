<?php
error_reporting(0);
include 'conn.php';
?>
<?php session_start();
if(isset($_POST['submit']))
{
$name=$_POST['uname'];
$pas=$_POST['psword'];
$sql=mysql_query("select * from security_details where username='$name' and password='$pas'");
$a=mysql_num_rows($sql);
if($a==0)
{header('location:student_details.php');
}
else{while($result=mysql_fetch_array($sql))
{$roll=$result['roll_no'];
$_SESSION['roll']=$roll;

}
}
}
?>
<?php 
if(isset($_POST['submit1']))
{$roll2=$_SESSION['roll'];
	$name=$_POST['b'];
	$rollw=$_POST['j'];
	$conn=mysql_query("update student_details set student_name='$name' where roll_no='$roll2'");
	if($conn==true)
	{
	header('refresh:3;url=new10.php');
	}
	else{
	}
	
	
}
?>

<?php $no=$_SESSION['roll'];
$sql1=mysql_query("select * from student_details where roll_no='$no'");
$a1=mysql_num_rows($sql1);
if($a1>=1)
{while($result1=mysql_fetch_array($sql1))
{$roll1=$result1['roll_no'];
$name=$result1['student_name'];

echo $roll1.$name;

}
}
?>
<?php if(isset($_POST['submit2']))
{
	echo'<input type=name>';
}
?>
	
<form action=new10.php method=post>
<input type=text name=b>
<?php echo'<input type=hidden name=j value='.$roll1.'>';?>
<input type=submit name=submit1 value=upate>
</form>
<form action=new10.php method=post>
<input type=submit name=submit2 value=upate>
</form>



