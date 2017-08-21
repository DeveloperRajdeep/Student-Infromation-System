<?php $t=1;
?>
<form action='s.php' method='post'>
<?php
$k=1;
$d='new';

echo'<input type=checkbox name='.$d.$k.' value=some>';
echo'<input type=checkbox name='.$d.'3'.'>';?>
<input type='submit' name='submit' value='submit'>
</form>
<?php include 'conn.php';
if(isset($_POST['submit']))
{
$in=$_POST['new1'];
$in1=$_POST['new3'];
$a=5;
$h=$in.$a;
$sql=mysql_query("insert into (sub1,sub2) alues ('$h','$in1')");
if($sql==1)
{echo'inserted';
echo $in;
}
else{echo'not';
}
}
?>