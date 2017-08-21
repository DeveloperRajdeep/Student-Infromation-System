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
#a{position:absolute;
	left:44%;
	top:5%;
	background-color:#000;
	text-transform:uppercase;
	width:16%;
	height:5%;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:90%;
	border-radius:16px;
	font-weight:900;
	word-wrap:break-word;
}
#a:hover{width:16.5%;
		left:43.5%;
		height:5.5%;
}
#insert{position:absolute;
	width:100%;
	height:auto;
	background-image:url(imp_images/background-wide.png);
	top:14%;
}
#table{position:absolute;
		width:45%;
		left:27.5%;
		height:auto;
		top:48%;
}
#row1{background-color:#A7C942;
	color:#FFF;
	text-transform:uppercase;
	
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:19px;
}
.data1{border-style:solid;
	border-color:#98bf21;
	
	}
.row2{background-color:#EAF2D3;
		text-align:center;
		color:#A7C942;
		font-family:Georgia, "Times New Roman", Times, serif;
	text-transform:uppercase;
	font-size:19px;

}
.data2{border-style:solid;
	border-color:#98bf21;

}
.buttons3{
		background-color:#000;
	text-transform:uppercase;
	width:84%;
	height:auto;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:84%;
	border-radius:16px;
	overflow:hidden;
	}
.buttons3:hover{width:86%;
		color:#C06;
}
#options1{position:absolute;
	   width:auto;
	   height:15%;
	   left:40%;
	   top:12%;
	border-top-left-radius:18px;
	border-bottom-right-radius:18px;
	text-transform:uppercase;
	background-image:url(imp_images/1558749.jpg);
	
	color:#000;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:14px;
	font-weight:700;
}
#options1:hover{border-color:#000;
}

#text3{position:absolute;
		width:auto;
		height:auto;
		top:14%;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:18px;
		font-weight:800;
		text-shadow:2px 2px #FFFFFF;
		text-transform:uppercase;
		left:20%;			
}
#options2{position:absolute;
	   width:auto;
	   height:auto;
	   left:40%;
	   top:44%;
	border-top-left-radius:18px;
	background-image:url(imp_images/1558749.jpg);
	color:#fff;
	text-transform:uppercase;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:14px;
	font-weight:700;
}
#options2:hover{border-color:#000;
}
#text4{position:absolute;
		width:auto;
		height:auto;
		top:51%;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:18px;
		font-weight:800;
		text-shadow:2px 2px #FFFFFF;
		text-transform:uppercase;
		left:20.4%;			
}
.buttons2{position:relative;
			left:42%;
			width:10%;
			height:auto;
			word-wrap:break-word;
			background-color:#000;
			color:#FFF;
			font-family:Georgia, "Times New Roman", Times, serif;
			font-size:90%;
			font-weight:900;
			border-radius:16px;
			opacity:1.0;
			
}
.buttons2:hover{width:10.5%;
				color:#FF9;
}
#area{position:absolute;
		width:35%;
		height:auto;
		left:32.5%;
		top:45%;
		background-image:url(imp_images/1879523.jpg);
		z-index:20;
		border-radius:16px;
		box-shadow:2px 3px #666;
		opacity:0.8;
}
#text1{position:absolute;
	width:auto;
	height:auto;
	top:12%;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:16px;
	font-weight:600;
	text-shadow:#999;
	text-transform:uppercase;
	color:#03F;
	left:25%;
}
#options3{position:absolute;
		width:70%;
		height:auto;
		left:15%;
		top:30%;
		border-top-left-radius:18px;
	border-bottom-right-radius:18px;
	text-transform:uppercase;
	background-image:url(imp_images/1558749.jpg);
	
	color:#000;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:14px;
	font-weight:700;
}
#options3:hover{border-color:#000;
}
#text2{position:absolute;
	width:auto;
	height:auto;
	top:44%;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:16px;
	font-weight:600;
	text-shadow:#999;
	text-transform:uppercase;
	color:#03F;
	left:25%;
}
#options4{position:absolute;
		width:70%;
		height:auto;
		left:15%;
		top:58%;
		border-top-left-radius:18px;
	border-bottom-right-radius:18px;
	text-transform:uppercase;
	background-image:url(imp_images/1558749.jpg);
	
	color:#000;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:14px;
	font-weight:700;
}
#options4:hover{border-color:#000;
}
.buttons1{position:relative;
			left:28%;
			width:22%;
			height:auto;
			word-wrap:break-word;
			background-color:#000;
			color:#FFF;
			font-family:Georgia, "Times New Roman", Times, serif;
			font-size:80%;
			font-weight:600;
			border-radius:16px;
			opacity:1.0;
			
}
.buttons1:hover{width:22.5%;
				color:#FF9;
}
	.info{color:#000;
	position:absolute;
	width:30%;
	height:10%;
	left:35.5%;
	top:45%;
	opacity:0.7;
	background-color:#fff;
	text-transform:uppercase;
	border-radius:5%;
	box-shadow:2px 3px #333333;
	z-index:40;
	padding-top:7%;
	text-align:center;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:18px;
}
	
</style>
</head>
<body id=main>
<?php
if(isset($_POST['submit4']))
{echo'<div class=info >you cancelled</div>';
header('refresh:2;url=admin7.php');
}
 

