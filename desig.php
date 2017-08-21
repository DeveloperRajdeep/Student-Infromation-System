<?php
error_reporting(0);
include 'conn.php';

$get=$_GET['details'];

?>
<html>
<head>
<style>
#main{position:absolute;
	margin:0%;
	padding:0%;
	width:100%;
	height:1500px;
	background-image:url(imp_images/wave.png);
	background-repeat:repeat;
}#first{
		position:fixed;
		width:100%;
		z-index:40;
		height:60px;
		background-color:#000;
}
#second{position:relative;
		width:auto;
		height:auto;
	text-transform:uppercase;
	color:#fff;
	top:14%;
	z-index:60;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:270%;
	z-index:10;
	left:2%;
	text-shadow:2px 3px #93C;
}
#third{position:absolute;
	z-index:10;
	top:60px;
	width:96%;
	left:2%;
	z-index:60;
	height:auto;
	background-color:#30F;
	border-bottom-right-radius:14px;
	border-bottom-left-radius:14px;
	
}
#forth{
	position:fixed;
	top:100px;
	width:100%;
	top:15px;
	height:200px;
	color:#FFF;
	z-index:30;
	text-transform:uppercase;
	
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:20px;
	font-weight:650;
}
.fifth{
	position:relative;
	width:100%;
	margin:0;
	z-index:20;
	padding-left:4%;
	padding-right:4%;
	height:400px;
	color:#FFF;
	}
#first #forth .fifth a{text-decoration:none;
						color:#FFF;
						
						}
#first #forth .fifth:hover{color:#fff;

}
#first #forth .fifth:hover {
	padding-top:20px;
	background-color:#03c;
	padding-bottom:20px;
	
	}
  #center{
	  position:relative;
	  top:10%;
	  width:75%;
	  left:13%;
	  height:1000px;
	  background-image:url(imp_images/1879523.jpg); 
  	  border-radius:12px;
	  border-style:solid;
	  border-width:1px;
	  z-index:0;
  }
    </style>
</head>
<body id=main>
<div id='first'><div id=forth>
<span class=fifth><a href=admin9.php><span class=iner>profile</span></a></span>
<span class=fifth><?php echo'<a href=student_details.php?update='.$get.'>';?> <span class=iner>update</span></a></span>
<span class=fifth><a href=admin9.php?marksheet="<?php echo $get;?>" ><span class=iner>marksheet</span></a></span>
<span class=fifth><a href=admin9.php?identity="<?php echo $get;?>" ><span class=iner>identity card</span></a></span>
</div>

</div>
<div id='third'>

<div id='second'>

student profile


</div>
</div>

<div id=center>
<?php
$conn=mysql_query("select * from student_details where roll_no='$get' ");
$result=mysql_num_rows($conn);
if($result>=1)
{
while($total=mysql_fetch_array($conn))
{$name=$total['student_name'];
echo $name;
}

}


?>

<?php
if(isset($_GET['main']))

{echo '<div id=stname>';
$get1=$_GET['main'];
echo $get1;
$conn=mysql_query("select * from student_details where roll_no='$get1' ");
$result=mysql_num_rows($conn);
if($result>=1)
{
while($total=mysql_fetch_array($conn))
{$name=$total['student_name'];
echo $name;
}

}
else{
}
}
?>
<?php
if(isset($_GET['update']))
{echo'<form action=student_details.php method=post>';
echo'<input type=checkbox name=a>';
echo'</form>';
}
?>

	
</div>



