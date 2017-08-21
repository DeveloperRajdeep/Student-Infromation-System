<?php
error_reporting(0);
session_start();

include 'conn.php';
$get=$_GET['details'];
$query=mysql_query("select * from student_details where roll_no='$get'");
if($query==true)
{while($final=mysql_fetch_array($query))
{$get1=$final['roll_no'];
$_SESSION['no']=$get1;
}
}
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
	text-shadow:1px 3px #93C;
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
	left:5%;
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
	  height:3500px;
	  background-image:url(imp_images/1879523.jpg); 
  	  border-radius:11px;
	  border-style:solid;
	  border-width:1px;
	  z-index:0;
  }
  #picture{position:absolute;
  			width:auto;
			height:auto;
			top:5%;
	
  }

#photo1{position:absolute;
width:auto;
height:auto;
text-transform:uppercase;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:18px;
font-weight:600;
left:61px;
background-color:#FFF;
border-radius:10px;
border-style:solid;
border-width:1px;
border-color:#333;
top:-40px;
}
#picture2{position:absolute;
	
	left:30px;
	top:0px;
}
#picture3{	border-radius:8px;
	border-style:solid;
border-width:1px;
border-color:#333;
width:200px;
	height:150px;
}
	 #student{
		 position:absolute;
		 width:80%;
		 height:11%;
		 top:11.5%;
		 left:10%;
		 background-image:url(imp_images/1879523.jpg);
		 color:#000;
		 border-radius:4%;
		 border-color:#333;
		 border-style:solid;
		 border-size:1px;
	 }
	 #student1{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:15%;
	 text-transform:uppercase;
	 font-weight:600;
		text-shadow:1px 1px #999;
	 }
	 #s_details1{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:15%;
	 text-transform:uppercase;
	 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#student2{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:22%;;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #s_details2{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:22%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#student3{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:29%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #s_details3{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:29%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#student4{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:36%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #s_details4{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:36%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#student5{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:43%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #s_details5{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:43%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#student6{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:50%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #s_details6{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:50%;
	 text-transform:uppercase;

 font-weight:600;
		text-shadow:1px 1px #999;
	 }
#student7{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:57%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #s_details7{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:57%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

#student8{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:64%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #s_details8{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:64%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

#student9{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:71%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #s_details9{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:71%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

#student10{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:78%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #s_details10{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:78%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }


	 #students{
		 position:absolute;
		  width:auto;
		  font-family:Georgia, "Times New Roman", Times, serif;
		  font-size:18px;
		  font-weight:600;
		  text-transform:uppercase;
		 background-color:#06F;
		  padding:2%;
		  color:#FFF;
		  border-radius:11px;
		  border-style:solid;
		  border-color:#333;
		  border-width:1px;
	 height:auto;
	 left:-10%;
	 top:-3%;
	 }

	 #address{ position:absolute;
		 width:80%;
		 height:12%;
		 top:26%;
		 left:10%;
		 background-image:url(imp_images/1879523.jpg);
		 color:#000;
		 border-radius:4%;
		 border-color:#333;
		 border-style:solid;
		 border-size:1px;
		 word-wrap:break-word;


	 }
	 #address1{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:15%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details1{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:15%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#address2{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:22%;;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details2{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:22%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#address3{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:29%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details3{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:29%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#address4{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:36%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details4{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:36%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#address5{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:43%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details5{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:43%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#address6{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:50%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details6{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:50%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#address7{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:57%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details7{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:57%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

#address8{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:64%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details8{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:64%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

#address9{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:71%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details9{position:absolute;
	 width:40%;
	 height:auto;
	 left:58%;
	 top:71%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;
		word-wrap:break-word;
		
	 }

#address10{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:82%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #address_details10{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:82%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }


	 #addresses{
		 position:absolute;
		  width:auto;
		  font-family:Georgia, "Times New Roman", Times, serif;
		  font-size:18px;
		  font-weight:600;
		  text-transform:uppercase;
		 background-color:#06F;
		  padding:2%;
		  color:#FFF;
		  border-radius:11px;
		  border-style:solid;
		  border-color:#333;
		  border-width:1px;
	 height:auto;
	 left:-10%;
	 top:-3%;
	 }

 #guardian{ position:absolute;
		 width:80%;
		 height:12%;
		 top:42%;
		 left:10%;
		 background-image:url(imp_images/1879523.jpg);
		 color:#000;
		 border-radius:4%;
		 border-color:#333;
		 border-style:solid;
		 border-size:1px;

	  }
	  #guardians{
		   position:absolute;
		  width:auto;
		  font-family:Georgia, "Times New Roman", Times, serif;
		  font-size:18px;
		  font-weight:600;
		  text-transform:uppercase;
		 background-color:#06F;
		  padding:2%;
		  color:#FFF;
		  border-radius:11px;
		  border-style:solid;
		  border-color:#333;
		  border-width:1px;
	 height:auto;
	 left:-10%;
	 top:-3%;
	 } #guardian1{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:15%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #guardian_details1{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:15%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#guardian2{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:25%;;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #guardian_details2{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:25%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#guardian3{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:35%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #guardian_details3{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:35%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#guardian4{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:45%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #guardian_details4{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:45%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#guardian5{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:55%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #guardian_details5{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:55%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#guardian6{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:65%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #guardian_details6{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:65%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#guardian7{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:75%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #guardian_details7{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:75%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

 #medical{ position:absolute;
		 width:80%;
		 height:6%;
		 top:58%;
		 left:10%;
		 background-image:url(imp_images/1879523.jpg);
		 color:#000;
		 border-radius:4%;
		 border-color:#333;
		 border-style:solid;
		 border-size:1px;

	  } 
	  #medicals{
		   position:absolute;
		  width:auto;
		  font-family:Georgia, "Times New Roman", Times, serif;
		  font-size:18px;
		  font-weight:600;
		  text-transform:uppercase;
		  background-color:#06F;
		  padding:2%;
		  color:#FFF;
		  border-radius:11px;
		  border-style:solid;
		  border-color:#333;
		  border-width:1px;
	 height:auto;
	 left:-10%;
	 top:-6%;}
	  #medical1{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:35%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #medical_details1{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:35%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#medical2{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:55%;;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #medical_details2{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:55%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
 #security{ position:absolute;
		 width:80%;
		 height:6%;
		 top:68%;
		 left:10%;
		 background-image:url(imp_images/1879523.jpg);
		 color:#000;
		 border-radius:4%;
		 border-color:#333;
		 border-style:solid;
		 border-size:1px;

	 }
	   #securitys{
		   position:absolute;
		  width:auto;
		  font-family:Georgia, "Times New Roman", Times, serif;
		  font-size:18px;
		  font-weight:600;
		  text-transform:uppercase;
		  background-color:#06F;
		  padding:2%;
		  color:#FFF;
		  border-radius:11px;
		  border-style:solid;
		  border-color:#333;
		  border-width:1px;
	 height:auto;
	 left:-10%;
	 top:-6%;}
	
	#security1{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:35%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #security_details1{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:35%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#security2{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:55%;;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #security_details2{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:55%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#security3{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:75%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #security_details3{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:75%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#subjects{ position:absolute;
		 width:80%;
		 height:18%;
		 top:78%;
		 left:10%;
		 background-image:url(imp_images/1879523.jpg);
		 color:#000;
		 border-radius:4%;
		 border-color:#333;
		 border-style:solid;
		 border-size:1px;

	 }
	   #subject{
		   position:absolute;
		  width:auto;
		  font-family:Georgia, "Times New Roman", Times, serif;
		  font-size:18px;
		  font-weight:600;
		  text-transform:uppercase;
		  background-color:#06F;
		  padding:2%;
		  color:#FFF;
		  border-radius:11px;
		  border-style:solid;
		  border-color:#333;
		  border-width:1px;
	 height:auto;
	 left:-10%;
	 top:-6%;}
	  #sub1{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:15%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject1{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:15%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#sub2{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:22%;;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject2{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:22%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#sub3{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:29%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject3{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:29%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#sub4{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:36%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject4{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:36%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#sub5{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:43%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject5{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:43%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#sub6{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:50%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject6{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:50%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#sub7{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:57%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject7{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:57%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

