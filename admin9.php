<?php 
include'session.php';
?>
<html>
<head>
<style>
#main{position:absolute;
	  padding:0%;
	  margin:0%;
	  width:100%;
	  height:100%;
	  background-image:url(imp_images/wave.png);
}

</style>
</head>
<body id=main>
<form action='admin9.php' method='post'>
<button type='submit' name='submit7' class='buttons5'>registered student</button>
</form>
<?php if (isset($_POST['submit7']))
{
	?>
<form action='admin9.php' method='post'>
<?php
$sql=mysql_query("select * from class");
echo'<select name=select_class id=options1>';
echo'<option value="">SELECT CLASS</option>';

while($final=mysql_fetch_array($sql))
{ $class_name=$final['classname'];
echo'<option value='.$class_name.'>'.$class_name.'</option>';
}
echo'</select>';
?>
<button type='submit' name='submit1' class='buttons1'>search</button>
<button type='submit' name='submit2' class='buttons1'>cancel</button>
</form>
<form action='admin9.php' method='post'>
<input type='checkbox' name='check1' class='options2'/><span id=text1> NAME</span>
<input type='checkbox' name='check2' class='options2'/><span id=text2> class</span>
<input type='checkbox' name='check3' class='options2'/><span id=text3>address </span>
<input type='text' name='search' id='search1' onkeyup='transform(this)'/>
<button type='submit' name='submit3' class='buttons2'>search</button>
<button type='submit' name='submit4' class='buttons2'>cancel</button>
</form>
<form action='admin9.php' method='post'>
<button type='submit' name='submit6' class='buttons4'>all students</button>
</form>
<?php
} ?>
<form action='admin9.php' method='post'>
<button type='submit' name='submit5' class='buttons3'>registration request</button>
</form>

