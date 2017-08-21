<html>
<head>
<style>
#i
{position:absolute;
left:450px;
}
</style>
</head>
<body>
<?php
include 'conn.php';

$rolln0='X2';
?>
<form action=testing.php method='post'>
<select  name='check' onclick=result(this) >
<option>choose</option>
<option>ad</option>
</select>
<input type=submit name=submit value="submit">
</form>
<form action=testing.php method='post'>
<input type="checkbox" name='first'>
<input type="checkbox" name='second'>
<input type="checkbox" name='third'>
<input type='text' name='a'/>
<div id='i'><input type=submit name='submit1' value="submit"></div>
<input type=submit name='submit2' value=update />
</form>
<form action=testing.php method='post'>
<input type="checkbox" name='first1'>
<input type="checkbox" name='second1'>
<input type="checkbox" name='third1'>
<input type=submit name='submit8' value=update />
</form>
<form action="testing.php" method='post'>
<input type="text" name='first3'>
<input type=submit name='submit9' value=update />

</form>
<script>
function result(hj)
{document.getElementById('fe').innerHTML="";
}


</script>
<div id=fe>
</div>
</body>
<?php

if(isset($_POST['submit5']))
{
	if(!empty($_POST['new']))
	{
	echo $rolln0;
	

$k=$_POST['new'];

	
	$connect=mysql_query("update student_details set student_name='$k' where roll_no='$rolln0'");
	if($connect==true)
	{echo 'updated';
	
	}
	else{
		echo 'not';
	}
}

if(!empty($_POST['new1']))
{
	$gender=$_POST['new1'];	
$connect1=mysql_query("update student_details set gender='$gender' where roll_no='$rolln0'");
	if($connect1==true)
	{echo 'updated';
	
	}
	else{
		echo 'not';
	}
}

if(!empty($_POST['new2']))
{$class=$_POST['new2'];
$connect2=mysql_query("update student_details set class='$class' where roll_no='$rolln0'");
	if($connect2==true)
	{echo 'updated';
	
	}
	else{
		echo 'not';
	}
}
}
?>
<?php
if(isset($_POST['submit8']))

{echo'<form action=testing.php method=post>';

	if(isset($_POST['first1']))

{echo'<div id=main>';
echo'<input type=text name=new>';
}
if(isset($_POST['second1']))
{echo $_POST['second1'];
	echo'<div id=main1>';
echo'<input type=text name=new1>';

}
if(isset($_POST['third1']))
{echo'<div id=main2>';
echo'<input type=text name=new2>';
echo $rolln0;
}

echo'<button type=submit name=submit5 >update</button>';
echo'</form>';

}?>
<?php
if(!empty($_POST['a'])){
	if(isset($_POST['first'])&&isset($_POST['second']))
{
$get=$_POST['a'];
$some=explode(',',$get);
$gh=$some[0];
$gh1=$some[1];
$as=mysql_query("select * from subjects where subject_name='$gh' and id='1'");
while($bs=mysql_fetch_array($as))
{$id2=$bs['id'];
$sname2=$bs['subject_name'];
echo $id2;
echo $sname2;
echo '<a href=a.php?id='.$id2.'><button type=button> click</button></a>';
}

}

elseif(isset($_POST['submit'])&&isset($_POST['check']))
{

$a=mysql_query('select * from subjects where id=1');
while($b=mysql_fetch_array($a))
{$id=$b['id'];
$sname=$b['subject_name'];
echo '<div id=ff>';
echo $id;
echo $sname;
echo '<a href=a.php?id='.$id.'><button type=button> click</button></a>';
echo '</div>';
}

}

	
}

?>
