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
	width:14%;
	height:5%;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:90%;
	border-radius:16px;
	font-weight:900;
	word-wrap:break-word;
}
#a:hover{width:14.5%;
		left:43.5%;
		height:5.5%;
}

#table{position:absolute;
	 	width:50%;
		left:25%;
		top:44%;
		right:25%;
		height:auto;
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
#insert_exam{position:absolute;
			width:100%;
			height:auto;
			top:11%;
			color:#FFF;
			background-image:url(imp_images/background-wide.png);
			opacity:0.8;
			font-family:Georgia, "Times New Roman", Times, serif;
			text-transform:uppercase;
			
}
#details{position:absolute;
		width:auto;
		height:auto;
		font-size:100%;
		font-weight:800;
		text-shadow:2px 1px #0000CC;
		word-wrap:break-word;
		left:45%;
}
#text3{position:absolute;
		width:auto;
		height:auto;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:100%;
		font-weight:800;
		text-shadow:2px 1px #0000CC;
		word-wrap:break-word;
		left:30%;
		top:37%;
}
#unique3{position:absolute;
		width:15%;
		height:auto;
		top:35%;
		left:44%;
		border-top-left-radius:18px;
		border-bottom-right-radius:18px;
}
#unique3:hover{border-color:#00F;
}
#text4{position:absolute;
		width:auto;
		height:auto;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:100%;
		font-weight:800;
		text-shadow:2px 1px #0000CC;
		word-wrap:break-word;
		left:28.4%;
		top:67%;
}
#unique4{position:absolute;
		width:15%;
		height:auto;
		top:65%;
		left:44%;
		border-top-left-radius:18px;
		border-bottom-right-radius:18px;
}
#unique4:hover{border-color:#00F;
}
.buttons3{position:relative;
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
.buttons3:hover{width:10.5%;
				color:#FF9;
}
.buttons2{
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
.buttons2:hover{width:85;
		color:#C06;
}
#first{position:absolute;
	left:30%;
	border-radius:5%;
	box-shadow:2px 4px #333333;
	top:54%;
	width:40%;
	background-color:#00F;
	height:auto;
	z-index:15;
	opacity:0.8;
	color:#FFF;
	text-shadow:2px 2px #000000;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:18px;
	overflow:hidden;
	
	text-transform:uppercase;
	
}
#details1{position:absolute;
		width:auto;
		height:auto;
		font-size:100%;
		font-weight:700;
		text-shadow:2px 1px #0000CC;
		word-wrap:break-word;
		left:33%;
}
#text1{position:absolute;
		width:auto;
		height:auto;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:100%;
		font-weight:700;
		text-shadow:2px 1px #0000CC;
		word-wrap:break-word;
		left:12%;
		top:27%;
}
#exam_1{position:absolute;
		width:35%;
		height:auto;
		top:25%;
		left:49%;
		border-top-left-radius:18px;
		border-bottom-right-radius:18px;
}
#exam_1:hover{border-color:#00F;
}
#text2{position:absolute;
		width:auto;
		height:auto;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:100%;
		font-weight:700;
		text-shadow:2px 1px #0000CC;
		word-wrap:break-word;
		left:11.5%;
		top:57%;
}
#exam_2{position:absolute;
		width:35%;
		height:auto;
		top:55%;
		left:49%;
		border-top-left-radius:18px;
		border-bottom-right-radius:18px;
}
#exam_2:hover{border-color:#00F;
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
	top:40%;
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
#here1{position:absolute;
		width:auto;
		height:auto;
		overflow:hidden;
		word-wrap:break-word;
		top:36%;
		left:46%;
}

#here2{position:absolute;
		width:auto;
		height:auto;
		overflow:hidden;
		word-wrap:break-word;
		top:66%;
		left:46%;
}

</style>
</head>
<body id=main>
<?php
if(isset($_POST['submit4']))
{echo'<div class=info >you cancelled</div>';
header('refresh:2;url=admin4.php');
}
elseif(isset($_POST['submit3']))
{if(!empty($_POST['ex_name']) && !empty($_POST['tot_marks']))
{$name1=$_POST['ex_name'];
$marks=$_POST['tot_marks'];
$sql2=mysql_query("select * from exam where exam_name='$name1' and total_marks='$marks'");
$result1=mysql_num_rows($sql2);
if($result1>=1)
{echo'<div class=info >already existed</div>';
header('refresh:2;url=admin4.php');
}
else{
$sql1=mysql_query("insert into exam(exam_name,total_marks) values ('$name1','$marks')");
if($sql1==true)
{echo'<div class=info >entry inserted</div>';
header('refresh:2;url=admin4.php');

}else{}
}
}
}?>