<?php 
if(isset($_GET['approve']))
{$approve1=$_GET['approve'];
$connect=mysql_query("update student_details,address_details,guardian_details,medical_details,security_details,subject_taken,picture set 
student_details.status=1 , address_details.status=1,guardian_details.status=1,
medical_details.status=1,security_details.status=1,subject_taken.status=1,picture.status=1 where 
student_details.roll_no='$approve1' and address_details.roll_no='$approve1' and
guardian_details.roll_no='$approve1' and medical_details.roll_no='$approve1' and
 security_details.roll_no='$approve1' and subject_taken.roll_no='$approve1' and picture.rollno='$approve1'");
if($connect==1)
{echo 'approved';
}
}


?>
<?php
if(isset($_GET['delete']))
{$delete=$_GET['delete'];
$conn2=mysql_query("delete a.* ,b.*,c.*,d.*,e.*,f.*,g.* from student_details as a,address_details as b,guardian_details as c,
medical_details as d,security_details as e,subject_taken as f,picture as g
where a.roll_no='$delete' and b.roll_no='$delete' and c.roll_no='$delete' and d.roll_no='$delete' and e.roll_no='$delete' and 
f.roll_no='$delete' and g.rollno='$delete'");
if($conn2==1)
{echo 'delete';
}
}


?>
<?php 
if(isset($_GET['deny']))
{$deny1=$_GET['deny'];
$connect_1=mysql_query("delete a.* ,b.*,c.*,d.*,e.*,f.*,g.* from student_details as a,address_details as b,guardian_details as c,
medical_details as d,security_details as e,subject_taken as f,picture as g
where a.roll_no='$deny1' and b.roll_no='$deny1' and c.roll_no='$deny1' and d.roll_no='$deny1' and e.roll_no='$deny1' and 
f.roll_no='$deny1' and g.rollno='$deny1'");
if($connect_1==1)
{echo 'deleted';
}
}


?>


<?php
if(isset($_POST['submit5']))
{$connect=mysql_query("select * from student_details where status=0");
$final=mysql_num_rows($connect);
if($final==0)
{echo'<div class=info>no entries found</div>';
header('refresh:2;url=admin9.php');
}
else{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>APPROVE</th><th class=data1>DENY</th><th class=data1>DETAILS</th>
<th class=data1>DELETE</th></tr>';

	while($final1=mysql_fetch_array($connect))
	{$rollno_1=$final1['roll_no'];
	$studentname_1=$final1['student_name'];
	$class_1=$final1['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'.$rollno_1.'</td>';
	echo'<td class=data1>'.$studentname_1.'</td>';
	echo'<td class=data1>'.$class_1.'</td>';
	echo'<td class=data1><a href=admin9.php?approve='.$rollno_1.'><button type=button name=button1 class=buttons4>APPROVE</button></a>';
	echo'<td class=data1><a href=admin9.php?deny='.$rollno_1.'><button type=button name=button1 class=buttons4>DENY</button></a>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno_1.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data1><a href=admin9.php?delete='.$rollno_1.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';
}
}
	
?>
<?php

if(isset($_POST['submit6']))
{$connect1=mysql_query("select * from student_details where status=1");
$final1=mysql_num_rows($connect1);
if($final1==0)
{echo'<div class=info>no entries found</div>';
header('refresh:2;url=admin9.php');
}
else{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';

	while($final2=mysql_fetch_array($connect1))
	{$rollno_2=$final2['roll_no'];
	$studentname_2=$final2['student_name'];
	$class_2=$final2['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'.$rollno_2.'</td>';
	echo'<td class=data1>'.$studentname_2.'</td>';
	echo'<td class=data1>'.$class_2.'</td>';
	
	echo'<td class=data1><a href=student_details.php?details='.$rollno_2.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data1><a href=admin9.php?delete='.$rollno_2.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';
}
}
	
?>

<?php 
if(isset($_POST['submit2'])) 
{echo '<div class=info>you cancelled</div>';
header('refresh:2;url=admin9.php');
}
elseif(isset($_POST['submit1']))
{if(isset($_POST['select_class']))
{$class=$_POST['select_class'];
$sql1=mysql_query("select * from student_details where class='$class' and status=1");
$total=mysql_num_rows($sql1);
if($total==0)
{echo'<div class=info>no entries found</div>';
header('refresh:2;url=admin9.php');
}
else{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($total1=mysql_fetch_array($sql1))
	{$rollno=$total1['roll_no'];
	$studentname=$total1['student_name'];
	$classname=$total1['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'.$rollno.'</td>';
	echo'<td class=data1>'.$studentname.'</td>';
	echo'<td class=data1>'.$classname.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data1><a href=admin9.php?delete='.$rollno.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';
}
}
}

	elseif(isset($_POST['submit3']) && isset($_POST['check1']) && !isset($_POST['check2'])&&!isset($_POST['check3']))

{	$name=$_POST['search'];

	$sql2=mysql_query("select * from student_details where student_name='$name' and status=1");
		
		$result=mysql_num_rows($sql2);
if($result==0)
{echo'<div class=info>no entries found</div>';
header('refresh:2;url=admin9.php');
}
else{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data3>DELETE</th></tr>';
	while($result1=mysql_fetch_array($sql2))
	{$rollno1=$result1['roll_no'];
	$studentname1=$result1['student_name'];
	$classname1=$result1['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno1.'</td>';
	echo'<td class=data1>'.$studentname1.'</td>';
	echo'<td class=data1>'.$classname1.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno1.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data1><a href=admin9.php?delete='.$rollno1.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';
}
}
elseif(isset($_POST['submit3'])&&isset($_POST['check2'])&& !isset($_POST['check1'])&& !isset($_POST['check3']))

{	$class=$_POST['search'];

	$sql3=mysql_query("select * from student_details where class='$class' and status=1");
		
		$result2=mysql_num_rows($sql3);
if($result2==0)
{echo'<div class=info>no entries found</div>';
header('refresh:2;url=admin9.php');
}
else{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result3=mysql_fetch_array($sql3))
	{$rollno2=$result3['roll_no'];
	$studentname2=$result3['student_name'];
	$classname2=$result3['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno2.'</td>';
	echo'<td class=data1>'.$studentname2.'</td>';
	echo'<td class=data1>'.$classname2.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno2.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data1><a href=admin9.php?delete='.$rollno2.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';
}
}
elseif(isset($_POST['submit3'])&&isset($_POST['check3'])&&!isset($_POST['check1'])&&!isset($_POST['check2']))

{		
	$address=$_POST['search'];	
	$sql4=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from student_details INNER JOIN address_details ON student_details.roll_no=address_details.roll_no and 
	address_details.present_address='$address' and student_details.status=1 and address_details.status=1");
	
		
		$result4=mysql_num_rows($sql4);
if($result4==0)
{echo'<div class=info>no entries found</div>';
header('refresh:2;url=admin9.php');
}
else{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result5=mysql_fetch_array($sql4))
	{$rollno3=$result5['roll_no'];
	$studentname3=$result5['student_name'];
	$classname3=$result5['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno3.'</td>';
	echo'<td class=data1>'.$studentname3.'</td>';
	echo'<td class=data1>'.$classname3.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno3.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data1><a href=admin9.php?delete='.$rollno3.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}
		
		
elseif(isset($_POST['submit3'])&&isset($_POST['check1'])&&isset($_POST['check2'])&&!isset($_POST['check3']))

{		
	$get=$_POST['search'];
	$get1=explode(',',$get);
	$name1=$get1[0];
	$class1=$get1[1];	
	$sql5=mysql_query("select * from student_details where student_name='$name1' and class='$class1' and status=1 ");
	
		
		$result6=mysql_num_rows($sql5);
if($result6>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result7=mysql_fetch_array($sql5))
	{$rollno4=$result7['roll_no'];
	$studentname4=$result7['student_name'];
	$classname4=$result7['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno4.'</td>';
	echo'<td class=data1>'.$studentname4.'</td>';
	echo'<td class=data1>'.$classname4.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno4.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno4.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}

	if(isset($_POST['submit3'])&&isset($_POST['check2'])&&isset($_POST['check1'])&&!isset($_POST['check3']))

{		
	$get2=$_POST['search'];
	$get3=explode(',',$get2);
	$class2=$get3[0];
	$name2=$get3[1];	
	$sql6=mysql_query("select * from student_details where student_name='$name2' and class='$class2' and status=1 ");
	
	$result8=mysql_num_rows($sql6);
if($result8>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result9=mysql_fetch_array($sql6))
	{$rollno5=$result9['roll_no'];
	$studentname5=$result9['student_name'];
	$classname5=$result9['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno5.'</td>';
	echo'<td class=data1>'.$studentname5.'</td>';
	echo'<td class=data1>'.$classname5.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno5.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno5.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}

elseif(isset($_POST['submit3'])&&isset($_POST['check1'])&&isset($_POST['check3'])&&!isset($_POST['check2']))

{		
	$get4=$_POST['search'];
	$get5=explode(',',$get4);
	$name3=$get5[0];	
	$address1=$get5[1];
	$sql7=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class 
	from student_details INNER JOIN address_details ON student_details.roll_no=address_details.roll_no and
	 address_details.present_address='$address1' and student_details.student_name='$name3' and student_details.status=1 
	 and address_details.status=1");
	
		
		$result10=mysql_num_rows($sql7);
if($result10>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result11=mysql_fetch_array($sql7))
	{$rollno6=$result11['roll_no'];
	$studentname6=$result11['student_name'];
	$classname6=$result11['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno6.'</td>';
	echo'<td class=data1>'.$studentname6.'</td>';
	echo'<td class=data1>'.$classname6.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno6.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno6.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}
	if(isset($_POST['submit3'])&&isset($_POST['check1'])&&isset($_POST['check3'])&&!isset($_POST['check2']))

{		
	$get5=$_POST['search'];
	$get6=explode(',',$get5);
	$address2=$get6[0];	
	$name4=$get6[1];
	$sql8=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from
	 student_details INNER JOIN address_details ON student_details.roll_no=address_details.roll_no
	  and address_details.present_address='$address2' and student_details.student_name='$name4' and student_details.status=1 
	 and address_details.status=1");
	
		
		$result11=mysql_num_rows($sql8);
if($result11>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result12=mysql_fetch_array($sql8))
	{$rollno7=$result12['roll_no'];
	$studentname7=$result12['student_name'];
	$classname7=$result12['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno7.'</td>';
	echo'<td class=data1>'.$studentname7.'</td>';
	echo'<td class=data1>'.$classname7.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno7.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno7.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}

elseif(isset($_POST['submit3'])&&!isset($_POST['check1'])&&isset($_POST['check3'])&&isset($_POST['check2']))

{		
	$get7=$_POST['search'];
	$get8=explode(',',$get7);
	$class3=$get8[0];
	$address3=$get8[1];	
	
	$sql9=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from 
	 student_details INNER JOIN address_details ON student_details.roll_no=address_details.roll_no and 
	  address_details.present_address='$address3' and student_details.class='$class3' and student_details.status=1 
	 and address_details.status=1");
	
		
		$result12=mysql_num_rows($sql9);
if($result12>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result13=mysql_fetch_array($sql9))
	{$rollno8=$result13['roll_no'];
	$studentname8=$result13['student_name'];
	$classname8=$result13['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno8.'</td>';
	echo'<td class=data1>'.$studentname8.'</td>';
	echo'<td class=data1>'.$classname8.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno8.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno8.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}

	if(isset($_POST['submit3'])&&!isset($_POST['check1'])&&isset($_POST['check3'])&&isset($_POST['check2']))

{		
	$get8=$_POST['search'];
	$get9=explode(',',$get8);
	$address4=$get9[0];	
	$class4=$get9[1];

	$sql10=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from student_details INNER JOIN address_details 
	ON student_details.roll_no=address_details.roll_no and address_details.present_address='$address4' and student_details.class='$class4'
	and student_details.status=1 
	 and address_details.status=1");
	
		
		$result13=mysql_num_rows($sql10);
if($result13>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result14=mysql_fetch_array($sql10))
	{$rollno9=$result14['roll_no'];
	$studentname9=$result14['student_name'];
	$classname9=$result14['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno9.'</td>';
	echo'<td class=data1>'.$studentname9.'</td>';
	echo'<td class=data1>'.$classname9.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno9.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno9.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}

elseif(isset($_POST['submit3'])&&isset($_POST['check1'])&&isset($_POST['check3'])&&isset($_POST['check2']))

{		
	$get10=$_POST['search'];
	$get11=explode(',',$get10);
	$name5=$get11[0];
	$class5=$get11[1];
	$address5=$get11[2];	

	$sql11=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from student_details INNER JOIN address_details 
	ON student_details.roll_no=address_details.roll_no and address_details.present_address='$address5' and student_details.class='$class5'
	and student_details.student_name='$name5' and student_details.status=1 
	 and address_details.status=1");
	
		
		$result15=mysql_num_rows($sql11);
if($result15>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result16=mysql_fetch_array($sql11))
	{$rollno10=$result16['roll_no'];
	$studentname10=$result16['student_name'];
	$classname10=$result16['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno10.'</td>';
	echo'<td class=data1>'.$studentname10.'</td>';
	echo'<td class=data1>'.$classname10.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno10.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno10.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}

}

	if(isset($_POST['submit3'])&&isset($_POST['check1'])&&isset($_POST['check3'])&&isset($_POST['check2']))

{		
	$get12=$_POST['search'];
	$get13=explode(',',$get12);
	$name6=$get13[0];
	$address6=$get13[1];	
	$class6=$get13[2];
	
	

	$sql12=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from student_details INNER JOIN address_details 
	ON student_details.roll_no=address_details.roll_no and address_details.present_address='$address6' and student_details.class='$class6'
	and student_details.student_name='$name6' and student_details.status=1 
	 and address_details.status=1");
	
		
		$result17=mysql_num_rows($sql12);
if($result17>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result18=mysql_fetch_array($sql12))
	{$rollno11=$result18['roll_no'];
	$studentname11=$result18['student_name'];
	$classname11=$result18['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno11.'</td>';
	echo'<td class=data1>'.$studentname11.'</td>';
	echo'<td class=data1>'.$classname11.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno11.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno11.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}

}

   if(isset($_POST['submit3'])&&isset($_POST['check1'])&&isset($_POST['check3'])&&isset($_POST['check2']))

{		
	$get14=$_POST['search'];
	$get15=explode(',',$get14);
	$class7=$get15[0];
	$name7=$get15[1];
	$address7=$get15[2];	
	
	
	

	$sql13=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from student_details INNER JOIN address_details 
	ON student_details.roll_no=address_details.roll_no and address_details.present_address='$address7' and student_details.class='$class7'
	and student_details.student_name='$name7' and student_details.status=1 
	 and address_details.status=1");
	
		
		$result19=mysql_num_rows($sql13);
if($result19>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result20=mysql_fetch_array($sql13))
	{$rollno12=$result20['roll_no'];
	$studentname12=$result20['student_name'];
	$classname12=$result20['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno12.'</td>';
	echo'<td class=data1>'.$studentname12.'</td>';
	echo'<td class=data1>'.$classname12.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno12.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno12.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}

		if(isset($_POST['submit3'])&&isset($_POST['check1'])&&isset($_POST['check3'])&&isset($_POST['check2']))

{		
	$get16=$_POST['search'];
	$get17=explode(',',$get16);
	$class8=$get17[0];
	$address8=$get17[1];
	$name8=$get17[2];
		
	
	
	

	$sql14=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from student_details INNER JOIN address_details 
	ON student_details.roll_no=address_details.roll_no and address_details.present_address='$address8' and student_details.class='$class8'
	and student_details.student_name='$name8' and student_details.status=1 
	 and address_details.status=1");
	
		
		$result21=mysql_num_rows($sql14);
if($result21>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result22=mysql_fetch_array($sql14))
	{$rollno13=$result22['roll_no'];
	$studentname13=$result22['student_name'];
	$classname13=$result22['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno13.'</td>';
	echo'<td class=data1>'.$studentname13.'</td>';
	echo'<td class=data1>'.$classname13.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno13.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno13.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}

		if(isset($_POST['submit3'])&&isset($_POST['check1'])&&isset($_POST['check3'])&&isset($_POST['check2']))

{		
	$get18=$_POST['search'];
	$get19=explode(',',$get18);
	$address9=$get19[0];
	$name9=$get19[1];
	$class9=$get19[2];
	
	$sql15=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from student_details INNER JOIN address_details 
	ON student_details.roll_no=address_details.roll_no and address_details.present_address='$address9' and student_details.class='$class9'
	and student_details.student_name='$name9' and student_details.status=1 
	 and address_details.status=1");
	
		
		$result23=mysql_num_rows($sql15);
if($result23>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result24=mysql_fetch_array($sql15))
	{$rollno14=$result24['roll_no'];
	$studentname14=$result24['student_name'];
	$classname14=$result24['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno14.'</td>';
	echo'<td class=data1>'.$studentname14.'</td>';
	echo'<td class=data1>'.$classname14.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno14.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno14.'><button type=button name=button2 class=buttons4>DELETE</button</a>>';
	echo'</tr>';
	}
	echo'</table>';

}
}

	if(isset($_POST['submit3'])&&isset($_POST['check1'])&&isset($_POST['check3'])&&isset($_POST['check2']))

{		
	$get20=$_POST['search'];
	$get21=explode(',',$get20);
	$address10=$get21[0];
	$class10=$get21[1];
	$name10=$get21[2];
	$sql16=mysql_query("select student_details.roll_no,student_details.student_name,student_details.class from student_details INNER JOIN address_details 
	ON student_details.roll_no=address_details.roll_no and address_details.present_address='$address10' and student_details.class='$class10'
	and student_details.student_name='$name10' and student_details.status=1 
	 and address_details.status=1");
	
		
		$result25=mysql_num_rows($sql16);
if($result25>=1)
{echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';
	while($result26=mysql_fetch_array($sql16))
	{$rollno15=$result26['roll_no'];
	$studentname15=$result26['student_name'];
	$classname15=$result26['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'. $rollno15.'</td>';
	echo'<td class=data1>'.$studentname15.'</td>';
	echo'<td class=data1>'.$classname15.'</td>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno15.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data8><a href=admin9.php?delete='.$rollno15.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';

}
}

?>	
		
<?php
if(isset($_POST['submit1'])||isset($_POST['submit2'])||isset($_POST['submit3'])||isset($_POST['submit4'])||isset($_POST['submit5'])||isset($_POST['submit6'])||isset($_POST['submit7']))
{?><script>document.getElementById('division').innerHTML="";</script>
<?php
}
else{
$connect=mysql_query("select * from student_details where status=0");
$final=mysql_num_rows($connect);
if($final==0)
{echo'<div class=info >no entries found</div>';
}
else{echo'<div id=division >';
	echo'<table id=table1><tr id=row1><th class=data1>ROLL NO</th>';
echo'<th class=data1>STUDENT NAME</th><th class=data1>CLASS NAME</th>';
echo'<th class=data1>DETAILS</th><th class=data1>DELETE</th></tr>';

	while($final1=mysql_fetch_array($connect))
	{$rollno_1=$final1['roll_no'];
	$studentname_1=$final1['student_name'];
	$class_1=$final1['class'];
	echo'<tr class=row1>';
	echo'<td class=data1>'.$rollno_1.'</td>';
	echo'<td class=data1>'.$studentname_1.'</td>';
	echo'<td class=data1>'.$class_1.'</td>';
	echo'<td class=data1><a href=admin9.php?approve='.$rollno_1.'><button type=button name=button1 class=buttons4>APPROVE</button></a>';
	echo'<td class=data1><a href=admin9.php?deny='.$rollno_1.'><button type=button name=button1 class=buttons4>DENY</button></a>';
	echo'<td class=data1><a href=student_details.php?details='.$rollno_1.'><button type=button name=button1 class=buttons4>DETAILS</button></a>';
	echo'<td class=data1><a href=admin9.php?delete='.$rollno_1.'><button type=button name=button2 class=buttons4>DELETE</button></a>';
	echo'</tr>';
	}
	echo'</table>';
	echo'</div>';
}

}
?>





		
		
		
		