<?php
include 'conn.php';

echo'<form action=something.php method=post>';
echo'<input type=text name=a>'.'<input type=submit value=d name=s>';
echo'</form>';   
?>

<?php

if(isset($_POST['s']))
{
$id=$_POST['a'];
$id1=$_POST['s'];
echo $id;
echo $id1;
header('refresh:3,location:something.php');
}
?>
