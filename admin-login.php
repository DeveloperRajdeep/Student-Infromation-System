<?php include 'conn.php';
?><html>
<head>
<style>
#main{padding:0px;
margin:0px;
width:100%;
border-top-radius:8px;
	background-image:url('background.png');
	background-repeat:repeat;
}
#first{
	position:absolute;
	width:100%;
	height:60px;
	color:#FFF;
	text-transform:uppercase;
	background-color:#000;
				
}#first1{
	position: absolute;
	background-color:#039;
	width: 100%;
	left: 0px;
	top: 59px;
	height: 43px;
}

#second
{
	position: absolute;
	width: 500px;
	top: 40px;
	left: 15px;
	font-family: Gill Sans;
	font-size: 28px;
	text-shadow: 2px 2px #906;
	z-index: 10;
}#third
{
	position:absolute;
	left: 35px;
	width: 692px;
	height: 400px;
	top: 178px;
	border-right-style: groove;
	border-right-color:#666;
	
}

#forth{position:absolute;
		width:600px;
		height:400px;
	left:740px;
	top:150px;
	
	
}
#fifth{position:absolute;

width:560px;
top:30px;
left:20px;
height:350px;
bottom:20px;
border-radius:10px;
background-image:url('background%20(1).png');
}
#sixth{position:absolute;
width:500px;
top:30px;
left:80px;
}
#img3{position:absolute;
	left:240px;
	top:-15px;
}
	
	
	
#animation1
{
	position: relative;
	float:right;
	top: 0px;
	width: 164px;
	height: 120px;
	animation:move 2s linear infinite alternate-reverse; 
	overflow:hidden;
	z-index:10;
	
}
@keyframes move{
	from{
	transform:rotatex(0deg);

			}
	to{	transform:rotatex(360deg);

		}
}
#img1{
	position: absolute;
	top: 5px;
	left: 20px;
	border-radius: 40%;
	z-index: 10;
}
</style>
</head>
<body id='main'>


<div id='first'>

<div id='second'>
student information system
</div>
<div id='animation1'><img src='viewlogo (2).png' name="img1" id='img1'>
</div>
<div id='first1'></div>
</div>
<div id='third'>
<img id='img2' src='viewlogo (2).png'>
</div>

<div id='forth'>
<div id='fifth'><img id='img3' src='defaultProfileImage.png' width='80px' height='80px'>
<div id='sixth'>
<form action='log.php' method='post'>
<p id='some'>username  <input type='text' name='username' id='u_name' size=50></p>
<p id='some1'>password <input type='password' name='password' id='password'></p>
<button type='submit' name="submit"><img src='original.png' id='login' width='100px' height='45px'></button>
</form>
<form action='#' method='post'>
<button type='submit'><img src='signup_button.png' id='signup' width='100px' height='45px'></button>
</form>

</div>
</div>
</div>
</body>
</html>
