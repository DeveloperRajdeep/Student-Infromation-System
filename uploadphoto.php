<?php
include 'conn.php';
if($_FILES['photo'] ['tmp_name']){
	$image=$_FILES['photo']['tmp_name'];
	$image=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name=addslashes($_FILES['photo']['name']);
	move_uploaded_file($_FILES['photo']['tmp_name'],"uploadephoto/".$_FILES['photo']['name']);
	
	$permenant="uploadephoto/".$_FILES['photo']['name'];
	$sql=mysql_query("insert into photo(photo) values ('$permenant')");
	
	if($sql==1)
	{echo"photo uploaded";
	}
	else
	{echo"not uploaded";
	}
	
	
}


/*$result=mysql_query("select * from photo");
while($test=mysql_fetch_row($result))
{$photos=$test['photo'];

echo "<table>";
echo "<tr>";
echo"<td>";
echo $photos;
echo"</td>";
echo"</tr>";
echo "</table>";

}
*/



?>