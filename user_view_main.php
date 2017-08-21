<?php include'conn.php';
session_start();
?>
<html>
<head>
<style>
#main{position:absolute;
width:100%;
height:100%;
margin:0%;
padding:0%;
z-index:5;
background-image:url(imp_images/l_230.png);
}
#first{
	position:absolute;
	width:100%;
	height:40%;
	top:48%;
	background-image:url(imp_images/l_230.png);
	opacity:0.6;
}
#inner1{position:absolute;
width:auto;
height:auto;
left:55%;
color:#000;
top:15%;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:18px;
font-weight:600;
text-transform:uppercase;
text-shadow:1px 1px #0099FF;
}
#inner2{position:absolute;
width:auto;
height:auto;
left:55%;
color:#000;
top:35%;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:18px;
font-weight:600;
text-transform:uppercase;
text-shadow:1px 1px #0099FF;

}
#user{
	position:absolute;
	width:15%;
	height:auto;
	left:70%;
	top:15%;
	background-color:#FFF;
	opacity:0.9;
	border-radius:4px;
}
#user:hover{border-color:#06F;
}
#pass
{	position:absolute;
	width:15%;
	height:auto;
	left:70%;
	top:35%;
	background-color:#FFF;
	opacity:0.9;
	border-radius:4px;

}
#pass:hover{border-color:#06F;
}
.buttons1{position:absolute;
	width:5%;
	height:12%;
	top:62%;
left:68%;
text-transform:uppercase;
	background-color:#000;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:600;
	padding:6px;
	border-radius:12px;
	border-color:#999;

}.buttons1:hover{border-color:#FFF;
	width:5.2%;
	height:14%
	}
.buttons2{position:absolute;
	width:13%;
	height:auto;
	top:80%;
	left:67.7%;
	text-transform:uppercase;
	background-color:#000;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:800;
	padding:6px;
	border-radius:12px;
	border-color:#999;
	word-wrap:break-word;
	}.buttons2:hover{border-color:#FFF;

width:13.4%;
height:14%;
	}
#buttons5{position:absolute;
	width:5.4%;
	height:auto;
	top:62%;
	left:74%;
	text-transform:uppercase;
	background-color:#000;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:600;
	padding:6px;
	border-radius:12px;
	border-color:#999;
	text-decoration:none;
	word-wrap:break-word;
}#buttons5:hover{border-color:#FFF;

width:5.6%;
height:14%;
	}
#container{
	position:absolute;
	width:94%;
	left:3%;
	border-bottom-left-radius:14px;
	border-bottom-right-radius:14px;
	padding:0%;
	margin:0%;
	height:10%;
background-color:#00F;
	z-index:20;
}
	#st{position:relative;
	width:auto;
	height:auto;
	left:5%;
	top:35%;
	color:#FFF;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:24px;
	font-weight:800;
	text-transform:uppercase;
	}
	#decor{text-decoration:none;}
	#reset{position:absolute;
			width:25%;
			left:37%;
			height:30%;
			top:40%;
			z-index:10;
			background-image:url(imp_images/Blue_3_by_astoyanov.png);
			border-radius:16px;
			opacity:0.7;
			border-style:solid;
			border-width:1px;
	}
		#name{position:absolute;
		width:auto;
		height:auto;
		top:15%;
		text-transform:uppercase;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:18px;
		font-weight:700;
		color:#FFF;
		text-shadow:1px 1px #000000;
		left:32%
	}
	#txt{position:absolute;
	width:50%;
	height:14%;
	border-radius:4px;
	top:35%;
	left:24%;
	}
	#txt:hover{border-color:#06F;
}

	#buttons3{position:absolute;
	width:auto;
	height:auto;
	background-color:#000;
	top:75%;
	left:24%;
	text-transform:uppercase;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:600;
	padding:6px;
	border-radius:12px;
	border-color:#999;
	}
	#buttons3:hover{border-color:#FFF;
padding:8px;
	}

	#buttons_3{position:absolute;
	width:auto;
	height:auto;
	background-color:#000;
	top:75%;
	left:54%;
	text-transform:uppercase;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:600;
	padding:6px;
	border-radius:12px;
	border-color:#999;
	}
	#buttons_3:hover{border-color:#FFF;
padding:8px;
	}
#reset1{position:absolute;
			width:29%;
			height:32%;
			left:35%;
			top:40%;
			z-index:10;
			background-image:url(imp_images/Blue_3_by_astoyanov.png);
			border-radius:16px;
			opacity:0.7;
			border-style:solid;
			border-width:1px;
			
	}
	#ques1{position:absolute;
width:auto;
height:auto;
top:6%;
left:4%;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:16px;
font-weight:500;
text-transform:uppercase;
color:#FFF;
text-shadow:1px 1px #000000;
}#ques{
	position:absolute;
