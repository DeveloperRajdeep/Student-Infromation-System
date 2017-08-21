<?php
include 'conn.php';
include'session.php';
?>

<?php

if(isset($_POST['submit6']))
{echo '<div class=action>you cancelled</div>';
header('refresh:2;url=admin3.php');

}
elseif(isset($_POST['submit5']))
{if(!empty($_POST['teacher_name']))
{$name1=$_POST['teacher_name'];
$sql2=mysql_query("select * from teacher where teacher_name='$name1'");
$result1=mysql_num_rows($sql2);
if($result1>=1)
{echo '<div class=action>already existed</div>';
header('refresh:2;url=admin3.php');
}
else{
$sql1=mysql_query("insert into teacher(teacher_name) values ('$name1')");
if($sql1==1)
{echo '<div class=action>entry inserted</div>';
header('refresh:2;url=admin3.php');
}else{}
}
}
}?>
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
	height:6%;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:16px;
	border-radius:16px;
	text-align:justify;
}
#a:hover{width:14.5%;
		left:43.5%;
		
	text-align:justify;
		height:6.5%;
}
#table1{position:absolute;
		left:20%;
	   width:60%;
	   height:auto;
	  	right:20%;
		top:38%;
		border-collapse:separate;
}
.buttons1{position:relative;
		background-color:#000;
	text-transform:uppercase;
	width:70%;
	height:auto;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:84%;
	border-radius:16px;
	overflow:hidden;
	word-wrap:break-word;
}
.buttons1:hover{width:72%;
		color:#C06;
}#row1{background-color:#A7C942;
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
#insert_teacher{position:absolute;
	left:34%;
	top:15%;
	
	background-image:url(fetch.png);
	border-radius:4%;
	width:32%;

	text-align:justify;
	box-shadow:2px 3px #333333;
	opacity:0.9;
	z-index:20;
	text-transform:uppercase;
	text-align:justify;
	color:#FFF;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:20px;
	overflow:hidden;
		
}
.text1{position:relative;
		width:auto;
		height:auto;
		left:35%;
		word-wrap:break-word;
		}
.text2{position:relative;
	width:auto;
	height:auto;
	left:35%;
	word-wrap:break-word;
	
}
.teacher1{position:relative;
	left:12.5%;
	width:75%;
	height:30px;
	border-radius:5px;
}.teacher1:hover{
	box-shadow: 2px 2px 2px #09f;
}
.teacher{position:relative;
	left:12.5%;
	width:75%;
	height:30px;
	border-radius:5px;
}.teacher:hover{
	box-shadow: 2px 2px 2px #09f;
}

#second{position:absolute;
	left:35.5%;
	border-radius:5%;
		box-shadow:2px 4px #333333;
	top:40%;
	width:30%;
	background-color:#00F;
	height:auto;
	z-index:15;
	opacity:0.8;
	color:#FFF;
	text-shadow:2px 2px #000000;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:18px;
	overflow:hidden;
	
	
	
}
.buttons3{position:relative;
		background-color:#000;
	text-transform:uppercase;
	width:31.4%;
	left:15%;
	height:auto;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:85%;
	font-weight:700;
	border-radius:16px;
	overflow:hidden;
	word-wrap:break-word;
}
.buttons3:hover{width:31.9%;
		color:#C06;
}
.buttons2{
	position:relative;
	background-color:#000;
	text-transform:uppercase;
	width:39%;
	left:9%;
	height:auto;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:84%;
	font-weight:700;

	border-radius:16px;
	overflow:hidden;
	word-wrap:break-word;
}
.buttons2:hover{width:39.5%;
		color:#C06;
}
.action{color:#000;
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
		left:12%;
}
#here2{position:absolute;
		width:auto;
		height:auto;
		left:10%;
}

</style>
</head>
<body id=main>