#sub8{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:64%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject8{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:64%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

#sub9{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:71%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject9{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:71%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

#sub10{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:78%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject10{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:78%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }

#sub11{position:absolute;
	 width:auto;
	 height:auto;
	 left:16%;
	 top:85%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
	 #subject11{position:absolute;
	 width:auto;
	 height:auto;
	 left:58%;
	 top:85%;
	 text-transform:uppercase;
 font-weight:600;
		text-shadow:1px 1px #999;

	 }
#profile{position:absolute;
		width:60%;
		height:70%;
		top:10%;
		left:20.7%;
		background-color:#fff;
		opacity:1.89;
    	border-style:solid;
		border-color:#000;
		border-radius:14px;
		border-width:1px;
		color:#000;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:95%;
		font-weight:600;
		text-transform:uppercase;
}
#stdnt{position:absolute;
top:0.4%;
left:1%;
width:20%;
padding:0.5%;
text-align:center;
background-color:#0f3;
color:#fff;
border-style:solid;
border-radius:14px;
border-width:1px;
border-color:#666;
font-family:Georgia, "Times New Roman", Times, serif;
		font-size:95%;
		font-weight:600;
		text-transform:uppercase;
		text-shadow:1px 1px #333;
}
	

#check1{position:absolute;
	width:auto;
	height:auto;
	top:3%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;
}
#check2{position:absolute;
	width:auto;
	height:auto;
	top:5%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;
}
#check3{position:absolute;
	width:auto;
	height:auto;
	top:7%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;
}#check4{position:absolute;
	width:auto;
	height:auto;
	top:9%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;
}#check5{position:absolute;
	width:auto;
	height:auto;
	top:11%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;
}#check6{position:absolute;
	width:auto;
	height:auto;
	top:3%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;
}#check7{position:absolute;
	width:auto;
	height:auto;
	top:5%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;
}#check8{position:absolute;
	width:auto;
	height:auto;
	top:7%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;
}#check9{position:absolute;
	width:auto;
	height:auto;
	top:9%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;
}#check20{position:absolute;
	width:auto;
	height:auto;
	top:11%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#adrss{position:absolute;
