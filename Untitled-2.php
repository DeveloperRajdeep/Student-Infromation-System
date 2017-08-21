<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>if(isset($_POST['submit1']) && empty($_POST['uname']) && empty($_POST['password']) )
{header('location:user_view_main.php');
}

elseif(isset($_POST['submit1'])&& !empty($_POST['uname']) && !empty($_POST['password']))
{$username=$_POST['uname'];
$password=$_POST['password'];
$sql1=mysql_query("select * from security_details where username='$username' and password='$password' and status=1 ");
$result=mysql_num_rows($sql1);
if($result>=1)
{while($total=mysql_fetch_array($sql1))
{
	$roll=$total['roll_no'];
	
		}
	
	$_SESSION['roll']=$roll;
	$_SESSION['uname']=$username;
	if(empty($_SESSION['roll'])&&empty($_SESSION['uname']))
	{header('location:user_view_main.php');
	}
	else{
	header('location:profile_view.php');

	}
	}
else{session_destroy();
	header('location:user_view_main.php');
	}
}
?>