<form >
<input type='button' name='add-class' id='a' value='ADD TEACHER' onclick='addteacher()' />
</form>
<form action='admin3.php' method='POST'>
<p id='insert_teacher'></p>
</form>


<?php
if(isset($_POST['submit4']))
{echo '<div class=action>you cancelled</div>';
header('refresh:2;url=admin3.php');
}
elseif(isset($_POST['submit3']))
{

$teacher=$_POST['select_teacher'];
$id = $_POST['id'];
$conn2 = mysql_query("update teacher set teacher_name='$teacher' where id='$id'");

if($conn2==true)
{echo '<div class=action>entry updated</div>';
header('refresh:2;url=admin3.php');

}
else{header('location:admin3.php');
	
	}
}
else if(isset($_GET['edit']))
{
$id1=$_GET['edit'];


echo'<div id=second>';
echo'<form action=admin3.php method=post >';
echo'<span class=text2 >TEACHER</span><br><br><input type=text name=select_teacher class=teacher placeholder="ENTER TEACHER NAME" id=update onkeyup=transform3(this) /><br><span id="here1"  ></span>';
echo'<input type=hidden name=id value='.$id1.' >';
echo '<br><br><button type=submit name=submit3 class=buttons2 >update</button>';
echo'&emsp;<button type=submit name=submit4 class=buttons2>cancel</button>';
echo'</form>'; 
echo'</div>';
}

?>

<?php

$conn=mysql_query('select * from teacher');
echo '<table id=table1>';
echo'<tr id=row1><th class=data1>teacher name</th><th class=data1>update</th><th class=data1>delete</th></tr>';
while($result=mysql_fetch_array($conn))

	{	$id=$result['id'];
		$teacher_name=$result['teacher_name'];
		
		echo'<tr class=row2>';
		echo'<td class=data2>'.$teacher_name.'</td>';
		echo'<td class=data2>'.'<a href=admin3.php?edit='.$id.'><button type=button name=submit1 class=buttons1>edit</button></a>'.'</td>';
		echo '<td class=data2>'.'<a href=delete2.php?delete='.$id.'><button type=button name=submit2 class=buttons1>DELETE</button></a>'.'</td>';
		echo'</tr>';
			
	
	}
	echo'</table>';
	?>

	
	</div>
    <script>function addteacher()
	{document.getElementById('insert_teacher').innerHTML="<br><span class=text1>TEACHER</span>  <br><br><input type='text' name='teacher_name' placeholder='ENTER TEACHER'S NAME' class=teacher1 id='unique2' onkeyup=transform2(this) /><br><span id='here2' ></span><br><br><button type='submit' name='submit5' class=buttons3 >add</button>&emsp;<button type='submit' name='submit6' class=buttons3 >cancel</button>";
	}
	var check=/^[A-Za-z\s]+$/;
	function transform2(test)
	{var res=test.value;
	document.getElementById('unique2').value=res.toUpperCase();
	
	var result=check.test(res);
	if(result==true)
	{if(res.length>5)
	{
		document.getElementById('here2').innerHTML="";}
		else{document.getElementById('here2').innerHTML="ENTER TEACHER'S NAME ";
		}
	
	}
	else{
	document.getElementById('unique2').value='';
	document.getElementById('here2').innerHTML="ENTER TEACHER'S NAME ";
	}
	}
	</script>
    <script>
var check1=/^[A-Za-z\s]+$/;
	function transform3(test1)
	{var res1=test1.value;
	document.getElementById('update').value=res1.toUpperCase();
	
	var result1=check1.test(res1);
	if(result1==true)
	{if(res1.length>5)
	{
		document.getElementById('here1').innerHTML="";
		}
		else{document.getElementById('here1').innerHTML="ENTER TEACHER'S NAME ";
		}
	
	}
	else{
	document.getElementById('update').value='';
	document.getElementById('here1').innerHTML="ENTER TEACHER'S NAME ";
	}
	}
	
	</script>
    </body>
    </html>