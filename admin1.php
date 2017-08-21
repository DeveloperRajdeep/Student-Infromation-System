<?php
include 'conn.php';
?>

 <?php
 include 'session.php';
 if(isset($_POST['submit3']))
 {echo '<div class=updated>you cancelled</div>';	
header('refresh:2;url=admin1.php');
 }
elseif(isset($_POST['submit2']))
{
	if(!empty($_POST['c_name']))
	{
	$name1=$_POST['c_name'];
$sql2=mysql_query("select * from class where classname='$name1'");
$result1=mysql_num_rows($sql2);
if($result1>=1)
{echo '<div class=updated>already existed</div>';	
header('refresh:2;url=admin1.php');
}
else{
$sql1=mysql_query("insert into class(classname) values ('$name1')");
if($sql1==1)
{echo '<div class=updated>inserted</div>';	
header('refresh:2;url=admin1.php');
}
}
	}
}?> 
<html>
<head>
<style>
#main{width:100%;
height:100%;
background-image:url(imp_images/wave.png);
background-repea:repeat;
position:absolute;
margin:0px;
padding:0px;
color:#90C;

}
#first{
position:absolute;
top:8%;
left:40%;
width:40%;
height:50%;	
	
text-transform:uppercase;
}
#second{
	position:absolute;
	top:30%;
	width:70%;
	height:70%;
		
}
#edit{
	position:absolute;
	left:31.5%;
	border-radius:5%;
	box-shadow:2px 3px #333333;
	top:40%;
	width:20%;
	height:10%;
	z-index:15;
	padding-left:10%;
	padding:5%;
	background-color:#03F;
	opacity:0.8;
	color:#FFF;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:18px;

}
.updated{
	color:#000;
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
#row1{position:relative;
	color:#FFF;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:22px;

	padding:0%;
		width:100%;
	height:20%;
	background-color:#A7C946;
	z-index:10;
	opacity:1.5;

	
		}
table .row{position:relative;
	opacity:1.0;
	color:#A7C946;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:18px;


	background-color:#EAF2D3;

}

#table1{position:absolute;
	width:100%;
	height:60%;
	opacity:1.0;
	border:ridge #000; 
	left:20%;
	top:10%;
	box-shadow:2px 3px #000; 	
	}
.data1{position:relative;
text-align:center;
border:1px solid #98bf21;

}
#insert_class{
	position:absolute;
	left:31%;
	top:15%;
	padding-top:0%;
	
	background-image:url(fetch.png);
	border-radius:4%;
	width:25%;
	padding-left:5.5%;
	text-align:justify;