width:auto;
height:auto;
top:6%;
left:52%;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:16px;
font-weight:500;
text-transform:uppercase;
color:#FFF;
text-shadow:1px 1px #000000;
word-wrap:break-word;
}
#ans{position:absolute;
width:auto;
height:auto;
top:32%;
left:4%;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:16px;
font-weight:500;
text-transform:uppercase;
color:#FFF;
text-shadow:1px 1px #000000;
}#ans1{
	position:absolute;
width:auto;
height:auto;
top:30%;
left:52%;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:16px;
font-weight:400;
text-shadow:1px 1px #000000;
word-wrap:break-word;
border-radius:6px;
}#ans1:hover{border-color:#06F;
}

#buttons4{position:absolute;
	width:auto;
	height:auto;
	background-color:#000;
	top:75%;
	left:24%;
	text-transform:uppercase;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:600;
	padding:6px;
	border-radius:12px;
	border-color:#999;
	}
	#buttons4:hover{border-color:#FFF;
padding:8px;
	}

	#buttons_4{position:absolute;
	width:auto;
	height:auto;
	background-color:#000;
	top:75%;
	left:54%;
	text-transform:uppercase;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:600;
	padding:6px;
	border-radius:12px;
	border-color:#999;
	}
	#buttons_4:hover{border-color:#FFF;
padding:8px;
	}
	#news{position:absolute;
	top:30%;
	width:100%;
	height:30%;
	background-image:url(imp_images/background-wide.png);
	opacity:0.6;
	}
	#newss{position:absolute;
		top:5%;
		width:auto;
		height:auto;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:18px;
		color:#FFF;
		left:2%;
		text-transform:uppercase;
		font-weight:550;
	}
	#n_ew{
		position:absolute;
		top:35%;
		width:auto;
		height:auto;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:18px;
		color:#FFF;
		left:35%;
		text-transform:uppercase;
		font-weight:500;
	}
	.txt1{position:absolute;
width:auto;
height:auto;
top:33%;
left:56%;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:16px;
font-weight:400;
text-shadow:1px 1px #000000;
word-wrap:break-word;
border-radius:6px;
}.txt1:hover{border-color:#06F;
}
#psword{position:absolute;
		top:35%;
		width:auto;
		height:auto;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:18px;
		color:#FFF;
		left:75%;
		text-transform:uppercase;
		font-weight:500;
	}

#confirm1{position:absolute;
		top:65%;
		width:auto;
		height:auto;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:18px;
		color:#FFF;
		left:75%;
		text-transform:uppercase;
		font-weight:500;
	}

	#ne_w{
		position:absolute;
		top:65%;
		width:auto;
		height:auto;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:18px;
		color:#FFF;
		left:35%;
		text-transform:uppercase;
		font-weight:500;
	}
	
 
 .txt2{position:absolute;
width:auto;
height:auto;
top:63%;
left:56%;
font-family:Georgia, "Times New Roman", Times, serif;
font-size:16px;
font-weight:400;
text-shadow:1px 1px #000000;
word-wrap:break-word;
border-radius:6px;
}.txt2:hover{border-color:#06F;
}
#buttons6{position:absolute;
	width:auto;
	height:auto;
	background-color:#000;
	top:85%;
	left:54%;
	text-transform:uppercase;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:600;
	padding:6px;
	border-radius:12px;
	border-color:#999;
	}
	#buttons6:hover{border-color:#FFF;
padding:8px;
	}

	#buttons_6{position:absolute;
	width:auto;
	height:auto;
	background-color:#000;
	top:85%;
	left:62%;
	text-transform:uppercase;
	color:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:600;
	padding:6px;
	border-radius:12px;
	border-color:#999;
	}
	#buttons_6:hover{border-color:#FFF;
padding:8px;
	}
	.info{position:absolute;
	width:20%;
	height:20%;
	top:45%;
	background-image:url(imp_images/1879523%20-%20Copy.jpg);
	opacity:0.7;
	left:35%;
	border-radius:12px;
	border-style:solid;
	border-color:#CCC;
	
	
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:18px;
	font-weight:700;
	color:#000;
	}
	.infoin{position:absolute;
	width:auto;
	height:auto;
	text-transform:uppercase;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:16px;
	font-weight:600;
	top:40%;
	left:14%;
	}
        </style>
</head>
<body id=main>

<div id=container>
<span id=st>student information system</span>

</div>
<div id=main2>
<div id=first>


