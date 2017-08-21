<?php
include 'conn.php';

include'session1.php';

?>
<html>
<head>
</head>
<body>
<?php
if(isset($_GET['id']))
{
	$unique2=$_SESSION['roll'];
	
	echo '<div id=main>';
	echo'<form action=profile_view.php method=post>';
	echo'<button type=submit id=b2>BACK</button>';
	echo'</form>';
	$conn4=mysql_query("select * from picture where rollno='$unique2'");
	$result3=mysql_num_rows($conn4);
if($result3>=1)
{
	while($total3=mysql_fetch_array($conn4))
{
	$photo=$total3['photo'];
	echo'<div id=picture>';
	echo'<span id=photo1>user-photo</span><div id=picture2><img width=150px height=100px src='.$photo.' id=picture3 ></div>';
	echo'</div>';
}
}
	$conn=mysql_query("select * from student_details where roll_no='$unique2' ");
$result=mysql_num_rows($conn);
if($result>=1)
{
while($total=mysql_fetch_array($conn))
{	$roll=$total['roll_no'];
	$name=$total['student_name'];
	$class=$total['class'];
	$age=$total['age'];
	$gender=$total['gender'];
	$nationality=$total['nationality'];
	$religion=$total['religion'];
	$cast=$total['cast'];
	$migration=$total['migration'];
	$dob=$total['dob'];
echo'<div id=student>';
echo'<span id=students>student details</span>';
echo '<span id=student1>roll-no:</span><div id=s_details1>'.$roll.'</div>';
echo '<span id=student2>student-name:</span><div id=s_details2>'.$name.'</div>';
echo '<span id=student3>class:</span><div id=s_details3>'.$class.'</div>';
echo '<span id=student4>age:</span><div id=s_details4>'.$age.'</div>';
echo '<span id=student5>gender:</span><div id=s_details5>'.$gender.'</div>';
echo '<span id=student6>nationality:</span><div id=s_details6>'.$nationality.'</div>';
echo '<span id=student7>religion:</span><div id=s_details7>'.$religion.'</div>';
echo '<span id=student8>cast:</span><div id=s_details8>'.$cast.'</div>';

echo '<span id=student10>date-of-birth:</span><div id=s_details10>'.$dob.'</div>';
echo'</div>';
}
}
$conn3=mysql_query("select * from medical_details where roll_no='$unique2'");
	$result3=mysql_num_rows($conn3);
	if($result3>=1)
	{while($total3=mysql_fetch_array($conn3))
	{$blood_group=$total3['blood_group'];
	$identity=$total3['identification'];
	echo'<div id=medical>';
	echo'<span id=medicals>medical details</span>';
	echo'<span id=medical1>blood group :</span><div id=medical_details1>'.$blood_group.'</div>';
	echo'<span id=medical2>identityfication :</span><div id=medical_details2>'.$identity.'</div>';
	echo'</div>';
	}
	}

}
echo'</div>';

?><button type=button id==b1 onclick="window.print()" >PRINT</button>
</body>
</html>