elseif(isset($_POST['submit3']))
{	
	$select_teacher=$_POST['select_teacher'];
	$select_subject=$_POST['select_subject'];
	foreach($select_subject as $value)
	{
	$conn3=mysql_query("select * from teacher_subject where teacher_name='$select_teacher' and subject_name='$value'");
	if(mysql_num_rows($conn3)>=1)
	{
		echo'<div class=info >already exist</div>';
		header('refresh:2;url=admin7.php');


	}
	else
	{$conn2=mysql_query("insert into teacher_subject(teacher_name,subject_name) values('$select_teacher','$value')");
	if($conn2==true)
	{echo'<div class=info >entry inserted</div>';
	header('refresh:4;url=admin7.php');
}

	}
	
	}
}

?><form>
  <input type='button' value='ASSIGN TEACHER' id=a onClick='assign_subject()'>
</form>
<form action='admin7.php' method='POST'>
<p id='insert'></p>
</form>
<?php
if(isset($_POST['submit2']))
{echo'<div class=info >you cancelled</div>';
header('refresh:2;url=admin7.php');
}
elseif(isset($_POST['submit1']))
{
$id7=$_POST['id6'];
$teacher=$_POST['teacher'];
$subjects=$_POST['subject'];


$update_sql=mysql_query("update teacher_subject set teacher_name='$teacher', subject_name='$subjects' where id='$id7'");
if($update_sql==true)
{echo'<div class=info >entry updated</div>';
header('refresh:2;url=admin7.php');
}

	else{
header('location:admin7.php');

}
}


else if(isset($_GET['edit']))
{
	$id5=$_GET['edit'];


echo'<div id=area>';
echo'<form action=admin7.php method=post>';
echo'<div id=first >';
echo'<span id=text1 >select teacher</span>';
echo'<select name=teacher id=options3 >';
echo'<option value=null >choose teacher</option>';
$sql2=mysql_query('select * from teacher');
while($result=mysql_fetch_array($sql2))
{$id3=$result['id'];
$teacher=$result['teacher_name'];
echo '<option value='.$teacher.'>'.$teacher.'</option>';
}
echo'</select>';
echo'</div>';
echo'<br><br><br><span id=text2>select subject</span>';
echo'<div id=second >';

echo '<select name=subject required=required id=options4>';
 
$sql3=mysql_query('select * from subjects');
while($result2=mysql_fetch_array($sql3))
{$id4=$result2['id'];
$subject=$result2['subject_name'];
echo '<option value='.$subject.'>'.$subject.'</option>';
}
echo'</select>';
echo'</div>';
echo'<input type=hidden name=id6 value='.$id5.'>';
echo'<br><br><br><br><br><button type=submit name=submit1 class=buttons1 >UPDATE</button>';
echo'&emsp;<button type=submit name=submit2 class=buttons1 >CANCEL</button><br><br>';
echo'</form>'; 
echo'</div>';

}
?>

<?php
$sql=mysql_query("select * from teacher_subject");
echo'<table id=table><tr id=row1><th class=data1>teacher name</th><th class=data1>subject name</th><th class=data1>update</th><th class=data1>delete</th></tr>';
while($res=mysql_fetch_array($sql))
{ $id=$res['id'];
$teacher_name=$res['teacher_name'];
$subject_name=$res['subject_name'];

echo'<tr class=row2 >';
echo'<td class=data2>'.$teacher_name.'</td>';
echo'<td class=data2>'.$subject_name.'</td>';
echo'<td class=data2>'.'<a href=admin7.php?edit='.$id.'>'.'<button type=button name=button1 class=buttons3>EDIT</button>'.'</a>'.'</td>';
echo'<td class=data2>'.'<a href=delete7.php?delete='.$id.'>'.'<button type=button name=button2 class=buttons3>delete</button>'.'</a>'.'</td>';
echo'</tr>';
}

echo'</table>';
?>
<script>
function assign_subject()
{
document.getElementById('insert').innerHTML="<?php
	echo'<div id=details></div>'; 
	$sql2=mysql_query('select * from teacher');
	echo'<span id=text3>select teacher :</span>';

	echo'<div id=third>';

	echo'<select name=select_teacher  id=options1 >';
	echo'<option value=null >select teacher</option>';
		while($res1=mysql_fetch_array($sql2))
	{ $id=$res1['id'];
	$teacher_name=$res1['teacher_name'];
	echo '<option value='.$teacher_name.' >'.$teacher_name.'</option>';
	
	}
	echo'</select>';
	echo'</div>';
	?>"+"<?php
	$sql3=mysql_query('select * from subjects');
	echo'<br><br><br><span id=text4>select subject :</span>';

	echo'<div id=forth>';
		echo'<select name=select_subject[] multiple id=options2 >';
	while($res2=mysql_fetch_array($sql3))
	{$id1=$res2['id'];
	$subject_name=$res2['subject_name'];
	echo '<option value='.$subject_name.'>'.$subject_name.'</option>';
	}
	echo'</select>';
	echo'</div>';
	echo '<br/>'.'<br><br><br><br><br><br><br><button type=submit name=submit3 class=buttons2 >ADD </button>';
	echo '&emsp;<button type=submit name=submit4 class=buttons2 >CANCEL </button><br><br>';
	?>";

}
	</script>
	</body>
	</html>