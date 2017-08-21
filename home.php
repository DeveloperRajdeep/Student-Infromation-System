<html>
<head>
<style>
#main{position:relative;
	padding:10px;
	margin:10px;
	width:1340px;
	height:1400px;
	background-image: url(bgnoise_lg.png);
	border-style:inset;
	background-repeat:repeat;
}
body #first{
	top:5px;
	padding:0px;
	position:relative;
	border-width:5px;
	border style:inset;
	background-color:#CCC;
	height:80px;
	border-radius:20px;
}
body #second{
	position:relative;
	padding:0px;
	width:1340px;
	height:250px;
	overflow:hidden;
}
 body #third
{	
	padding-left:50px;
	padding-right:70px;
	border-radius:20px;
	position:absolute;
	left:200px;
	
	box-shadow:5px 5px 6px 10px #66F;
	background-color:#CCC;
	list-style-type: none;
	

}
body #second #third li{
	float:right;
	border-right-width:medium;
	border-right-color:#FF9;
	border-right-style:groove;
	height:60px;
	display:block;
	
	width:200px;	
	text-align:center;
	
	
	
}
body #second #third li strong a
{
position:relative;
top:20px;
text-decoration:none;
}
	body #third li ul{
		
		position:absolute;
		top:-390px;
		width:200px;
		height:150px;
		box-shadow:5px 5px 6px 10px #9CC;
		background-color:#CCC;
		border-radius:25px;
		padding-bottom:10px;
		
		
	}
	body #third li ul li {
		position:relative;
		top:16px;
		right:20px;
		border-color:#CCC;
		border-style:groove;
		border-radius:16px;
		}
body #third li ul li a{
	text-decoration:none;
	
		
}body #third li ul
{ 
transition-duration:100sec;
transition-timing-function:ease-in-out;
}
body #third li:hover ul
{top:50px;





}</style>
</head>
<body id="main">
<div id="first">
</div>
<div id="second">
<ul id="third">
<li><strong><a href='#'>HOME</a></strong>
</li>
<li>
<strong><a href='#'>REGISTRATION</a></strong>
</li>
<li><strong><a href='#'>LOGIN</a></strong>
<ul><li><a href='#'>STUDENT'S LOGIN</a>

</li><li><a href='#'>TEACHER'S LOGIN</a>
</li>
</ul>
</li>
<li><strong><a href='#'>ABOUT US</a></strong>
</li>

</ul>
</div>
</body>
</html>

		