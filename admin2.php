<?php
include 'conn.php';
?><?php
include'session.php';
if(isset($_POST['submit2']))
{echo'<div class=info>you cancelled</div>';
header('refresh:2;url=admin2.php');
}

elseif(isset($_POST['submit1']))
{
if(!empty($_POST['c_name']))

{$name1=$_POST['c_name'];
$sql2=mysql_query("select * from subjects where subject_name='$name1'");
$result1=mysql_num_rows($sql2);
if($result1>=1)
{echo'<div class=info>already exist</div>';
header('refresh:2;url=admin2.php');
}
else{
$sql1=mysql_query("insert into subjects(subject_name) values ('$name1')");
if($sql1==true)
{echo'<div class=info>entry inserted</div>';
header('refresh:2;url=admin2.php');
}
else{}

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
#update{position:absolute;
width:20%;
background-color:#099;
}
#table{position:absolute;
		left:20%;
	   width:60%;
	   height:65%;
		top:34%;
		border-collapse:separate;
}
#row1{background-color:#A7C942;
	color:#FFF;
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
	font-size:19px;

}
.data2{border-style:solid;
	border-color:#98bf21;

}
#insert_class{
	position:absolute;
	left:34%;
	top:12%;
	padding-top:0%;
	
	background-image:url(fetch.png);
	border-radius:4%;
	width:28%;
	padding-left:7.5%;
	text-align:justify;
box-shadow:2px 3px #333333;
opacity:0.9;
	z-index:20;
	text-transform:uppercase;
	text-align:justify;
	color:#FFF;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:20px;
	
}

#a{position:absolute;
	left:44%;
	top:5%;
	background-color:#000;
	text-transform:uppercase;
	width:12%;
	height:6%;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:16px;
	border-radius:16px;
}
#a:hover{width:12.5%;
		height:6.5%;
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
}.buttons2{
		background-color:#000;
	text-transform:uppercase;
	width:26.4%;
	
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:16px;
	border-radius:16px;
}
.buttons2:hover{width:27%;
		color:#C06;
}
.buttons3{
		background-color:#000;
	text-transform:uppercase;
	width:38%;
	
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:16px;
	border-radius:16px;
}
.buttons3:hover{width:40%;
		color:#C06;
}

.sub{

	width: 200px;
	height:30px;
	border-radius:5px;
}.sub:hover{
	box-shadow: 2px 2px 2px #09f;
}
#second{
	position:absolute;
	left:31.5%;
	border-radius:5%;
		box-shadow:2px 3px #333333;
	top:40%;
	width:21%;
	height:15%;
	z-index:15;
	padding:5%;
	
	background-color:#03F;
	opacity:0.8;
	color:#FFF;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:20px;
	
}

.info{color:#000;
	position:absolute;
	width:30%;
	height:10%;
	left:31.5%;
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
	
</style>
</head>

<body id=main>


<form >
<div>
<button type=button name='add-class' id='a' onclick='addsubject()'>add subject</button>
</div>
</form>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
<p id='insert_class'></p>
</form>

<?php
if(isset($_POST['submit3']))
{echo'<div class=info>you cancelled</div>';
header('refresh:2;url=admin2.php');
}
elseif(isset($_POST['submit']))
{

$subject=$_POST['select_subject'];
$id = $_POST['id'];
$conn2 = mysql_query("update subjects set subject_name='$subject' where id='$id'");

if($conn2==true)
{echo'<div class=info>entry updated</div>';
header('refresh:2;url=admin2.php');
}
else{
	header('location:admin2.php');
	}
}
else if(isset($_GET['edit']))
{
$id1=$_GET['edit'];
echo'<div id=second>';
echo'<form action='.$_SERVER['PHP_SELF'].' method=post >';
echo'&emsp;&emsp;SUBJECT<br><br><input type=text name=select_subject class=sub id=subject placeholder="ENTER SUBJECT NAME" onkeyup=transform1(this)><br><span id=here2></span>';

echo'<input type=hidden name=id value='.$id1.' >';
echo '<br><br>&emsp;<button type=submit name=submit class=buttons3 >update</button>';
echo '&nbsp;<button type=submit name=submit3 class=buttons3 >cancel</button>';
echo'</form>'; 
echo'</div>';
}

?>



<?php
include 'conn.php';

$conn=mysql_query('select * from subjects');
echo '<table id=table><tr id=row1><th class=data1>SUBJECT NAME</th><th class=data1>EDIT</th><th class=data1>DELETE</th></tr> ';
while($result=mysql_fetch_array($conn))

	{	$id=$result['id'];
		$subject_name=$result['subject_name'];
		
		echo'<tr class=row2>';
		echo'<td class=data2>'.$subject_name.'</td>';
		echo'<td class=data2>'.'<a href=admin2.php?edit='.$id.'><button type=button name=button1 class=buttons1 >EDIT</button></a>'.'</td>';
		echo '<td class=data2>'.'<a href=delete1.php?delete='.$id.'><button type=button name=button2 class=buttons1>DELETE</button></a>'.'</td>';
		echo'</tr>';
			
	
	}echo'</table>';
	?>

	
	</div>
    <script>function addsubject()
	{document.getElementById('insert_class').innerHTML="&emsp;&emsp;&emsp;subject <br><br> <input type='text' id='unique' placeholder='ENTER SUBJECT NAME' name='c_name' class='sub' onkeyup='transform(this)'/><br><br><span id='here1'></span><br/>&emsp;&emsp;<button type='submit' class=buttons2 name='submit1'/>add</button>&nbsp;&nbsp;&nbsp;<button type='submit' class='buttons2' name='submit2'/>cancel</button>";
	}
	var check=/^[A-Za-z\s\-]+$/;
	function transform(test)
	{
	 var res=test.value;
	var res1=res.toUpperCase();
		document.getElementById('unique').value=res1; 
	
	 var result=check.test(res);
	if(result==true)
{	
if(res.length>=3)
{
	document.getElementById('here1').innerHTML='';
}else{
		document.getElementById('here1').innerHTML="ENTER SUBJECT NAME";
		}
	
}
	else
	{
		
		document.getElementById('here1').innerHTML="ENTER SUBJECT NAME";
	
	
	document.getElementById('unique').value='';
	
	
		
	}
	}
var check1=/^[A-Za-z\s\-]+$/;
	function transform1(test1)
	{
	 var res1=test1.value;
	var res2=res1.toUpperCase();
		document.getElementById('subject').value=res2; 
	
	 var result1=check1.test(res1);
	if(result1==true)
{	
if(res1.length>=3)
{
	document.getElementById('here2').innerHTML='';
}else{
		document.getElementById('here2').innerHTML="ENTER SUBJECT NAME";
		}
	
}
	else
	{
		
		document.getElementById('here2').innerHTML="ENTER SUBJECT NAME";
	
	
	document.getElementById('subject').value='';
	
	
		
	}
	}

    </script>
    </body>
    </html>