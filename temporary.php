<?php
include'conn.php';
?>
<?php 
if(isset($_POST['submit']))
{	error_reporting(0);
	$rollno1=$_POST['rollno1'];
	$rollno2=$_POST['rollno2'];
	$rollno=$rollno1.'-'.$rollno2;
	$student_name1=$_POST['student_name'];
	$class=$_POST['class'];
	$dob1=$_POST['dob1'];
	$dob2=$_POST['dob2'];
	$dob3=$_POST['dob3'];
	$dob=$dob3.'-'.$dob2.'-'.$dob1;
	$age=$_POST['age'];
	$gender1=$_POST['gender'];
	$nationality1=$_POST['nationality'];
	$religion=$_POST['religion'];
	$cast=$_POST['cast'];
	$migration=$_POST['migration'];
	$present_address=$_POST['present_address'];
	$permanent_address=$_POST['peraddress'];
	$locality=$_POST['locality'];
	$city=$_POST['ctv'];
	$residence=$_POST['residence'];
	$district=$_POST['district'];
	$state=$_POST['state'];
	$pincode=$_POST['pincode'];
	$email=$_POST['email'];
	$mobile_no=$_POST['m_no'];
	$father_name=$_POST['father_name'];
	$mother_name=$_POST['mother_name'];
	$father_qualification=$_POST['f_qualification'];
	$mother_qualification=$_POST['m_qualification'];
	$father_occupation=$_POST['f_occupation'];
	$mother_occupation=$_POST['m_occupation'];
	$father_mobile_no=$_POST['f_no'];
	$blood_group=$_POST['blood_group'];
	$identity=$_POST['identity'];
	$select=$_POST['select'];
	$answer=$_POST['answer'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$some1=$_POST['sub1'];
	$some2=$_POST['sub2'];
	$some3=$_POST['sub3'];
	$some4=$_POST['sub4'];
	$some5=$_POST['sub5'];
	$some6=$_POST['sub6'];
	$some7=$_POST['sub7'];
	$some8=$_POST['sub8'];	
	$some9=$_POST['alt9'];
	$some10=$_POST['alt10'];
	$some11=$_POST['alt11'];
	
	$status=$_POST['status'];
	$target='upload/';
	$image=$_FILES['photo']['tmp_name'];
	$image=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name=addslashes($_FILES['photo']['name']);
	move_uploaded_file($_FILES['photo']['tmp_name'],$target.$_FILES['photo']['name']);
	
	$photo="upload/".$_FILES['photo']['name'];
	$sql8=mysql_query("select * from security_details where roll_no='$rollno' or username='$username' or password='$password'");
	if(mysql_num_rows($sql8)>=1)
	{header('location:infoform.php');
	}
	else{
	$sql1=mysql_query("insert into student_details(roll_no,student_name,class,gender,nationality,religion,cast,migration,dob,age) values('$rollno','$student_name1','$class','$gender1','$nationality1','$religion','$cast','$migration','$dob','$age')");
	$sql2=mysql_query("insert into subject_taken(roll_no,class,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,alt9,alt10,alt11,status)values ('$rollno','$class','$some1','$some2','$some3','$some4','$some5','$some6','$some7','$some8','$some9','$some10','$some11','$status')");
	
	$sql3=mysql_query("insert into address_details(present_address,permanent_address,locality,city_town_village,residence,district,state,pincode,e_mail,mobile_no,roll_no,status) values('$present_address','$permanent_address','$locality','$city','$residence','$district','$state','$pincode','$email','$mobile_no','$rollno','$status')");
	$sql4=mysql_query("insert into guardian_details(father_guardian_name,mother_name,father_qualification,mother_qualification,father_occupation,mother_occupation,father_no,roll_no,status) values('$father_name','$mother_name','$father_qualification','$mother_qualification','$father_occupation','$mother_occupation','$father_mobile_no','$rollno','$status')");
	$sql5=mysql_query("insert into medical_details(roll_no,blood_group,identification,status) values('$rollno','$blood_group','$identity','$status')");
	$sql6=mysql_query("insert into security_details(roll_no,security_question,security_answer,username,password,status) values('$rollno','$select','$answer','$username','$password','$status')");
	$sql7=mysql_query("insert into picture(photo,rollno,status) values('$photo','$rollno','$status')");
	
	if($sql1==1 && $sql2==1 && $sql3==1 && $sql4==1 && $sql5==1 && $sql6==1 && $sql7==1)
	{
		echo'registered';
	}
}
}

	?>