<?php
include 'conn.php';


if(isset($_POST['submit']))
{
	

$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysql_query("select * from admin where username='$username' and password='$password'");
if(mysql_num_rows($sql)>0)
{

	
	echo "login successful";
	header();
	
}
else
{
	echo"denied";
	header("refresh:0;url=admin_login.php");
}



}

?>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 100%;
	height: 874px;
	z-index: 1;
	left: 3px;
	top: -10px;		
}
body
{
	background:url(bck.jpg);
}
#apDiv2 {
	position: fixed;
	width: 100%;
	height: 115px;
	z-index: 5;
	left: 0px;
	top: 2px;
	background-color: #30F;
	border-radius: 10px;
	box-shadow: 5px 5px 5px 5px #000;
}



#apDiv4 {
	position: absolute;
	width: 420px;
	height: 54px;
	z-index: 1;
	left: 51px;
	top: 11px;
	font-family: "Agency FB";
	font-size: 36px;
	color: #FFF;

}
#apDiv3 {
	position: absolute;
	width: 200px;
	height: 573px;
	z-index: 2;
	left: 19px;
	top: 158px;
	background-color: #90F;
	border-bottom-style: groove;
	border-radius: 10px;
	box-shadow: 10px 5px 10px 8px #000;
}
#apDiv5 {
	position: absolute;
	width: 80%;
	height: 572px;
	z-index: 3;
	left: 238px;
	top: 159px;
	background-color: #FFF;
	border-radius: 10px;
	box-shadow: 10px 10px 10px 10px #000;
}
#apDiv6 {
	position: absolute;
	width: 100%;
	height: 99px;
	z-index: 4;
	left: 0px;
	top: 771px;
	background-color: #93F;
	border-radius: 10px;
	box-shadow: 5px 5px 5px 5px #000;
}

#apDiv1 #apDiv3 table {
	font-family: "AGENCY FB";
	font-size: 24px;
	text-align: center;
}
#a
{
	color:#000;
}
#apDiv7 {
	position: fixed;
	width: 411px;
	height: 37px;
	z-index: 5;
	left: 99px;
	top: 70px;
	font-size: 24px;
	font-family: "Agency FB";
	color: #FFF;
}
#apDiv8 {
	position: absolute;
	width: 200px;
	height: 200px;
	z-index: 1;
	left: 67px;
	top: 38px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv9 {
	position: absolute;
	width: 200px;
	height: 200px;
	z-index: 2;
	left: 386px;
	top: 38px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv10 {
	position: absolute;
	width: 200px;
	height: 200px;
	z-index: 3;
	left: 725px;
	top: 38px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv11 {
	position: absolute;
	width: 200px;
	height: 200px;
	z-index: 4;
	left: 67px;
	top: 337px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv12 {
	position: absolute;
	width: 200px;
	height: 200px;
	z-index: 5;
	left: 386px;
	top: 337px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv13 {
	position: absolute;
	width: 200px;
	height: 200px;
	z-index: 6;
	left: 725px;
	top: 338px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv8:hover
{
	cursor: pointer;
	width: 220px;
	height: 220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;
	
}
#apDiv9:hover
{
	cursor:pointer;
	width:220px;
	height:220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;

}
#apDiv10:hover
{
	cursor:pointer;
	width:220px;
	height:220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;

}
#apDiv11:hover
{
	cursor:pointer;
	width:220px;
	height:220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;

}
#apDiv12:hover
{
	cursor:pointer;
	width:220px;
	height:220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;

}
#apDiv13:hover
{
	cursor:pointer;
	width:220px;
	height:220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;

}
#apDiv1 #apDiv5 #apDiv8,#apDiv9,#apDiv10,#apDiv11,#apDiv12,#apDiv13 a {
	text-align: center;
	font-family: "Agency FB";
	font-size: 35px;
}
p{
	margin-top: 80px;
}

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
#apDiv14 {
	position: absolute;
	width: 187px;
	height: 67px;
	z-index: 1;
	left: 7px;
	top: 8px;
}
</style>
<div id="apDiv1">

<div id="apDiv2">
  <div id="apDiv4">STUDENT INFORMATION SYSTEM</div>
  
</div>
<div id="apDiv3">
  <div id="apDiv14"></div>
  
  
</div>
<div id="apDiv5">
  <div id="apDiv8"><a href="class.php"><p class="p">CLASS</p></a></div>
  <div id="apDiv9"><a href="class.php"><p class="p">CLASS</p></a></div>
  <div id="apDiv10"><a href="class.php"><p class="p">CLASS</p></a></div>
  <div id="apDiv11"><a href="class.php"><p class="p">CLASS</p></a></div>
  <div id="apDiv12"><a href="class.php"><p class="p">CLASS</p></a></div>
  <div id="apDiv13"><a href="class.php"><p class="p">CLASS</p></a></div>
  
</div>
<div id="apDiv6"></div>
<div id="apDiv7">ST.JOSEPH'S HIGH SCHOOL</div>


</div>