top:17%;
left:1%;
width:20%;
padding:0.5%;
text-align:center;
background-color:#0f3;
color:#fff;
border-style:solid;
border-radius:14px;
border-width:1px;
border-color:#666;
font-family:Georgia, "Times New Roman", Times, serif;
		font-size:95%;
		font-weight:600;
		text-transform:uppercase;
		text-shadow:1px 1px #333;
}
#check10{position:absolute;
	width:auto;
	height:auto;
	top:20%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check11{position:absolute;
	width:auto;
	height:auto;
	top:22%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check12{position:absolute;
	width:auto;
	height:auto;
	top:24%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check13{position:absolute;
	width:auto;
	height:auto;
	top:26%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check14{position:absolute;
	width:auto;
	height:auto;
	top:28%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check15{position:absolute;
	width:auto;
	height:auto;
	top:20%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check16{position:absolute;
	width:auto;
	height:auto;
	top:22%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check17{position:absolute;
	width:auto;
	height:auto;
	top:24%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check18{position:absolute;
	width:auto;
	height:auto;
	top:26%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check19{position:absolute;
	width:auto;
	height:auto;
	top:28%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#grds{position:absolute;
top:34%;
left:1%;
width:20%;
padding:0.5%;
text-align:center;
background-color:#0f3;
color:#fff;
border-style:solid;
border-radius:14px;
border-width:1px;
border-color:#666;
font-family:Georgia, "Times New Roman", Times, serif;
		font-size:95%;
		font-weight:600;
		text-transform:uppercase;
		text-shadow:1px 1px #333;
}
#check21{position:absolute;
	width:auto;
	height:auto;
	top:37%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check22{position:absolute;
	width:auto;
	height:auto;
	top:39%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check23{position:absolute;
	width:auto;
	height:auto;
	top:41%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check24{position:absolute;
	width:auto;
	height:auto;
	top:43%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check25{position:absolute;
	width:auto;
	height:auto;
	top:37%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check26{position:absolute;
	width:auto;
	height:auto;
	top:39%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check27{position:absolute;
	width:auto;
	height:auto;
	top:41%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#mdcs{position:absolute;
top:47%;
left:1%;
width:20%;
padding:0.5%;
text-align:center;
background-color:#0f3;
color:#fff;
border-style:solid;
border-radius:14px;
border-width:1px;
border-color:#666;
font-family:Georgia, "Times New Roman", Times, serif;
		font-size:95%;
		font-weight:600;
		text-transform:uppercase;
		text-shadow:1px 1px #333;
}
#check28{position:absolute;
	width:auto;
	height:auto;
	top:50%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}#check29{position:absolute;
	width:auto;
	height:auto;
	top:50%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}

#pic{position:absolute;
top:56%;
left:1%;
width:20%;
padding:0.5%;
text-align:center;
background-color:#0f3;
color:#fff;
border-style:solid;
border-radius:14px;
border-width:1px;
border-color:#666;
font-family:Georgia, "Times New Roman", Times, serif;
		font-size:95%;
		font-weight:600;
		text-transform:uppercase;
		text-shadow:1px 1px #333;
}
#check30{position:absolute;
	width:auto;
	height:auto;
	top:59%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#secqs{position:absolute;
top:65%;
left:1%;
width:20%;
padding:0.5%;
text-align:center;
background-color:#0f3;
color:#fff;
border-style:solid;
border-radius:14px;
border-width:1px;
border-color:#666;
font-family:Georgia, "Times New Roman", Times, serif;
		font-size:95%;
		font-weight:600;
		text-transform:uppercase;
		text-shadow:1px 1px #333;
}
#check31{position:absolute;
	width:auto;
	height:auto;
	top:68%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check32{position:absolute;
	width:auto;
	height:auto;
	top:70%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check33{position:absolute;
	width:auto;
	height:auto;
	top:68%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#sbjs{position:absolute;
top:73%;
left:1%;
width:20%;
padding:0.5%;
text-align:center;
background-color:#0f3;
color:#fff;
border-style:solid;
border-radius:14px;
border-width:1px;
border-color:#666;
font-family:Georgia, "Times New Roman", Times, serif;
		font-size:95%;
		font-weight:600;
		text-transform:uppercase;
		text-shadow:1px 1px #333;
}
#check34{position:absolute;
	width:auto;
	height:auto;
	top:77%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check35{position:absolute;
	width:auto;
	height:auto;
	top:79%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check36{position:absolute;
	width:auto;
	height:auto;
	top:81%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check37{position:absolute;
	width:auto;
	height:auto;
	top:83%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check38{position:absolute;
	width:auto;
	height:auto;
	top:85%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check39{position:absolute;
	width:auto;
	height:auto;
	top:87%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check40{position:absolute;
	width:auto;
	height:auto;
	top:89%;
	left:10%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check41{position:absolute;
	width:auto;
	height:auto;
	top:77%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check42{position:absolute;
	width:auto;
	height:auto;
	top:79%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check43{position:absolute;
	width:auto;
	height:auto;
	top:81%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#check44{position:absolute;
	width:auto;
	height:auto;
	top:83%;
	left:60%;
	font-size:15px;
	text-shadow:1px 1px #CCC;

}
#select{position:absolute;
width:11%;
height:3%;
background-color:#000;
border-radius:12px;
color:#FFF;
border-bottom-style:solid;
border-color:#CCC;
border-width:2px;
top:94%;
left:40%;
text-transform:uppercase;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:14px;
font-weight:500;
padding:0.5%;

}
#select:hover{width:11.4%;
	height:3.5%;
}
#cancel{position:absolute;
width:11%;
height:3%;
background-color:#000;
border-radius:12px;
color:#FFF;
border-bottom-style:solid;
border-color:#CCC;
border-width:2px;
top:94%;
left:55%;
text-transform:uppercase;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:14px;
font-weight:500;
padding:0.5%;

}
#cancel:hover{width:11.4%;
	height:3.5%;
}
#dv{position:absolute;
	width:65%;
	height:auto;
	left:17.7%;
	top:10%;
	background-color:#FFF;
	color:#000;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:14px;
	font-weight:600;
	border-radius:10px;
	border-style:solid;
	border-color:#000;
	border-width:1px;
}



    </style>
</head>
<body id=main>
<div id='first'><div id=forth>
<span class=fifth><a href=student_details.php><span class=iner>profile</span></a></span>
<span class=fifth><?php echo'<a href=student_details.php?update1='.$_SESSION['no'].'>';?> <span class=iner>update</span></a></span>
<span class=fifth><a href=admin9.php><span class=iner>admin</span></a></span>
</div>

</div>
<div id='third'>

<div id='second'>

student profile


</div>
</div>

<div id=center>
<?php
$unique=$_SESSION['no'];
$conn=mysql_query("select * from student_details where roll_no='$unique' ");
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
echo '<span id=student9>migration:</span><div id=s_details9>'.$migration.'</div>';
echo '<span id=student10>date-of-birth:</span><div id=s_details10>'.$dob.'</div>';
echo'</div>';
}

}
$conn1=mysql_query("select * from address_details where roll_no='$unique' ");
$result1=mysql_num_rows($conn1);
if($result1>=1)
{while($total1=mysql_fetch_array($conn1))
{$present_address=$total1['present_address'];
$permanent_address=$total1['permanent_address'];
$locality=$total1['locality'];
$ctv=$total1['city_town_village'];
$residence=$total1['residence'];
$district=$total1['district'];
$state=$total1['state'];
$pincode=$total1['pincode'];
$email=$total1['e_mail'];
$mobile=$total1['mobile_no'];
echo'<div id=address>';
echo'<span id=addresses>address details</span>';
echo'<span id=address1>present address:</span><div id=address_details1>'.$present_address.'</div>';
echo'<span id=address2>permanent address:</span><div id=address_details2>'.$permanent_address.'</div>';
echo'<span id=address3>locality:</span><div id=address_details3>'.$locality.'</div>';
echo'<span id=address4>city/town/village:</span><div id=address_details4>'.$ctv.'</div>';
echo'<span id=address5>residence:</span><div id=address_details5>'.$residence.'</div>';
echo'<span id=address6>district:</span><div id=address_details6>'.$district.'</div>';
echo'<span id=address7>state:</span><div id=address_details7>'.$state.'</div>';
echo'<span id=address8>pincode:</span><div id=address_details8>'.$pincode.'</div>';
echo'<span id=address9>email:</span><div id=address_details9>'.$email.'</div>';
echo'<span id=address10>mobile:</span><div id=address_details10>'.$mobile.'</div>';

echo'</div>';
}

}
$conn2=mysql_query("select * from guardian_details where roll_no='$unique'");
$result2=mysql_num_rows($conn2);
if($result2>=1)
{
	while($total2=mysql_fetch_array($conn2))
	{$father_name=$total2['father_guardian_name'];
	$mother_name=$total2['mother_name'];
	$father_qualification=$total2['father_qualification'];
	$mother_qualification=$total2['mother_qualification'];
	$father_occupation=$total2['father_occupation'];
	$mother_occupation=$total2['mother_occupation'];
	$father_no=$total2['father_no'];
	echo'<div id=guardian >';
	echo'<span id=guardians> guardian details</span>';
	echo'<span id=guardian1>father/guardian name :</span><div id=guardian_details1>'.$father_name.'</div>';
	echo'<span id=guardian2>mother name :</span><div id=guardian_details2>'.$mother_name.'</div>';
	echo'<span id=guardian3>father qualification :</span><div id=guardian_details3>'.$father_qualification.'</div>';
	echo'<span id=guardian4>mother qualification :</span><div id=guardian_details4>'.$mother_qualification.'</div>';
	echo'<span id=guardian5>father occupation :</span><div id=guardian_details5>'.$father_occupation.'</div>';
	echo'<span id=guardian6>mother occupation :</span><div id=guardian_details6>'.$mother_occupation.'</div>';
	echo'<span id=guardian7>father mobile no :</span><div id=guardian_details7>'.$father_no.'</div>';
	echo'</div>';
	}
	}
	$conn3=mysql_query("select * from medical_details where roll_no='$unique'");
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
	$conn4=mysql_query("select * from picture where rollno='$unique'");
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
$conn5=mysql_query("select * from security_details where roll_no='$unique'");
$result4=mysql_num_rows($conn5);
if($result4>=1)
{while($total4=mysql_fetch_array($conn5))
{$security_question=$total4['security_question'];
$answer=$total4['security_answer'];
$username=$total4['username'];
$password=$total4['password'];
echo'<div id=security>';
echo'<span id=securitys>security details</span>';
echo'<span id=security1>security question :</span><div id=security_details1>'.$security_question.'</div>';
echo'<span id=security2>security answer :</span><div id=security_details2>'.$answer.'</div>';
echo'<span id=security3>username :</span><div id=security_details3>'.$username.'</div>';
echo'<span id=security4>password :</span><div id=security_details4>'.$password.'</div>';
echo'</div>';

}
}
$conn6=mysql_query("select * from subject_taken where roll_no='$unique'");
$result5=mysql_num_rows($conn6);
if($result5>=1)
{while($total5=mysql_fetch_array($conn6))
{
	$sub1=$total5['sub1'];
	$sub2=$total5['sub2'];
	$sub3=$total5['sub3'];
	$sub4=$total5['sub4'];
	$sub5=$total5['sub5'];
	$sub6=$total5['sub6'];
	$sub7=$total5['sub7'];
	$sub8=$total5['sub8'];
	$sub9=$total5['alt9'];
	$sub10=$total5['alt10'];
	$sub12=$total5['alt11'];
	echo'<div id=subjects>';
	echo'<span id=subject>subject taken</span>';
	echo'<span id=sub1>subject1 :</span><div id=subject1>'.$sub1.'</div>';
	echo'<span id=sub2>subject2 :</span><div id=subject2>'.$sub2.'</div>';
	echo'<span id=sub3>subject3 :</span><div id=subject3>'.$sub3.'</div>';
	echo'<span id=sub4>subject4 :</span><div id=subject4>'.$sub4.'</div>';
	echo'<span id=sub5>subject5 :</span><div id=subject5>'.$sub5.'</div>';
	echo'<span id=sub6>subject6 :</span><div id=subject6>'.$sub6.'</div>';
	echo'<span id=sub7>subject7 :</span><div id=subject7>'.$sub7.'</div>';
	echo'<span id=sub8>subject8 :</span><div id=subject8>'.$sub8.'</div>';
	echo'<span id=sub9>subject9(alt) :</span><div id=subject9>'.$sub9.'</div>';
	echo'<span id=sub10>subject10(alt) :</span><div id=subject10>'.$sub10.'</div>';
	echo'<span id=sub11>subject11(alt) :</span><div id=subject11>'.$sub11.'</div>';
	echo'</div>';
}
}


?>
</div>
<div>

<?php
if(isset($_GET['update1']))
{echo'<div id=profile>';
echo'<form action=student_details.php method=post>';
echo'<div id=stdnt>student details</div><br><br><br>';
echo'<p id=check2>student name<input id=check_2 type=checkbox name=checkbox2></p>';
echo'<p id=check3>class<input id=check_3 type=checkbox name=checkbox3></p>';
echo'<p id=check4>age<input id=check_4 type=checkbox name=checkbox4></p>';
echo'<p id=check5>gender<input id=check_5 type=checkbox name=checkbox5></p>';
echo'<p id=check6>nationality<input id=check_6 type=checkbox name=checkbox6></p>';
echo'<p id=check7>religion<input id=check_7 type=checkbox name=checkbox7></p>';
echo'<p id=check8>cast<input id=check_8 type=checkbox name=checkbox8></p>';
echo'<p id=check9>migration<input id=check_9 type=checkbox name=checkbox9></p>';
echo'<div id=adrss>address details</div><br><br><br>';
echo'<p id=check10>present address<input id=check_10 type=checkbox name=checkbox10></p>';
echo'<p id=check11>permanent address<input id=check_11 type=checkbox name=checkbox11></p>';
echo'<p id=check12>locality<input id=check_12 type=checkbox name=checkbox12></p>';
echo'<p id=check13>city/toen/village<input id=check_13 type=checkbox name=checkbox13></p>';
echo'<p id=check14>residence<input id=check_14 type=checkbox name=checkbox14></p>';
echo'<p id=check15>district<input id=check_15 type=checkbox name=checkbox15></p>';
echo'<p id=check16>state<input id=check_16 type=checkbox name=checkbox16></p>';
echo'<p id=check17>pincode<input id=check_17 type=checkbox name=checkbox17></p>';
echo'<p id=check18>email<input id=check_18 type=checkbox name=checkbox18></p>';
echo'<p id=check19>mobile no<input id=check_19 type=checkbox name=checkbox19></p>';
echo'<p id=check20>date of birth<input id=check_20 type=checkbox name=checkbox20></p>';
echo'<div id=grds>guardian details</div><br><br><br>';
echo'<p id=check21>father/guardian name<input id=check_21 type=checkbox name=checkbox21></p>';
echo'<p id=check22>mother name<input id=check_22 type=checkbox name=checkbox22></p>';
echo'<p id=check23>father qualification<input id=check_23 type=checkbox name=checkbox23></p>';
echo'<p id=check24>mother qualification<input id=check_24 type=checkbox name=checkbox24></p>';
echo'<p id=check25>father occupation<input id=check_25 type=checkbox name=checkbox25></p>';
echo'<p id=check26>mother occupation<input id=check_26 type=checkbox name=checkbox26></p>';
echo'<p id=check27>father mobile no<input id=check_27 type=checkbox name=checkbox27></p>';
echo'<div id=mdcs>medical details</div><br><br><br>';
echo'<p id=check28>blood group<input id=check_28 type=checkbox name=checkbox28></p>';
echo'<p id=check29>identification<input id=check_29 type=checkbox name=checkbox29></p>';
echo'<div id=pic>profile picture</div><br><br><br>';
echo'<p id=check30>user photo<input id=check_30 type=checkbox name=checkbox30></p>';
echo'<div id=secqs>sequrity details</div><br><br><br>';
echo'<p id=check31>security question<input id=check_31 type=checkbox name=checkbox31></p>';
echo'<p id=check32>security answer<input id=check_32 type=checkbox name=checkbox32></p>';
echo'<p id=check33>username<input id=check_33 type=checkbox name=checkbox33></p>';
echo'<div id=sbjs>subject details</div><br><br><br>';
echo'<p id=check34>subject1<input id=check_33 type=checkbox name=checkbox34></p>';
echo'<p id=check35>subject2<input id=check_33 type=checkbox name=checkbox35></p>';
echo'<p id=check36>subject3<input id=check_33 type=checkbox name=checkbox36></p>';
echo'<p id=check37>subject4<input id=check_33 type=checkbox name=checkbox37></p>';
echo'<p id=check38>subject5<input id=check_33 type=checkbox name=checkbox38></p>';
echo'<p id=check39>subject6<input id=check_33 type=checkbox name=checkbox39></p>';
echo'<p id=check40>subject7<input id=check_33 type=checkbox name=checkbox40></p>';
echo'<p id=check41>subject8<input id=check_33 type=checkbox name=checkbox41></p>';
echo'<p id=check42>subject9(alt)<input id=check_33 type=checkbox name=checkbox42></p>';
echo'<p id=check43>subject10(alt)<input id=check_33 type=checkbox name=checkbox43></p>';
echo'<p id=check44>subject11(alt)<input id=check_33 type=checkbox name=checkbox44></p>';

echo'<input type=submit id=select name=submits1 value=select>';
echo'</form>';
echo'<form action=student_details.php method=post>';
echo'<input type=submit id=cancel name=submits2 value=cancel>';
echo'</form>';
echo'</div>';
}
?>
<?php
if(isset($_POST['submits1']))
{echo'<div id=dv>';
	echo'<form action=student_details.php method=post>';

	if(isset($_POST['checkbox2']))
{echo'<div id=dv1><br><br>STUDENT DETAILS</div>';
		echo'<span id=ud1><br><br>student name :<input type=text id=updt1 name=name1 ></span>';
		
}
if(isset($_POST['checkbox3']))
{
	echo'<br><br><span id=ud2>class :';
	echo'<select name=name2 id=updt2>';
	echo'<option value="">CHOOSE</option>'; 
 
	$sql1=mysql_query("select * from class ");
		while($rows=mysql_fetch_array($sql1))
		{
			$class=$rows['classname'];
      
     		 			 echo'<option  value='.$class.'>'.$class.'</option>';
		}
		echo'</select>';
echo'</span>';
}
if(isset($_POST['checkbox4']))
{
	echo'<br><br><span id=ud3>age :';
	 echo' <select name=name3 id=updt3  >
         <option value="">CHOOSE</option>';
          for($i=10;$i<=25;$i++)
		 {
         echo'<option value='.$i.'>'.$i.'</option>';
         }
         echo'</select> </span>';
        
}
if(isset($_POST['checkbox5']))
{
	echo'<br><br><span id=ud4>gender :';
	echo'<input type="radio" name="name4" value="Male" id="updt4" />
         MALE
         
         <input type="radio" name="name4" value="Female" id="updt-4" />
         FEMALE';
		 echo'</span>';
		 }
if(isset($_POST['checkbox6']))
{
	echo'<br><br><span id=ud5>NATIONALITY :<input type=text id=updt5 name=name5 ></span>';

}
if(isset($_POST['checkbox7']))
{
	echo'<br><br><span id=ud6>RELIGION :<input type=text id=updt6 name=name6 ></span>';
}
if(isset($_POST['checkbox8']))
{
	echo'<br><br><span id=ud7> CAST :';
	echo' <input type="radio" name="name7" value="general" id="RadioGroup2_0" />
         General
         
         
         <input type="radio" name="name7" value="obc" id="RadioGroup2_1" />
         OBC
         
         
         <input type="radio" name="name7" value="mobc" id="RadioGroup2_2" />
         MOBC
         
         
         <input type="radio" name="name7" value="ncl" id="RadioGroup2_3" />
         OBC-NCL
         
         
         <input type="radio" name="name7" value="others" id="RadioGroup2_4" />
         Others</span>';        
}
if(isset($_POST['checkbox9']))
{
	echo'<br><br><span id=ud8>MIGRATION :<input type=text name=name8 id=updt8 ></span>';
}
if(isset($_POST['checkbox20']))
{
	echo'<br><br><span id=ud9>DATE-OF-BIRTH :';
	echo' <select name=name9 id=updt9 >
         				<option value="">DATE</option>';
         				
						for($i=1;$i<=31;$i++)
						{echo'<option value='.$i.'>'.$i.'</option>';
						}
						
                        echo'</select>&nbsp';
                        echo'<select name=name10 id=updt-9>
                        <option value="">MONTH</option>';
                        $month=array("JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER");
						for($j=0;$j<=11;$j++)
						{
						echo'<option value='.$month[$j].'>'.$month[$j].'</option>';
						}
						
                        echo'</select>
                        <select name=name11 id=updt_9>
                        <option value="">YEAR</option>';
                        for($k=1990;$k<=2005;$k++)
						{echo'<option value='.$k.'>'.$k.'</option>';
						}
						
                        echo'</select></span>';
                        
                      

}
if(isset($_POST['checkbox10']))
{echo'<div id=dv3><br><brr><br>ADDRESS DETAILS</DIV>';
	echo'<br><br><span id=ud10>PRESENT ADDRESS :<input type=text id=updt10 name=name12 ></span>';
}
if(isset($_POST['checkbox11']))
{
	echo'<br><br><span id=ud11>PERMANENT ADDRESS :<input type=text id=updt11 name=name13 ></span>';
}
if(isset($_POST['checkbox12']))
{
	echo'<br><br><span id=ud12>LOCALITY :<input type=text id=updt12 name=name14 ></span>';
}
if(isset($_POST['checkbox13']))
{
	echo'<br><br><span id=ud13>CITY/TOWN/VILLAGE :<input type=text id=updt13 name=name15 ></span>';
}
if(isset($_POST['checkbox14']))
{
	echo'<br><br><span id=ud14>RESIDENCE :<input type=text id=updt14 name=name16 ></span>';

}

if(isset($_POST['checkbox15']))
{

	echo'<br><br><span id=ud15>DISTRICT :<input type=text name=name17 id=updt15></span>';
}
if(isset($_POST['checkbox16']))
{
	echo'<br><br><span id=ud16>STATE :<input type=text name=name18 id=updt16 ></span>';
}
if(isset($_POST['checkbox17']))
{
	echo'<br><br><span id=ud17>PINCODE :<input type=text id=updt17 name=name19 ></span>';
}
if(isset($_POST['checkbox18']))
{
	echo'<br><br><span id=ud18>EMAIL :<input type=text id=updt18 name=name20 ></span>';
}
if(isset($_POST['checkbox19']))
{
	echo'<br><br><span id=ud19>MOBILE NO :<input type=text id=updt19 name=name21 ></span>';
}
if(isset($_POST['checkbox21']))
{echo'<div id=dv5><br><br><br>GUARDIAN DETAILS</div>';
	echo'<br><br><span id=ud20>FATHER/GUARDIAN NAME :<input type=text id=updt20 name=name22 ></span>';
}
if(isset($_POST['checkbox22']))
{
	echo'<br><br><span id=ud21>MOTHER NAME :<input type=text id=updt21 name=name23 ></span>';
}
if(isset($_POST['checkbox23']))
{
	echo'<br><br><span id=ud22>FATHER QUALIFICATION :<input type=text id=updt22 name=name24 ></span>';
}
if(isset($_POST['checkbox24']))
{
	echo'<br><br><span id=ud23>MOTHER QUALIFICATION :<input type=text id=updt23 name=name25 ></span>';

}
if(isset($_POST['checkbox25']))
{
	echo'<br><br><span id=ud24>FATHER OCCUPATION :<input type=text id=updt24 name=name26 ></span>';
}
if(isset($_POST['checkbox26']))
{
	echo'<br><br><span id=ud25>MOTHER OCCUPATION :<input type=text id=updt25 name=name27 ></span>';
}
if(isset($_POST['checkbox27']))
{
	echo'<br><br><span id=ud26>FATHER MOBILE NO :<input type=text id=updt26 name=name28 ></span>';

}
if(isset($_POST['checkbox28']))
{echo'<div id=dv7><br><br><br>MEDICAL DETAILS</div>';
	echo'<br><br><span id=ud27>BLOOD GROUP :';
	echo' <label>
             <input type="radio" name=name29 value="A+" id="RadioGroup3_0" />
            A+</label>
          
          <label>
            <input type="radio" name=name29 value="A-" id="RadioGroup3_1" />
            A-</label>
          
          <label>
            <input type="radio" name=name29 value="B+" id="RadioGroup3_2" />
            B+</label>
          
         <label>
            <input type="radio" name=name29 value="B-" id="RadioGroup3_3" />
            B-</label>
          
          <label>
            <input type="radio" name=name29 value="AB+" id="RadioGroup3_4" />
            AB+</label>
          
          <label>
            <input type="radio" name=name29 value="AB-" id="RadioGroup3_5" />
            AB-</label>
          
          <label>
            <input type="radio" name=name29 value="O+" id="RadioGroup3_6" />
            O+</label>
          
          <label>
            <input type="radio" name=name29 value="O-" id="RadioGroup3_7" />
            O-</label></span>';
            
            
}
if(isset($_POST['checkbox29']))
{
	echo'<br><br><span id=ud28>identification :<input type=textarea id=updt28 name=name30 cols=15 rows=2 ></span>';

}
if(isset($_POST['checkbox30']))
{echo'<div id=dv8><br><br>PHOTO DETAILS</div>';
	echo'<br><br><span id=ud29>PROFILE PICTURE :<input type=file id=updt29 name=name31 ></span>';
echo'</div>';
}
if(isset($_POST['checkbox31']))
{echo'<div id=dv9><br><br><br>SECURITY DETAILS</div>';
	echo'<br><br><span id=ud30>SECURITY QUESTION :';
	echo'<label for="select" ></label>
         <select name=name32 id=updt30>
           <option value="PETNAME">What is your pet name?</option>
           <option value="BESTFRIEND">Who is your best friend?</option>
           <option value="MOST VISITED SITE">Which site do you visit most?</option>
         </select></span>';
         
}
if(isset($_POST['checkbox32']))
{	echo'<br><br><span id=ud31>SECURITY ANSWER :<input type=text id=updt31 name=name33 ></span>';
}
if(isset($_POST['checkbox33']))
{	echo'<br><br><span id=ud32>USERNAME :<input type=text id=updt32 name=name34 ></span>';

}
if(isset($_POST['checkbox34']))
{echo'<div id=dv10><br><br><br>SUBJECT DETAILS</div>';	
echo'<br><br><span id=ud33>SUBJECT1 :';
$sqls1=mysql_query('select * from subjects');
		
		echo '<select name=name35 id=updt33>';		
	while($ress1=mysql_fetch_array($sqls1))
	{
		$id1=$ress1['id'];
		$subject_name1=$ress1['subject_name'];
		echo '<option value='.$subject_name1.'>'.$subject_name1.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox35']))
{	
echo'<br><br><span id=ud34>SUBJECT2 :';
$sqls2=mysql_query('select * from subjects');
		
		echo '<select name=name36 id=updt34>';		
	while($ress2=mysql_fetch_array($sqls2))
	{
		$id2=$ress2['id'];
		$subject_name2=$ress2['subject_name'];
		echo '<option value='.$subject_name2.'>'.$subject_name2.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox36']))
{	
echo'<br><br><span id=ud35>SUBJECT3 :';
$sqls3=mysql_query('select * from subjects');
		
		echo '<select name=name37 id=updt35>';		
	while($ress3=mysql_fetch_array($sqls3))
	{
		$id3=$ress3['id'];
		$subject_name3=$ress3['subject_name'];
		echo '<option value='.$subject_name3.'>'.$subject_name3.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox37']))
{	
echo'<br><br><span id=ud36>SUBJECT4 :';
$sqls4=mysql_query('select * from subjects');
		
		echo '<select name=name38 id=updt36>';		
	while($ress4=mysql_fetch_array($sqls4))
	{
		$id4=$ress4['id'];
		$subject_name4=$ress4['subject_name'];
		echo '<option value='.$subject_name4.'>'.$subject_name4.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox38']))
{	
echo'<br><br><span id=ud37>SUBJECT5 :';
$sqls5=mysql_query('select * from subjects');
		
		echo '<select name=name39 id=updt37>';		
	while($ress5=mysql_fetch_array($sqls5))
	{
		$id5=$ress5['id'];
		$subject_name5=$ress5['subject_name'];
		echo '<option value='.$subject_name5.'>'.$subject_name5.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox39']))
{	
echo'<br><br><span id=ud38>SUBJECT6 :';
$sqls6=mysql_query('select * from subjects');
		
		echo '<select name=name40 id=updt38>';		
	while($ress6=mysql_fetch_array($sqls6))
	{
		$id6=$ress6['id'];
		$subject_name6=$ress6['subject_name'];
		echo '<option value='.$subject_name6.'>'.$subject_name6.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox40']))
{	
echo'<br><br><span id=ud39>SUBJECT7 :';
$sqls7=mysql_query('select * from subjects');
		
		echo '<select name=name41 id=updt39>';		
	while($ress7=mysql_fetch_array($sqls7))
	{
		$id7=$ress7['id'];
		$subject_name7=$ress7['subject_name'];
		echo '<option value='.$subject_name7.'>'.$subject_name7.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox41']))
{	
echo'<br><br><span id=ud40>SUBJECT8 :';
$sqls8=mysql_query('select * from subjects');
		
		echo '<select name=name42 id=updt40>';		
	while($ress8=mysql_fetch_array($sqls8))
	{
		$id8=$ress8['id'];
		$subject_name8=$ress8['subject_name'];
		echo '<option value='.$subject_name8.'>'.$subject_name8.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox42']))
{	
echo'<br><br><span id=ud41>SUBJECT9(ALT) :';
$sqls9=mysql_query('select * from subjects');
		
		echo '<select name=name43 id=updt41>';		
	while($ress9=mysql_fetch_array($sqls9))
	{
		$id9=$ress9['id'];
		$subject_name9=$ress9['subject_name'];
		echo '<option value='.$subject_name9.'>'.$subject_name9.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox43']))
{	
echo'<br><br><span id=ud42>SUBJECT10(ALT) :';
$sqls10=mysql_query('select * from subjects');
		
		echo '<select name=name44 id=updt42>';		
	while($ress10=mysql_fetch_array($sqls10))
	{

		$id10=$ress10['id'];
		$subject_name10=$ress10['subject_name'];
		echo '<option value='.$subject_name10.'>'.$subject_name10.'</option>';	
	
	}echo '</select><span>';
	
}
if(isset($_POST['checkbox44']))
{	
echo'<br><br><span id=ud43>SUBJECT11(ALT) :';
$sqls11=mysql_query('select * from subjects');
		
		echo '<select name=name45 id=updt43>';		
	while($ress11=mysql_fetch_array($sqls11))
	{
		$id11=$ress11['id'];
		$subject_name11=$ress11['subject_name'];
		echo '<option value='.$subject_name11.'>'.$subject_name11.'</option>';	
	
	}echo '</select><span>';
	
}

echo'<br><br><input type=submit name=sbmit2 value=update>';
echo'</form>';
echo'&nbsp;&nbsp;<input type=submit name=sbmit3 value=cancel>';
echo'</form>';
echo'</div>';
}
?>
<?php
$unique1=$_SESSION['no']; 

	if(isset($_POST['sbmit2']))
	{ 
	if(!empty($_POST['name1']))
	{$name=$_POST['name1'];
	$connect1=mysql_query("update student_details set student_name='$name' where roll_no='$unique1'");
		}
	if(!empty($_POST['name2']))
	{$class=$_POST['name2'];
	$connect2=mysql_query("update student_details set class='$class' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name3']))
	{$age=$_POST['name3'];
	$connect3=mysql_query("update student_details set age='$age' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name4']))
	{$gender=$_POST['name4'];
	$connect4=mysql_query("update student_details set gender='$gender' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name5']))
	{$nationality=$_POST['name5'];
	$connect5=mysql_query("update student_details set nationality='$nationality' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name6']))
	{$religion=$_POST['name6'];
	$connect6=mysql_query("update student_details set religion='$religion' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name7']))
	{$cast=$_POST['name7'];
	$connect7=mysql_query("update student_details set cast='$cast' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name8']))
	{$migration=$_POST['name8'];
	$connect8=mysql_query("update student_details set migration='$migration' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name9']) && !empty($_POST['name10'])&& !empty($_POST['name11']))
	{$date=$_POST['name9'];
	$month=$_POST['name10'];
	$year=$_POST['name11'];
	$dob=$date.'-'.$month.'-'.$year;
	$connect9=mysql_query("update student_details set dob='$dob' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name12']))
	{$p_address=$_POST['name12'];
	$connect10=mysql_query("update address_details set present_address='$p_address' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name13']))
	{$per_address=$_POST['name13'];
	$connect11=mysql_query("update address_details set permanent_address='$per_address' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name14']))
	{$locality=$_POST['name14'];
	$connect12=mysql_query("update address_details set locality='$locality' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name15']))
	{$ctv=$_POST['name15'];
	$connect13=mysql_query("update address_details set city_town_village='$ctv' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name16']))
	{$residence=$_POST['name16'];
	$connect14=mysql_query("update address_details set residence='$residence' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name17']))
	{$district=$_POST['name17'];
	$connect15=mysql_query("update address_details set district='$district' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name18']))
	{$state=$_POST['name18'];
	$connect16=mysql_query("update address_details set state='$state' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name19']))
	{$pincode=$_POST['name19'];
	$connect17=mysql_query("update address_details set pincode='$pincode' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name20']))
	{$email=$_POST['name20'];
	$connect18=mysql_query("update address_details set e_mail='$email' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name21']))
	{$mobileno=$_POST['name21'];
	$connect19=mysql_query("update address_details set mobile_no='$mobileno' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name22']))
	{$fname=$_POST['name22'];
	$connect20=mysql_query("update guardian_details set father_guardian_name='$fname' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name23']))
	{$mname=$_POST['name23'];
	$connect21=mysql_query("update guardian_details set mother_name='$mname' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name24']))
	{$fquali=$_POST['name24'];
	$connect22=mysql_query("update guardian_details set father_qualification='$fquali' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name25']))
	{$mquali=$_POST['name25'];
	$connect23=mysql_query("update guardian_details set mother_qualification='$mquali' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name26']))
	{$foccu=$_POST['name26'];
	$connect24=mysql_query("update guardian_details set father_occupation='$foccu' where roll_no='$unique1'");
	
	}

if(!empty($_POST['name27']))
	{$moccu=$_POST['name27'];
	$connect25=mysql_query("update guardian_details set mother_occupation='$moccu' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name28']))
	{$fno=$_POST['name28'];
	$connect26=mysql_query("update guardian_details set father_no='$fno' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name29']))
	{$blood=$_POST['name29'];
	$connect27=mysql_query("update medical_details set blood_group='$blood' where roll_no='$unique1'");
	
	}
if(!empty($_POST['name30']))
	{$identity=$_POST['name30'];
	$connect28=mysql_query("update medical_details set identification='$identity' where roll_no='$unique1'");
	
	}
if($_FILES['photo1'] ['tmp_name'])
	{
	$image=$_FILES['photo1']['tmp_name'];
	$image=addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$image_name=addslashes($_FILES['photo1']['name']);
	move_uploaded_file($_FILES['photo1']['tmp_name'],"uploadephoto/".$_FILES['photo1']['name']);
	
	$permenant="uploadephoto/".$_FILES['photo1']['name'];
	$connect29=mysql_query("update picture set photo='$permenant' where rollno='$unique1'");
	
	}
	if(!empty($_POST['name32']))
	{$security_q=$_POST['name32'];
	$connect30=mysql_query("update security_details set security_question='$security_q' where roll_no='$unique1'");
	}
if(!empty($_POST['name33']))
	{$security_a=$_POST['name33'];
	$connect31=mysql_query("update security_details set security_answer='$security_a' where roll_no='$unique1'");
	}
if(!empty($_POST['name35']))
	{$sub1=$_POST['name35'];
	$connect32=mysql_query("update subject_taken set sub1='$sub1' where roll_no='$unique1'");
	}
if(!empty($_POST['name36']))
	{$sub2=$_POST['name36'];
	$connect33=mysql_query("update subject_taken set sub2='$sub2' where roll_no='$unique1'");
	}
if(!empty($_POST['name37']))
	{$sub3=$_POST['name37'];
	$connect34=mysql_query("update subject_taken set sub3='$sub3' where roll_no='$unique1'");
	}
if(!empty($_POST['name38']))
	{$sub4=$_POST['name38'];
	$connect35=mysql_query("update subject_taken set sub4='$sub4' where roll_no='$unique1'");
	}
if(!empty($_POST['name39']))
	{$sub5=$_POST['name39'];
	$connect36=mysql_query("update subject_taken set sub5='$sub5' where roll_no='$unique1'");
	}
if(!empty($_POST['name40']))
	{$sub6=$_POST['name40'];
	$connect37=mysql_query("update subject_taken set sub6='$sub6' where roll_no='$unique1'");
	}
if(!empty($_POST['name41']))
	{$sub7=$_POST['name41'];
	$connect38=mysql_query("update subject_taken set sub7='$sub7' where roll_no='$unique1'");
	}
if(!empty($_POST['name42']))
	{$sub8=$_POST['name42'];
	$connect39=mysql_query("update subject_taken set sub8='$sub8' where roll_no='$unique1'");
	}
if(!empty($_POST['name43']))
	{$sub9=$_POST['name43'];
	$connect40=mysql_query("update subject_taken set alt9='$sub9' where roll_no='$unique1'");
	}
if(!empty($_POST['name44']))
	{$sub10=$_POST['name44'];
	$connect41=mysql_query("update subject_taken set alt10='$sub10' where roll_no='$unique1'");
	}
if(!empty($_POST['name45']))
	{$sub11=$_POST['name45'];
	$connect42=mysql_query("update subject_taken set alt11='$sub11' where roll_no='$unique1'");
	}

if(isset($_POST['submits2']))
{header('location:student_details.php');
}
	if($connect1==true ||$connect2==true ||$connect3==true||$connect4==true||$connect5==true||$connect6==true||$connect7==true||$connect8==true
	||$connect9==true||$connect10==true||$connect11==true||$connect12==true||$connect13==true||$connect14==true||$connect15==true
	||$connect16==true||$connect17==true||$connect18==true||$connect19==true||$connect20==true||$connect21==true||$connect22==true
	||$connect23==true||$connect24==true||$connect25==true||$connect26==true||$connect27==true||$connect28==true||$connect29==true
	||$connect30==true||$connect31==true||$connect32==true)
	{header('location:student_details.php');
	}else{echo'no';}
	}

	?>
</div>
</body>