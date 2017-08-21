<?php

include 'conn.php';
if(empty($_POST['a']))
{header('location:photo.php');
}
else if(isset($_POST['submit']))
{
$s=$_POST['a'];



echo $s;
echo'<input type=text value='.$s.'>';
}
/*$result=mysql_query("select * from photo");
while($test=mysql_fetch_array($result))
{$photos=$test['photo'];

echo "<div>";
echo "<img width=100 src='".$photos."'>";
echo "</div>";
}
*/

?>
