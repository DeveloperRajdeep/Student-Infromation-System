<?php
include'session.php';
?>
<html>
<head>
<style></style>
</head>
<body>
<?php
if(isset($_POST['submit']))

{
$session=$_POST['session'];
$id = $_POST['id'];
$conn2 = mysql_query("update session set session='$session' where id='$id'");

if($conn2==true)
{
header('location:admin5.php');
}
else{header('location:admin5.php');
	
	}
}
else if($_GET['edit'])
{
$id1=$_GET['edit'];



echo'<form action='.$_SERVER['PHP_SELF'].' method=post >';
echo'SESSION :';
echo'<input type="text" name="session" id="unique6" onkeyup=validate1(this)>'.'<span id="here6">ENTER SESSION</span>'.'<br>';
	
echo'<input type=hidden name=id value='.$id1.' >';
echo '<input type=submit name=submit value=UPDATE >';
echo'</form>'; 
}

?>
<script>

	var check1=/^[\d\-]+$/;
	function validate1(test3)
		{var res2=test3.value;
	var result5=check1.test(res2);
	if(result5==true)
	{if(res2.length>8)
	{
		document.getElementById('here6').innerHTML="";
	}else{
		document.getElementById('here6').innerHTML='ENTER SESSION';
		}
	}
		else{document.getElementById('unique6').value='';
			document.getElementById('here6').innerHTML="ENTER SESSION";
		}
	}
	</script>
</body>
</html>