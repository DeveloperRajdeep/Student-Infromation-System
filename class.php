<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function ChooseSubject(data)
{
var cla=data.value;
document.getElementById("inner").innerHTML="<input name='subject' type='text' id='subject'/>";
if(cla==1)
{
	document.getElementById("subject").value="Eng, Ass, Sci, Sst, Math, Hin";
	
}
else if(cla==2)
{
	document.getElementById("subject").value="Eng, Ass, Sci, Sst, Math, Hin";
}
else if(cla==3)
{
	document.getElementById("subject").value="Eng, Ass, Sci, Sst, Math, Hin, Elec";
}
}
</script>

</head>

<body>
<form action="submit.php" method="post" >
<select name="class" id="class" onchange="ChooseSubject(this)">
  <option value="">Select Class</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
<div id="inner"></div>
<input name="submit" type="submit" />
</form>
</body>
</html>