<form >
<input type='button' name='add-class' id='a' value='ADD EXAM' onclick='addexam()' />
</form>
<form action="admin4.php" method='POST'>
<p id='insert_exam'></p>
</form>
<?php
if(isset($_POST['submit2']))
{echo'<div class=info >you cancelled</div>';
header('refresh:2;url=admin4.php');
}
elseif(isset($_POST['submit1']))
{

$exam_name=$_POST['select_exam'];
$total_marks=$_POST['select_marks'];
$id = $_POST['id'];
$conn2 = mysql_query("update exam set exam_name='$exam_name',total_marks='$total_marks' where id='$id'");

if($conn2==true)
{
echo'<div class=info >entry updated</div>';
header('refresh:2;url=admin4.php');

}
else{	
	}
}
else if(isset($_GET['edit']))
{
$id1=$_GET['edit'];


echo'<div id=first >';
echo'<form action=admin4.php method=post >';
echo'<p id=details1 >exam details</p>';
echo'<br><br><span id=text1>exam name</span><input type=text name=select_exam class=exam1 id="exam_1" placeholder="ENTER EXAM NAME" onkeyup=transform4(this) />';
echo'<br><span id="here1"></span>';
echo'<br><br><span id=text2>total marks</span><input type=text name=select_marks class=exam2 id="exam_2" placeholder="ENTER EXAM MARKS" onkeyup=transform5(this) />';
echo'<br><span id="here2"></span>';

echo'<input type=hidden name=id value='.$id1.' >';
echo '<br><br><br><button type=submit name=submit1 class=buttons1>UPDATE</button>';
echo '&emsp;<button type=submit name=submit2 class=buttons1>cancel</button>';
echo'</form>'; 
echo'</div>';
}

?>

<div>
<?php
include 'conn.php';
$conn=mysql_query('select * from exam');
echo '<table id=table><tr id=row1><th class=data1>exam name</th><th class=data1>total marks</th><th class=data1>update</th><th class=data1>delete</th>';
echo'</tr>';
while($result=mysql_fetch_array($conn))

	{	$id=$result['id'];
		$exam_name=$result['exam_name'];
		$total_marks=$result['total_marks'];
		
		echo'<tr class=row2>';
		echo'<td class=data2>'.$exam_name.'</td>';
		echo'<td class=data2>'.$total_marks.'</td>';
		echo'<td class=data2>'.'<a href=admin4.php?edit='.$id.'><button type=button name=button1 class=buttons2 >EDIT</button></a>'.'</td>';
		echo '<td class=data2>'.'<a href=delete4.php?delete='.$id.'><button type=button name=button2 class=buttons2 >delete</button></a>'.'</td>';
		echo'</tr>';
			
	
	}echo'</table>';
	?>

	
	</div>
    <script>function addexam()
	{document.getElementById('insert_exam').innerHTML="<p id=details >exam details</p><br><br><span id=text3 >EXAM NAME :</span>  <input type='text' name='ex_name' id='unique3' onkeyup='transform2(this)'/><span id='here3'></span><br/><br/><span id=text4 >TOTAL MARKS : </span> <input type='text' id='unique4' name='tot_marks' onkeyup='transform3(this)'/><span id='here4'></span><br/><br/><button type='submit' name='submit3' class=buttons3 >ADD</button>&emsp;<button type='submit' name='submit4' class=buttons3 >cancel</button>";
	}var check=/^[A-Za-z\s]+$/;
	function transform2(test1)
	{var get=test1.value;
	var get1=get.toUpperCase();
	var res1=check.test(get);
	document.getElementById('unique3').value=get1;
	if(res1==true)
	{if(get.length>=4)
	{document.getElementById('here3').innerHTML=" ";
	}
	else{document.getElementById('here3').innerHTML='ENTER EXAM TYPE';
	}
	}
	else{
	document.getElementById('unique3').value='';
		document.getElementById('here3').innerHTML='ENTER EXAM TYPE';
	
	}
	}
	var check1=/^[0-9]+$/
	function transform3(test2)
		{var res1=test2.value;
	var result1=check1.test(res1);
	if(result1==true)
	{if(res1.length>1)
	{
		document.getElementById('here4').innerHTML="";
	}
	else{document.getElementById('here4').innerHTML='ENTER TOTAL MARKS';
	}
	}else{document.getElementById('unique4').value='';
		document.getElementById('here4').innerHTML='ENTER TOTAL MARKS';
	}
		}
var check2=/^[A-Za-z\s]+$/;
	function transform4(test3)
	{var get3=test3.value;
	var get_3=get3.toUpperCase();
	var res3=check2.test(get3);
	document.getElementById('exam_1').value=get_3;
	if(res3==true)
	{if(get3.length>=4)
	{document.getElementById('here1').innerHTML="";
	}
	else{document.getElementById('here1').innerHTML='ENTER EXAM TYPE';
	}
	}
	else{
	document.getElementById('exam_1').value='';
		document.getElementById('here1').innerHTML='ENTER EXAM TYPE';
	
	}
	}
	var check3=/^[0-9]+$/
	function transform5(test4)
		{var res4=test4.value;
	var result4=check3.test(res4);
	if(result4==true)
	{if(res4.length>1)
	{
		document.getElementById('here2').innerHTML="";
	}
	else{document.getElementById('here2').innerHTML='ENTER TOTAL MARKS';
	}
	}else{document.getElementById('exam_2').value='';
		document.getElementById('here2').innerHTML='ENTER TOTAL MARKS';
	}
		}
		
	</script>
    </body>
    </html>