<form action=do_login.php method=post>
<span id=inner1>username</span><input type=text name=uname id=user required=required/>
<span id=inner2>password</span><input type=password name=password id=pass required=required />
<button type=submit name='submit1' class=buttons1>login</button>
</form>
<a href=infoform.php id=decor ><button type=button id=buttons5>signup</button></a>
<form action=user_view_main.php method=post>
<button type=submit name=submit2 class=buttons2>forgot password</button>
 </form>
 </div>
 
 <?php if(isset($_POST['submit2']))
 {echo '<div id=reset>';
 echo '<form action=user_view_main.php method=post>';
 echo'<span id=name >username</span><input type=text id=txt name=psrd >';
 echo'<button type=submit name=submit3 id=buttons3>search</button>';
 echo'</form>';
echo'<form action=user_view_main.php method=post>';

  echo'<button type=submit name=submit_3 id=buttons_3>cancel</button>';
 echo'</form>';

 echo'</div>';

 }?>
 <?php
   if(isset($_POST['submit_3']))
   {header('location:user_view_main.php');
   }
   ?>

 <?php if(isset($_POST['submit3']))
 {
 $name=$_POST['psrd'];
 $sql3=mysql_query("select * from security_details where username='$name' and status=1");
 if(mysql_num_rows($sql3)>=1)
 {while($res=mysql_fetch_array($sql3))
 {$question=$res['security_question'];
echo '<div id=reset1>';
 echo '<form action=user_view_main.php method=post>';
 echo'<span id=ques1>security question :</span><span id=ques>'.$question.'</span>'; 
echo'<span id=ans>enter your answer:</span><input type=text name=answer id=ans1>';
echo'<button type=submit name=submit4 id=buttons4>enter</button>';
echo'</form>';
echo'<form action=user_view_main.php method=post>';
 echo'<button type=submit name=submit_4 id=buttons_4>cancel</button>';
 echo'</form>';
 echo'</div>';
 }
 }
 }?>
 <?php
   if(isset($_POST['submit_4']))
   {header('location:user_view_main.php');
   }
   ?>
<?php  if(isset($_POST['submit4']))
 {
 $answer1=$_POST['answer'];
 $sql4=mysql_query("select * from security_details where security_answer='$answer1' and status=1 ");
 if(mysql_num_rows($sql4)>=1)
 {echo'<div id=news>';
 echo'<span id=newss>Password must be between 5 to 10 characters which contain at least one lowercase letter ,one uppercase letter , and one special character</span><br/>';
	 echo '<form action=user_view_main.php method=post >';
 		echo'<input type=hidden name=hide value='.$answer1.'>';
		echo'<span id=n_ew>enter your new password:</span><input type=text name=new1 id=button-1 class=txt1 onkeyup=valid_password(this) onblur=valid_password1(this)/> <span id=psword></span><br /><br />';
		echo'<span id=ne_w>confirm your password:</span><input type=text name=new2 id=button-2 class=txt2 onkeyUp="confirm_password(this)"  onblur=confirm_password1(this) onkeydown=confirm_password2(this) required=required /><span id=confirm1></span>';
	  echo'<button type=submit name=submit5 id=buttons6>enter</button>';
echo'</form>';
echo'<form action=user_view_main.php method=post>';
 echo'<button type=submit name=submit_5 id=buttons_6>cancel</button>';
 echo'</form>';
 echo'</div>';
 }
 }
 ?><?php
 if(isset($_POST['submit_5']))
 {echo '<div class=info><span class=infoin>you cancelled</span></div>';
 header('refresh:3;url=user_view_main.php');
   }
   ?>
<?php if(isset($_POST['submit5']))
{ $newpass=$_POST['new1'];
$hides=$_POST['hide'];

$sql7=mysql_query("update security_details set password='$newpass' where security_answer='$hides'");

if($sql7==true)
{
	echo '<div class=info><span class=infoin>password updated</span></div>';
 header('refresh:4;url=user_view_main.php');

}
else{echo'<div class=info><span class=infoin >passsword updation failed</span></div>';
 header('refresh:4;url=user_view_main.php');
}
}
	  
 
 
?>
<script>
var check15=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,10}$/;
function valid_password(test23)
{var password=test23.value;
var ps_result=check15.test(password);
if(ps_result!=true)
{
document.getElementById('psword').innerHTML='ENTER VALID PASSWORD';
}
else
{document.getElementById('psword').innerHTML='';
}
}
function valid_password1(test24)
{var password1=test24.value;
var ps_result1=check15.test(password1)
if(ps_result1!=true)
{document.getElementById('psword').innerHTML='';
document.getElementById('button-1').value='';

	}
}
var check16=/^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,10}$/;
function confirm_password(test25)
{var confirm_password=test25.value;
var confirm_result=check16.test(confirm_password);
if(confirm_result!=true)
{
document.getElementById('confirm1').innerHTML='ENTER VALID PASSWORD';
}
else
{document.getElementById('confirm1').innerHTML='';
}
}
function confirm_password1(test26)
{var confirm_password1=test26.value;
var confirm_result1=check16.test(confirm_password1)
if(confirm_result1!=true)
{document.getElementById('confirm1').innerHTML='';
document.getElementById('button-2').value='';

	}
}
 function confirm_password2(test5)
 {var confrm=test5.value;
  var pass=document.getElementById('password').value;
 if(pass==confrm)
 {document.getElementById('confirm1').innerHTML='';
 }
 
 
 else{
	 document.getElementById('confirm1').innerHTML="PASSWORD DOESN'T MATCH";
	 
	  }
 }	

</script>
</div>
 </body>
 </html>