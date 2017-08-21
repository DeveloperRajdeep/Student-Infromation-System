<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 100%;
	height: 656px;
	z-index: 1;
	left: 0px;
	top: 0px;		
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
	left: 4px;
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
	position: relative;
	width: 592px;
	height: 409px;
	z-index: 3;
	left: 348px;
	top: 149px;
	border-radius: 10px;
	background-color: #FFF;
	box-shadow: 5px 5px 5px #09f;
}
#apDiv6 {
	position: absolute;
	width: 100%;
	height: 99px;
	z-index: 4;
	left: 5px;
	right: 10px;
	top: 771px;
	background-color: #906;
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
	width: 420px;
	height: 339px;
	z-index: 1;
	left: 101px;
	top: 26px;
	font-family: "Agency FB";
	font-size: 36px;
	text-align: center;
}
#apDiv9 {
	position: absolute;
	width: 383px;
	height: 251px;
	z-index: 2;
	left: 104px;
	top: 123px;
}
.txt
{
	width: 200px;
	height:30px;
	border-radius:5px;
}
.txtg
{
	width: 100px;
	height:30px;
	border-radius:5px;
	font-family:"Agency FB";
	color:#FFF;
	background:#666;
	font-size:18px;
	font-weight:bold;
}
.txt:hover{
	box-shadow: 2px 2px 2px #09f;
}

</style>
<div id="apDiv1">

<div id="apDiv2">
  <div id="apDiv4">STUDENT INFORMATION SYSTEM</div>
  
</div>
<div id="apDiv5">
<form action="admin_dologin.php" method="post">
  <label for="textfield"></label>
  <div id="apDiv8">
    <p>Admin Login</p>
    <p>
      <label for="textfield4"></label>
      <input type="text" name="username" id="textfield4" class="txt" required="required" placeholder="username" />
    </p>
    <p>
      <label for="textfield5"></label>
      <input type="password" name="password" id="textfield5"class="txt" required="required" placeholder="password" />
    </p>
    <p>
      <input type="submit" name="submit" id="button" class="txtg" value="Login" />
      <input type="reset" name="button2" id="button2" class="txtg" value="Reset" />
      </p>
   </form>

    </div>
    
  </div>
</div>
<div id="apDiv7">ST.JOSEPH'S HIGH SCHOOL</div>


</div>