box-shadow:2px 3px #333333;
opacity:0.9;
	z-index:20;
	
	color:#FFF;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:20px;
	
}
.txt
{
	width: 200px;
	height:30px;
	border-radius:5px;
}.txt:hover{
	box-shadow: 2px 2px 2px #09f;
}
.a{background-color:#000;
border-radius:14px;
box-shadow:2px 2px #333;
width:25%;
height:12%;
color:white;

font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
.a:hover{width:26%;
		height:13%;
}
.b{background-color:#000;
border-radius:14px;
box-shadow:2px 2px #333;
width:40%;
height:25%;
color:white;
text-transform:uppercase;

font-family:Arial, Helvetica, sans-serif;
font-size:12px;}
.b:hover{width:41%;
		height:26%;
}
.c{background-color:#000;
border-radius:14px;
box-shadow:2px 2px #333;
width:28%;
height:22%;
color:white;
text-transform:uppercase;

font-family:Arial, Helvetica, sans-serif;
font-size:12px;}
.c:hover{width:29%;
		height:23%;
}
.d{background-color:#000;
border-radius:14px;
box-shadow:2px 2px #333;
width:28%;

color:white;
text-transform:uppercase;

font-family:Arial, Helvetica, sans-serif;
font-size:12px;}
.d:hover{width:30%;
		color:#F39;
		
}

</style>
</head>
<body id='main'>
<form>
<div id='first'>

<button type='button' class='a'  name='add-class' onclick='addclass()' >add class</button>
</div></form>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
<p id='insert_class'></p>

</form>

<?php
if(isset($_POST['submit1']))
{echo '<div class=updated>you cancelled</div>';	
header('refresh:2;url=admin1.php');
}
elseif(isset($_POST['submit']))
{

$class=$_POST['select_class'];
$id = $_POST['id'];
$conn2 = mysql_query("update class set classname='$class' where id='$id'");

if($conn2==true)
{echo '<div class=updated>ENTRY UPDATED</div>';	
header('refresh:2;url=admin1.php');
}
else{
	
	}
}
elseif(isset($_GET['id']))
{
$id1=$_GET['id'];


echo'<div id=edit>';
echo'<form action=admin1.php method=post >';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENTER CLASS'.'<br>&nbsp;&nbsp;<input type=text size=25 class=txt name=select_class placeholder="Enter Class Name" id="class_name" onkeyup="transform1(this)">&nbsp;<span id=span></span>'; 
echo'<br>';

echo'<input type=hidden name=id value='.$id1.' >';
echo '&nbsp;&nbsp;<button type=submit class=b name=submit >update</button>';
echo '&nbsp;&nbsp; <button type=submit name=submit1 class=b  >cancel</button>';
echo'</form>'.'</div>'; 
}

?>

<?php echo'<div id=second>';
$conn=mysql_query("select * from class");
echo '<table id=table1>';
echo '<tr id=row1>';
echo'<th class=th>CLASS</th>';
echo '<th class=th>UPDATE</th><th class=th>DELETE</th></tr>';
while($result=mysql_fetch_array($conn))

	{	$id=$result['id'];
		$class_name=$result['classname'];
		
		echo'<tr class=row>';
		echo'<td class=data1>'.$class_name.'</td>';
		echo'<td class=data1>'.'<a href="admin1.php?id='.$id.'"><button type=button class=d>EDIT</button></a>'.'</td>';
		echo '<td class=data1>'.'<a href=delete.php?delete='.$id.'><button type=button class=d>DELETE</button></a>'.'</td>';
		echo'</tr>';
		
	
	}
	echo'</table>';	
	echo '</div>';
	?>
    </div>
	</div>
    <script>function addclass()
	{document.getElementById('insert_class').innerHTML="&emsp;&emsp;&emsp;CLASS <br><br> <input type='text' class=txt id='name' name='c_name' placeholder='        CLASS NAME' onkeyup=transform(this) /><br><span id='af'></span><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' class=c name='submit2' id=button >add</button>&nbsp;&nbsp;<button type=submit class=c name=submit3 >cancel</button><br>";
	}
    var check=/^[A-Za-z\t\s\-]+$/;
	function transform(test)
	{
	 res=test.value;
	document.getElementById('name').value=res.toUpperCase();
		
	 var result=check.test(res);
		
			 
if(result==true)
{	
if(res.length>=2)
{
	document.getElementById('af').innerHTML='';
}else{
		document.getElementById('af').innerHTML="ENTER CLASS NAME";
		}
	
}
	else
	{
		
		document.getElementById('af').innerHTML="ENTER CLASS NAME";
		
		document.getElementById('name').value='';
		
		
	
	
		
	}
	} var check1=/^[A-Za-z\t\s\-]+$/;
	function transform1(test1)
	{
	 res1=test1.value;
	document.getElementById('class_name').value=res1.toUpperCase();
		
	 var result1=check1.test(res1);
		
			 
if(result1==true)
{	
if(res1.length>=2)
{
	document.getElementById('span').innerHTML='';
}else{
		document.getElementById('span').innerHTML="ENTER CLASS NAME";
		}
	
}
	else
	{
		
		document.getElementById('span').innerHTML="ENTER CLASS NAME";
		
		document.getElementById('class_name').value='';
		
		
	
	
		
	}
	}

   </script>
   
  </body>
    </html>