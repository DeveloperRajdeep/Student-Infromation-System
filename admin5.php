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
}#table{position:absolute;
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
.buttons2{
		background-color:#000;
	text-transform:uppercase;
	width:70%;
	height:auto;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:84%;
	border-radius:16px;
	overflow:hidden;
	}
.buttons2:hover{width:72%;
		color:#C06;
}

#insert_session{position:absolute;
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
		top:39%;
}
#unique5{position:absolute;
		width:20%;
		height:auto;
		top:37%;
		left:44%;
		border-top-left-radius:18px;
		border-bottom-right-radius:18px;
}
#unique5:hover{border-color:#00F;
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
#here4{position:absolute;
		width:auto;
		height:auto;
		overflow:hidden;
		word-wrap:break-word;
		top:57%;
		left:46%;
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
		left:30%;
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
		top:37%;
}
#unique6{position:absolute;
		width:35%;
		height:auto;
		top:35%;
		left:49%;
		border-top-left-radius:18px;
		border-bottom-right-radius:18px;
}
#unique6:hover{border-color:#00F;
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
#here1{position:absolute;
		width:auto;
		height:auto;
		overflow:hidden;
		word-wrap:break-word;
		top:48%;
		left:46%;
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

</style>
</head>
<body id=main>
<?php
if(isset($_POST['submit2']))
{echo'<div class=info >you cancelled</div>';
header('refresh:2;url=admin5.php');
}
elseif(isset($_POST['submit1']))
{
if(!empty($_POST['session1']))

{$name1=$_POST['session1'];
$sql2=mysql_query("select * from session where session='$name1'");
$result1=mysql_num_rows($sql2);
if($result1>=1)
{echo'<div class=info >already exist</div>';
header('refresh:2;url=admin5.php');
}
else{
$sql1=mysql_query("insert into session(session) values ('$name1')");
if($sql1==true)
{echo'<div class=info >entry inserted</div>';
header('refresh:2;url=admin5.php');
}
else{}
}
}
}?>
<?php
if(isset($_POST['submit4']))
{echo'<div class=info >you cancelled</div>';
header('refresh:2;url=admin5.php');
}

elseif(isset($_POST['submit3']))

{
$session=$_POST['session'];
$id = $_POST['id'];
$conn2 = mysql_query("update session set session='$session' where id='$id'");

if($conn2==true)
{
{echo'<div class=info >entry updated</div>';
header('refresh:2;url=admin5.php');
}

}
else{
	}
}
else if(isset($_GET['edit']))
{
$id1=$_GET['edit'];

echo'<div id=first>';

echo'<form action=admin5.php method=post >';
echo'<p id=details1>session details</p>';
echo'<br><br><span id=text1>SESSION :</span>';
echo'<input type="text" name="session" class=session1 id="unique6" placeholder="ENTER SESSION" onkeyup=validate1(this)>'.'<br>';
echo'<br><span id="here1"></span>';
echo'<input type=hidden name=id value='.$id1.' >';
echo '<br><br><button type=submit name=submit3 class=buttons1 >UPDATE </button>';
echo'&emsp;<button type=submit name=submit4 class=buttons1 >CANCEL </button>';
echo'</form>'; 
echo'</div>';
}

?>


<div>
<form >
<input type='button' name='add-class' id='a' value='ADD SESSION' onclick='addsession()' />
</form>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
<p id='insert_session'></p>
</form>
</div>
<div>

<?php
include 'conn.php';
$conn=mysql_query('select * from session');
echo '<table id=table><tr id=row1><th class=data1>session</th><th class=data1>update</th><th class=data1>delete</th>';
echo'</tr>';

while($result=mysql_fetch_array($conn))

	{	$id=$result['id'];
		$session=$result['session'];
		
		echo'<tr class=row2>';
		echo'<td class=data2>'.$session.'</td>';
		echo'<td class=data2>'.'<a href=admin5.php?edit='.$id.'><button type=button name=button1 class=buttons2 >EDIT</button> </a>'.'</td>';
		echo '<td class=data2>'.'<a href=delete5.php?delete='.$id.'><button type=button name=button2 class=buttons2 >DELETE</button></a>'.'</td>';
		echo'</tr>';
			
	
	}
	echo'</table>';
	?>
	
	</div>
    
    <script>
    function addsession()
	{document.getElementById('insert_session').innerHTML="<p id=details >session details</p><span id=text3 >SESSION: </span> <input type='text' name='session1' id='unique5' onkeyup='transform(this)' ><br><br><span id='here4'></span><br/><br/><br/><br/><button type='submit' class=buttons3 name='submit1'>ADD</button>&emsp;<button type='submit' class=buttons3 name='submit2'>cancel</button><br/><br/>";
	}
	var check=/^[\d\-\s]+$/;
	function transform(test)
		{var res=test.value;
	var result=check.test(res);
	if(result==true)
	{if(res.length>8)
	{
		document.getElementById('here4').innerHTML="";
	}else{
		document.getElementById('here4').innerHTML='ENTER SESSION';
		}
	}
		else{document.getElementById('unique5').value='';
			document.getElementById('here4').innerHTML="ENTER SESSION";
		}
	}
	
		</script>
        <script>

	var check1=/^[\d\-\s]+$/;
	function validate1(test3)
		{var res2=test3.value;
	var result5=check1.test(res2);
	if(result5==true)
	{if(res2.length>8)
	{
		document.getElementById('here1').innerHTML="";
	}else{
		document.getElementById('here1').innerHTML='ENTER SESSION';
		}
	}
		else{document.getElementById('unique6').value='';
			document.getElementById('here1').innerHTML="ENTER SESSION";
		}
	}
	</script>

    </body>
    </html>