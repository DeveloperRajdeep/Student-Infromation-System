<?php
include 'conn.php';
?>
<html>
<head>
<style>
</style>
</head>
<body>
<?php 
$sql_conn=mysql_query("select id,roll_no,student_name,class from student_details where status=0");
	
	while($result=mysql_fetch_array($sql_conn))
	{	$id=$result['id'];
		$rollno=$result['roll_no'];
	$studentname=$result['student_name'];
	$class=$result['class'];
		echo '<table><tr><td>';
		echo $id.'</td>'.'<td>'.$rollno.'</td>'.'<td>'.$studentname.'</td>'.'<td>'.$class.'</td>';
		echo '<td><a href=approve.php?'.$id.'><button type=button>APPROVE</button></a></td>';
		echo'</tr></table>';
		
	}

?>
