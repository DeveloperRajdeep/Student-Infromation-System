<?php include 'conn.php';
?>

<html>
<head>
<style type="text/css">
#main{position:relative;
width:100%;
padding:0px;
margin:0px;
}
	
#apDiv2 {padding:0px;
margin:0px;

	position: absolute;
	width: 60%;
	height: 1349px;
	z-index: 1;
	left: 5%;
	top: 1px;
}
</style>
</head>
<body id='main'>

 <script src="datetimepicker_css.js"></script>
 
 <script>
 function doselect(pick)
 {var get=pick.value;
 if(get=='IX'||get=='X')
 {document.getElementById('alt').innerHTML="<?php $sql9=mysql_query('select * from subjects where status=1');
			while($results=mysql_fetch_array($sql9))
	{$alternative=$results['subject_name'];
	$id9=$results['id'];?>"+"<?php echo $alternative;?>"+"<input type=checkbox  name=alt"+"<?php echo $id9;?>"+" value="+"<?php echo $alternative;?>"+">"+
"<?php }?>";
 }
 else{document.getElementById('alt').innerHTML="";
 }
 }

 

</script>
  <div id="apDiv1">

  <div id="apDiv2">
  
        <table width="800" border="1">
      <tr>
      <td>
       <form action='temporary.php' method='post' enctype="multipart/form-data">
        <fieldset>
        
        <h3><u>Student Details:</u></h3>
          
      	<?php
	echo'ROLL NO <select name=rollno1 required=required>';
	echo'<option value="">CHOOSE</option>'; 
 
		$sql1=mysql_query("select * from class ");
		while($rows=mysql_fetch_array($sql1))
		{
			$class=$rows['classname'];
      
     		 			 echo'<option  value='.$class.'>'.$class.'</option>';
		}
		echo'</select>';
		echo'<select name=rollno2 required=required>';
	echo'<option value="">CHOOSE</option>'; 
 
	for($i=0;$i<=200;$i++)
	{     echo'<option  value='.$i.'>'.$i.'</option>';
		}   
		echo'</select>';
         ?>
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Student Name: <input type="text" placeholder="Enter your Name" onKeyUp="student_validation(this)" onBlur="student_validation1()" name="student_name" id="stdnt"/><span id='b'></span><br /><br />
         
         
<?php
	echo'CLASS <select name=class required=required onclick=doselect(this) >';
	echo'<option value="" id=0>CHOOSE</option>'; 
 		$j=1;
		$sql1=mysql_query("select * from class ");
		while($rows=mysql_fetch_array($sql1))
		{
			$class=$rows['classname'];
      			
     		 			 echo'<option  value='.$class.' id='.$j.'>'.$class.'</option>';
				$j++;		
		}
		echo'</select>';
         ?>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;
		  
         
         Date of Birth:   <select name='dob1' required='required' >
         				<option value=''>DATE</option>
         				<?php 
						for($i=1;$i<=31;$i++)
						{echo'<option value='.$i.'>'.$i.'</option>';
						}
						?>
                        </select>&nbsp;
                        <select name='dob2' required='required'>
                        <option value=''>MONTH</option>
                        <?php $month=array("JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER");
						for($j=0;$j<=11;$j++)
						{
						echo'<option value='.$month[$j].'>'.$month[$j].'</option>';
						}
						?>
                        </select>
                        <select name='dob3' required='required'>
                        <option value=''>YEAR</option>
                        <?php for($k=1990;$k<=2005;$k++)
						{echo'<option value='.$k.'>'.$k.'</option>';
						}
						?>
                        </select>
                        
                      
                        
         <br /><br />
         Age: <select name='age' id="chooseage" >
         <option value=' '>CHOOSE</option>
         <?php for($i=10;$i<=20;$i++)
		 {?>
         <option value="<?php echo $i;?>"><?php echo $i;?></option>
         <?php }?>
         </select> 
         
          &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Gender:<input type="radio" name="gender" value="Male" id="RadioGroup1_0" />
         Male
         
         <input type="radio" name="gender" value="Female" id="RadioGroup1_1" />
         Female
         <br/><br/>
         
         Nationality: <input type="text" placeholder="Enter Your Nationality" name="nationality" id="nation"  onkeyup='valid_national(this)'><span id='n'></span>
         
          &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
         
         
         Religion:  <select name='religion' REQUIRED='REQUIRED' >
         <option value=''>CHOOSE</option>
         <option value='HINDUISM'>HINDUISM</option>
         <option VALUE='ISLAM'>ISLAM</option>
         <OPTION VALUE='CHRISTIANITY'>CHRISTIANITY</OPTION>
         <OPTION VALUE='SIKHISM'>SIKHISM</OPTION>
         <OPTION VALUE='BUDDHISM'>BUDDHISM</OPTION>
         <OPTION VALUE='JAINISM'>JAINISM</OPTION>
         <OPTION VALUE=''>OTHERS</OPTION>
         </select>
         
          &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
         
         
         CAST:
         
         <input type="radio" name="cast" value="general" id="RadioGroup2_0" />
         General
         
         
         <input type="radio" name="cast" value="obc" id="RadioGroup2_1" />
         OBC
         
         
         <input type="radio" name="cast" value="mobc" id="RadioGroup2_2" />
         MOBC
         
         
         <input type="radio" name="cast" value="ncl" id="RadioGroup2_3" />
         OBC-NCL
         
         
         <input type="radio" name="cast" value="others" id="RadioGroup2_4" />
         Others
         <br /><br />
            
         Subject taken:
         <div id>
		 <?php
	
		$sql5=mysql_query('select * from subjects where status=0');
			while($result5=mysql_fetch_array($sql5))
	{$subjects=$result5['subject_name'];
	$id=$result5['id'];?>
<?php echo $subjects;?><input type=checkbox  name=sub<?php echo $id;?> value='<?php echo $subjects;?>'>

<?php }?>	
</div>
	<div id='alt'>	
	 

         </div>
           <br /><br />
       
        Migrated from any school: <input type="text" placeholder="Last where studied" name="migration" id="migration"  onkeyup='valid_migration(this)'/>
        <span id='m'></span>
  
         
        
           </fieldset>
           <br /><br />
        <fieldset>          
          <h3><u>Address Details:</u></h3>
        
         Present Address:  <input type="text" placeholder="Enter Your Present Address" name="present_address" id="present_address" onkeyup='valid_address(this)'/>
 <span id='p_address'></span>        
           &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
          Permanent Address:  <input type="text" placeholder="Enter Your Permanant Address" name="peraddress" id="peraddress" onkeyup='valid_peraddress(this)' /><span id='per_address'></span>
          <br /><br />
          
         Locality:  <input type="text" placeholder="Enter Your Locality"  name="locality" id="locality" onkeyup='valid_locality(this)' /><span id='l'></span> 
         
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         City/Town/Village:  <input type="text" placeholder="Enter Your City/Town/Village" name="ctv" id="ctv"  onkeyup='valid_ctv(this)'/><span id='c'></span>
         <br /><br />
         
         Place of Residence: 
         
           <label>
             <input type="radio" name="residence" value="rural" id="RadioGroup4_0" />
             Rural</label>
           
           <label>
             <input type="radio" name="residence" value="urban" id="RadioGroup4_1" />
             Urban</label>
           &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
           
         
         District: <input type="text" placeholder="Enter Your District" name="district" id="district" onkeyup='valid_district(this)' onblur='valid_district1()' /><span id='d'></span>
         <br /><br />
         
         State: <input type="text" placeholder="Enter Your State" name="state" id="state" onkeyup='valid_state(this)' onblur='valid_state1()' /><span id='s'></span>
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Pincode: <input type="text" placeholder="Enter Your Pincode" name="pincode" onKeyUp="check_pin(this)" id="pincode" onblur='check_pin1(this)' />
        <span id='pin_no'></span> <br /><br />
         
         E-mail: <input type="text" placeholder="Ex:abc@gmail.com" name="email" id="e-mail" onKeyUp="check_email(this)" onblur='check_email1(this)'/><span id='email'></span>
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Mobile No.: <input type="text" placeholder="+91-10 digit mobile no." onKeyUp="check_no(this)" name="m_no" id="m_no"  onblur='check_no1(this)'/><span id="mno"></span>
         <br /><br />
         </fieldset>
         
         <br /><br />
         <fieldset>          
          <h3><u>Guardian Details:</u></h3>
        
         Father's/Guardian's Name:  <input type="text" placeholder="Enter Your F/G Name" name="father_name" id="father_name" onkeyup='valid_guardianname(this)' onblur='valid_guardianname1()' /><span id='f_name'></span>
         
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         
         Mother's Name: <input type="text" placeholder="Enter Your Mothers Name" name="mother_name" id="mother_name" onkeyup='valid_mothername(this)' onblur='valid_mothername1()' /><span id='m_name'></span>
         <br /><br />
         
          Father's Qualification: <input type="text" placeholder="Enter Your Father's Qualification" name="f_qualification" id="f_qualification" onkeyup='valid_fquali(this)' onblur='valid_fquali1()'/><span id='f_q'></span>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            
            Mother's Qualification: <input type="text" placeholder="Enter Your Mother's Qualification" name="m_qualification" id="m_qualification"  onkeyup='valid_mquali(this)' onblur='valid_mquali1()'/><span id='m_q'></span> 
            
           <br /><br />
           
            Father's Occupation: <input type="text" placeholder="Enter Your Father's Occupation" name="f_occupation" id="f_occupation" onkeyup='valid_occupation(this)' onblur='valid_occupation1()'/><span id='f_o'></span>
            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            
             Mother's Occupation: <input type="text" placeholder="Enter Your Mother's Occupation" name="m_occupation" id="m_occupation" onkeyup='valid_moccupation(this)' onblur='valid_moccupation1()'/><span id='m_o'></span><br /><br />
             
             Father's Mobile No.: <input type="text" name="f_no" id="f_no" onkeyup='valid_fno(this)' placeholder='+91-10 digit no' onblur='valid_fno1(this)' /><span id='f_mobileno'></span>
             
              <br /><br />
         </fieldset>
         
         <br /><br />
         
         <fieldset>
         
         <h3><u>Medical Details:</u></h3>
         

         
         Blood Group:
            <label>
             <input type="radio" name="blood_group" value="A+" id="RadioGroup3_0" />
            A+</label>
          
          <label>
            <input type="radio" name="blood_group" value="A-" id="RadioGroup3_1" />
            A-</label>
          
          <label>
            <input type="radio" name="blood_group" value="B+" id="RadioGroup3_2" />
            B+</label>
          
          <label>
            <input type="radio" name="blood_group" value="B-" id="RadioGroup3_3" />
            B-</label>
          
          <label>
            <input type="radio" name="blood_group" value="AB+" id="RadioGroup3_4" />
            AB+</label>
          
          <label>
            <input type="radio" name="blood_group" value="AB-" id="RadioGroup3_5" />
            AB-</label>
          
          <label>
            <input type="radio" name="blood_group" value="O+" id="RadioGroup3_6" />
            O+</label>
          
          <label>
            <input type="radio" name="blood_group" value="O-" id="RadioGroup3_7" />
            O-</label>
            
            <br /><br />
      
     
         Identification: <textarea name="identity" id="textfield14" cols='15' rows='2' required='required'></textarea>
         <br /><br />
         </fieldset>
         
         
       <br /><br />
      <fieldset>
      <h3><u>Security Details:</u></h3>
      <p>Password must be between 5 to 10 characters which contain at least one lowercase letter ,one uppercase letter , and one special character</p><br/>
  		
       Security Question:
         <label for="select" requred='required'></label>
         <select name="select" id="select">
           <option value="petname">What is your pet name?</option>
           <option value="bestfrnd">Who is your best friend?</option>
           <option value="sitemost">Which site do you visit most?</option>
         </select>
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
       
        Security Answer:
        	<input type="text" name="answer" id="answer" required='required' placeholder='PICK YOUR ANSWER'/><br /><br />
         
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        
         Username:
         <input type="text" name="username" id="username" required='required' onkeyup='valid_username(this)' onblur='valid_username1()'/><span id='uname'></span>
         <br /><br />
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          
         Password:
         <input type="password" name="password" id="password" onkeyup='valid_password(this)' onblur='valid_password1(this)' required='required' /><span id='psword'></span><br /><br />
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Confirm Password:
         <input type="password" name="confirm" id="confirm" onkeyUp="confirm_password(this)"  onblur='confirm_password1(this)' onkeydown='confirm_password2(this)' required='required'/><span id='confirm1'></span><br /><br />
         
         </fieldset>
         <br /><br />
         
          <fieldset>
         <h3><u>Upload your photo:</u></h3>
         
         
		<input type='file'  name="photo" />
		
        <input type='hidden' name='status' value='0'/>

		</fieldset>
         
         <br /><br />
         
         <fieldset>
         <h3><u>Declaration:</u></h3>
         <p><strong>I hereby declare that all the particulars stated in this application form are true to the best of my knowledge and belief. I have read and understood the SJS procedures. I shall abide by terms and conditions thereon.</strong></p>
         <p>
           <input type="submit" name="submit" id="button" value="Submit" />
           <input type="reset" name="button2" id="button2" value="Reset" />
         </p>
         </fieldset>
    
    
        </form>
    </td>
    </tr>
     
    </table>
  </div>
</div>
<script>

var check_studentname=/^[A-Za-z\s]+$/;
 function student_validation(test1)
 {var res1=test1.value;
 document.getElementById('stdnt').value=res1.toUpperCase();
 var result1=check_studentname.test(res1);
 if(result1!=true)
 {document.getElementById('b').innerHTML=" ENTER VALID NAME";
  document.getElementById("stdnt").value='';
 }
 else{document.getElementById("b").innerHTML="";

 }
 }
  function student_validation1()
  {document.getElementById("b").innerHTML="";

  }

 function valid_national(test6)
 {var nation=test6.value;
 document.getElementById("nation").value=nation.toUpperCase();
 var nation_result=check_studentname.test(nation);
 if(nation_result!=true)
 {document.getElementById('n').innerHTML=" ENTER VALID NAME";
  document.getElementById("nation").value='';
 }
 else{document.getElementById("n").innerHTML="";

 }
 }
 function valid_migration(test7)
 {var check=/^[A-Za-z1-9\s\-]+$/;
	 var migration=test7.value;
 document.getElementById("migration").value=migration.toUpperCase();
 var migration_result=check.test(migration);
 if(migration_result!=true)
 {document.getElementById('m').innerHTML=" ENTER CORRECTLY";
  document.getElementById("migration").value='';
 }
 else{document.getElementById("m").innerHTML="";

 }
 }
 function valid_address(test8)
 {var check1=/^[A-Za-z1-9\s\-]+$/;
	 var address=test8.value;
 document.getElementById("present_address").value=address.toUpperCase();
 var address_result=check1.test(address);
 if(address_result!=true)
 {document.getElementById('p_address').innerHTML=" ENTER CORRECTLY";
  document.getElementById("present_address").value='';
 }
 else{document.getElementById("p_address").innerHTML="";

 }
 }
 function valid_peraddress(test9)
 {var check2=/^[A-Za-z1-9\s\-]+$/;
	 var address2=test9.value;
 document.getElementById("peraddress").value=address2.toUpperCase();
 var address_result1=check2.test(address2);
 if(address_result1!=true)
 {document.getElementById('per_address').innerHTML=" ENTER CORRECTLY";
  document.getElementById("peraddress").value='';
 }
 else{document.getElementById("per_address").innerHTML="";

 }
 }
 function valid_locality(test10)
 {var check3=/^[A-Za-z1-9\s\-]+$/;
	 var local=test10.value;
 document.getElementById("locality").value=local.toUpperCase();
 var local_result=check3.test(local);
 if(local_result!=true)
 {document.getElementById('l').innerHTML=" ENTER CORRECTLY";
  document.getElementById("locality").value='';
 }
 else{document.getElementById("l").innerHTML="";

 }
 }
 function valid_ctv(test11)
 {var check4=/^[A-Za-z\s\-]+$/;
	 var ctv=test11.value;
 document.getElementById("ctv").value=ctv.toUpperCase();
 var ctv_result1=check4.test(ctv);
 if(ctv_result1!=true)
 {document.getElementById('c').innerHTML=" ENTER CORRECTLY";
  document.getElementById("ctv").value='';
 }
 else{document.getElementById("c").innerHTML="";

 }
 }
 function valid_district(test12)
 {var check5=/^[A-Za-z\s]+$/;
	 var district=test12.value;
 document.getElementById("district").value=district.toUpperCase();
 var district_result=check5.test(district);
 if(district_result!=true)
 {document.getElementById('d').innerHTML=" ENTER CORRECTLY";
  document.getElementById("district").value='';
 }
 else{document.getElementById("d").innerHTML="";

 }
 }
 function valid_district1()
 {document.getElementById('d').innerHTML='';
 } 
 function valid_state(test13)
 {var check6=/^[A-Za-z\s]+$/;
	 var state=test13.value;
 document.getElementById("state").value=state.toUpperCase();
 var state_result=check6.test(state);
 if(state_result!=true)
 {document.getElementById('s').innerHTML=" ENTER CORRECTLY";
  document.getElementById("state").value='';
 }
 else{document.getElementById("s").innerHTML="";

 }
 }
 function valid_state1()
 {document.getElementById('s').innerHTML='';
 }
	 

var pin1=/^[0-9]{1,6}$/;
 function check_pin(test2)
 {var pin=test2.value;
 var result2=pin1.test(pin);
 if(result2!=true)
 {
 document.getElementById('pin_no').innerHTML='ENTER CORRECTLY';
 document.getElementById('pincode').value='';
 }
 else{document.getElementById('pin_no').innerHTML="";
 }
}
function check_pin1(test_2)
{pin2=test_2.value;
 if(pin2.length!=6)
 {
	 document.getElementById('pincode').value='';
	 document.getElementById('pin_no').innerHTML="";
 }
}
  var email=/^[a-z]{1,100}@[a-z]{1,20}\.[a-z]{1,10}\.{0,1}[a-z]{0,5}$/;
 function check_email(test3)
 {var email1=test3.value
 var result3=email.test(email1);
 if(result3!=true)
 {document.getElementById('email').innerHTML='ENTER CORRECTLY'; 
  
 }else
 {document.getElementById('email').innerHTML="";
 }
 }
 function check_email1(test_3)
 {email2=test_3.value;
 email_result=email.test(email2);
 if(email_result!=true)
 { document.getElementById('e-mail').value='';
	 document.getElementById('email').innerHTML="";

 }
 }
var no=/^\+91-[0-9]{10}$/;
 function check_no(test4)
 {var res4=test4.value;
 var result4=no.test(res4);
 if(result4!=true)
 {document.getElementById('mno').innerHTML='ENTER CORRECTLY';
 }else
 {document.getElementById('mno').innerHTML="";
 }
 }
 function check_no1(test_4)
 {var mobile=test_4.value;
 var result_4=no.test(mobile);
 if(result_4!=true)
 {
document.getElementById('m_no').value='';
	 document.getElementById('mno').innerHTML="";
 }
 }
 var check7=/^[A-Za-z\s]+$/;
 function valid_guardianname(test14)
 {
  var fname=test14.value;
 document.getElementById("father_name").value=fname.toUpperCase();
 var fname_result=check7.test(fname);
 if(fname_result!=true)
 {document.getElementById('f_name').innerHTML=" ENTER CORRECTLY";
  document.getElementById("father_name").value='';
 }
 else{document.getElementById("f_name").innerHTML="";

 }
 }function valid_guardianname1()
 {document.getElementById('f_name').innerHTML='';
 }
 var check8=/^[A-Za-z\s]+$/;
 function valid_mothername(test15)
 {
  var mname=test15.value;
 document.getElementById("mother_name").value=mname.toUpperCase();
 var mname_result=check8.test(mname);
 if(mname_result!=true)
 {document.getElementById('m_name').innerHTML=" ENTER CORRECTLY";
  document.getElementById("mother_name").value='';
 }
 else{document.getElementById("m_name").innerHTML="";

 }
 }function valid_mothername1()
 {document.getElementById('m_name').innerHTML='';
 }
 var check9=/^[A-Za-z\s\.\-]+$/;
 function valid_fquali(test16)
 {
  var fquali=test16.value;
 document.getElementById("f_qualification").value=fquali.toUpperCase();
 var fquali_result=check9.test(fquali);
 if(fquali_result!=true)
 {document.getElementById('f_q').innerHTML=" ENTER CORRECTLY";
  document.getElementById("f_qualification").value='';
 }
 else{document.getElementById("f_q").innerHTML="";

 }
 }function valid_fquali1()
 {document.getElementById('f_q').innerHTML='';
 }
  var check10=/^[A-Za-z\s\.\-]+$/;

 function valid_mquali(test17)
 {
  var mquali=test17.value;
 document.getElementById("m_qualification").value=mquali.toUpperCase();
 var mquali_result=check10.test(mquali);
 if(mquali_result!=true)
 {document.getElementById('m_q').innerHTML=" ENTER CORRECTLY";
  document.getElementById("m_qualification").value='';
 }
 else{document.getElementById("m_q").innerHTML="";

 }
 }function valid_mquali1()
 {document.getElementById('m_q').innerHTML='';
 }
 var check11=/^[A-Za-z\s\.\-]+$/;

 function valid_occupation(test18)
 {
  var f_occupation=test18.value;
 document.getElementById("f_occupation").value=f_occupation.toUpperCase();
 var foccu_result=check11.test(f_occupation);
 if(foccu_result!=true)
 {document.getElementById('f_o').innerHTML=" ENTER CORRECTLY";
  document.getElementById("f_occupation").value='';
 }
 else{document.getElementById("f_o").innerHTML="";

 }
 }function valid_occupation1()
 {document.getElementById('f_o').innerHTML='';
 }
 var check12=/^[A-Za-z\s\.\-]+$/;

 function valid_moccupation(test19)
 {
  var m_occupation=test19.value;
 document.getElementById("m_occupation").value=m_occupation.toUpperCase();
 var moccu_result=check12.test(m_occupation);
 if(moccu_result!=true)
 {document.getElementById('m_o').innerHTML=" ENTER CORRECTLY";
  document.getElementById("m_occupation").value='';
 }
 else{document.getElementById("m_o").innerHTML="";

 }
 }function valid_moccupation1()
 {document.getElementById('m_o').innerHTML='';
 }
var check13=/^\+91\-[0-9]{10}$/;

function valid_fno(test20)
 {
  var mobileno=test20.value;
 var mobileno_result=check13.test(mobileno);
 if(mobileno_result!=true)
 {document.getElementById('f_mobileno').innerHTML=" ENTER CORRECTLY";
  }
 else{document.getElementById("f_mobileno").innerHTML="";

 }
 }
 function valid_fno1(test21)
 {var mobileno1=test21.value;
 var mobileno_valid=check13.test(mobileno1)	
 if(mobileno_valid!=true)
 {
	 document.getElementById('f_mobileno').innerHTML='';
	 document.getElementById('f_no').value='';
 }
 }
var check14=/^[A-Za-z0-9]+$/;
function valid_username(test22)
{var username=test22.value;
var username_result=check14.test(username);
if(username_result!=true)
{document.getElementById('uname').innerHTML='ENTER VALID USERNAME';
document.getElementById('username').value='';
}
else{document.getElementById('uname').innerHTML='';
}
}
function valid_username1()
{document.getElementById('uname').innerHTML='';
} 
var check15=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,10}$/;
function valid_password(test23)
{var password=test23.value;
var ps_result=check15.test(password);
if(ps_result!=true)
{
document.getElementById('psword').innerHTML='ENTER VALID PASSWORD';
}
else
{document.getElementById('psword').innerHTML='';
}
}
function valid_password1(test24)
{var password1=test24.value;
var ps_result1=check15.test(password1)
if(ps_result1!=true)
{document.getElementById('psword').innerHTML='';
document.getElementById('password').value='';

	}
}
var check16=/^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,10}$/;
function confirm_password(test25)
{var confirm_password=test25.value;
var confirm_result=check16.test(confirm_password);
if(confirm_result!=true)
{
document.getElementById('confirm1').innerHTML='ENTER VALID PASSWORD';
}
else
{document.getElementById('confirm1').innerHTML='';
}
}
function confirm_password1(test26)
{var confirm_password1=test26.value;
var confirm_result1=check16.test(confirm_password1)
if(confirm_result1!=true)
{document.getElementById('confirm1').innerHTML='';
document.getElementById('confirm').value='';

	}
}
 function confirm_password2(test5)
 {var confrm=test5.value;
  var pass=document.getElementById('password').value;
 if(pass==confrm)
 {document.getElementById('confirm1').innerHTML='';
 }
 
 
 else{
	 document.getElementById('confirm1').innerHTML="PASSWORD DOESN'T MATCH";
	 
	  }
 }	
</script>
 
</body>
</html>