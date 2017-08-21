<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html><?php include 'conn.php';
?>
<html>
<head>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1338px;
	height: 1499px;
	z-index: 1;
	left: 26px;
	top: 21px;
}
#apDiv2 {
	position: absolute;
	width: 1015px;
	height: 1349px;
	z-index: 1;
	left: 278px;
	top: 1px;
}
</style>
</head>
<body>

 <script src="datetimepicker_css.js"></script>
 
 <script>

function choose_class(pick)

{var some=pick.value; 
if(some==document.getElementById('0').value)
{
document.getElementById('here').innerHTML="  ";	
}
else if(some==document.getElementById('1').value)
{
	document.getElementById('here').innerHTML=" "+"MIL :"+"<input type='checkbox' name='sub1' value='MIL'>"+"  "+"ENGLISH :"+"<input type='checkbox' name='sub2' value='ENGLISH'>"+"  "+"GENERAL SCIENCE :"+"<input type='checkbox' name='sub3' value='GENERAL SCIENCE'>"+"  "+
	"SOCIAL SCIENCE :"+"<input type='checkbox' name='sub4' value='SOCIAL SCIENCE'>"+"  "+"MORAL SCIENCE :"+"  "+"<input type='checkbox' name='sub5' value='MORAL SCIENCE'>"+"  "+"MATHS :"+"<input type='checkbox' name='sub6' type='MATHS'>"+"  "+"GENERAL KNOWLEDGE :"+"<input type='checkbox' name='sub7' value='GENERAL KNOWLEDGE'>"+"  "+"COMPUTER :"+"<input type='checkbox' name='sub8' value='COMPUTER'>";
}
else if(some==document.getElementById('2').value)
{
	document.getElementById('here').innerHTML=" "+"MIL :"+"<input type='checkbox' name='sub1' value='MIL'>"+"  "+"ENGLISH :"+"<input type='checkbox' name='sub2' value='ENGLISH'>"+"  "+"GENERAL SCIENCE :"+"<input type='checkbox' name='sub3' value='GENERAL SCIENCE'>"+"  "+
	"SOCIAL SCIENCE :"+"<input type='checkbox' name='sub4' value='SOCIAL SCIENCE'>"+"  "+"MORAL SCIENCE :"+"  "+"<input type='checkbox' name='sub5' value='MORAL SCIENCE'>"+"  "+"MATHS :"+"<input type='checkbox' name='sub6' type='MATHS'>"+"  "+"GENERAL KNOWLEDGE :"+"<input type='checkbox' name='sub7' value='GENERAL KNOWLEDGE'>"+"  "+"COMPUTER :"+"<input type='checkbox' name='sub8' value='COMPUTER'>";
}
else if(some==document.getElementById('3').value || some==document.getElementById('4').value || some==document.getElementById('5').value)
{
	document.getElementById('here').innerHTML=" "+"MIL :"+"<input type='checkbox' name='sub1' value='MIL'>"+"  "+"ENGLISH :"+"<input type='checkbox' name='sub2' value='ENGLISH'>"+"  "+"GENERAL SCIENCE :"+"<input type='checkbox' name='sub3' value='GENERAL SCIENCE'>"+"  "+
	"SOCIAL SCIENCE :"+"<input type='checkbox' name='sub4' value='SOCIAL SCIENCE'>"+"  "+"MORAL SCIENCE :"+"  "+"<input type='checkbox' name='sub5' value='MORAL SCIENCE'>"+"  "+"MATHS :"+"<input type='checkbox' name='sub6' type='MATHS'>"+"  "+"GENERAL KNOWLEDGE :"+"<input type='checkbox' name='sub7' value='GENERAL KNOWLEDGE'>"+"  "+"COMPUTER :"+"<input type='checkbox' name='sub8' value='COMPUTER'>"+"  "+"GEOGRAPHY :"+"<input type='checkbox' name='alt1' value='GEOGRAPHY'>"+"  "+"ADVANCED MATH :"+"<input type='checkbox' name='alt2' value='ADVANCED MATH'>"+"  ";
}

}



</script>
 
<div id="apDiv1">
  <div id="apDiv2">

      <table width="800" border="1">
      <tr>
      <td>
       <form>
        <fieldset>
        <h3><u>Student Details:</u></h3>
          
      	<?php
	echo'ROLL NO <select name= rollno1 required=required>';
	echo'<option value="">CHOOSE</option>'; 
 
		$sql1=mysql_query("select * from class ");
		while($rows=mysql_fetch_array($sql1))
		{
			$class=$rows['classname'];
      
     		 			 echo'<option  value='.$class.'>'.$class.'</option>';
		}
		echo'</select>';
		echo'<select name= rollno2 required=required>';
	echo'<option value="">CHOOSE</option>'; 
 
	for($i=0;$i<=200;$i++)
	{     echo'<option  value='.$i.'>'.$i.'</option>';
		}   
		echo'</select>';
         ?>
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Student Name: <input type="text" placeholder="Enter your Name" onkeyup="student_validation(this)" name="textfield2" id="stdnt"/><span id='b'></span><br /><br />
         
         
<?php
	echo'CLASS <select name=class required=required>';
	echo'<option value="">CHOOSE</option>'; 
 
		$sql1=mysql_query("select * from class ");
		while($rows=mysql_fetch_array($sql1))
		{
			$class=$rows['classname'];
      
     		 			 echo'<option  value='.$class.'>'.$class.'</option>';
		}
		echo'</select>';
         ?>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;
         
         Date of Birth:   <input type="Text" placeholder="choose from the side icon" id="demo1" maxlength="25" size="25"/>
        <img src="images2/cal.gif" onclick="javascript:NewCssCal('demo1')" style="cursor:pointer"/>
         
         <br /><br />
         Age: <select name='age' id="chooseage" >
         <option value=' '>CHOOSE</option>
         <?php for($i=10;$i<=20;$i++)
		 {?>
         <option value="<?php echo $i?>"><?php echo $i?></option>
         <?php }?>
         </select> 
         
          &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Gender:<input type="radio" name="RadioGroup1" value="Male" id="RadioGroup1_0" />
         Male
         
         <input type="radio" name="RadioGroup1" value="Female" id="RadioGroup1_1" />
         Female
         <br/><br/>
         
         Nationality: <input type="text" placeholder="Enter Your Nationality" name="textfield12" id="textfield12" />
         
          &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
         State of Eligibility:<input type="text" placeholder="Enter Your State" name="textfield13" id="textfield13" /><br /><br />
         
         
         Religion:  <input type="text" placeholder="Enter Your Religion" name="textfield14" id="textfield14" />
         
          &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
         
         
         Category:
         
         <input type="radio" name="RadioGroup2" value="general" id="RadioGroup2_0" />
         General
         
         
         <input type="radio" name="RadioGroup2" value="obc" id="RadioGroup2_1" />
         OBC
         
         
         <input type="radio" name="RadioGroup2" value="mobc" id="RadioGroup2_2" />
         MOBC
         
         
         <input type="radio" name="RadioGroup2" value="ncl" id="RadioGroup2_3" />
         OBC-NCL
         
         
         <input type="radio" name="RadioGroup2" value="others" id="RadioGroup2_4" />
         Others
         <br /><br />
            
         Subject taken:
         <div id='here'>
         </div>
           <br /><br />
       
        Migrated from any school: <input type="text" placeholder="Last where studied" name="textfield15" id="textfield15" />
  
         
        
           </fieldset>
           <br /><br />
        <fieldset>          
          <h3><u>Address Details:</u></h3>
        
         Present Address:  <input type="text" placeholder="Enter Your Present Address" name="textfield14" id="textfield14" />
         
           &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
          Permanent Address:  <input type="text" placeholder="Enter Your Permanant Address" name="textfield14" id="textfield14" />
          <br /><br />
          
         Locality:  <input type="text" placeholder="Enter Your Locality"  name="textfield14" id="textfield14" /> 
         
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         City/Town/Village:  <input type="text" placeholder="Enter Your City/Town/Village" name="textfield14" id="textfield14" />
         <br /><br />
         
         Place of Residence: 
         
           <label>
             <input type="radio" name="RadioGroup4" value="rural" id="RadioGroup4_0" />
             Rural</label>
           
           <label>
             <input type="radio" name="RadioGroup4" value="urban" id="RadioGroup4_1" />
             Urban</label>
           &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
           
         
         District: <input type="text" placeholder="Enter Your District" name="textfield14" id="textfield14" />
         <br /><br />
         
         State: <input type="text" placeholder="Enter Your State" name="textfield14" id="textfield14" />
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Pincode: <input type="text" placeholder="Enter Your Pincode" name="textfield14" onmouseout="check_pin(this)"id="textfield14" />
        <span id='pin_no'></span> <br /><br />
         
         E-mail: <input type="text" placeholder="Ex:abc@gmail.com" name="textfield14" id="textfield14" onmouseout="check_email(this)" /><span id='email'></span>
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Mobile No.: <input type="text" placeholder="+91-10 digit mobile no." onmouseout="check_no(this)" name="textfield14" id="textfield14" /><span id="m_no"></span>
         <br /><br />
         </fieldset>
         
         <br /><br />
         <fieldset>          
          <h3><u>Guardian Details:</u></h3>
        
         Father's/Guardian's Name:  <input type="text" placeholder="Enter Your F/G Name" name="textfield14" id="textfield14" />
         
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         
         Mother's Name: <input type="text" placeholder="Enter Your Mothers Name" name="textfield14" id="textfield14" />
         <br /><br />
         
          Father's Qualification: <input type="text" placeholder="Enter Your Father's Qualification" name="textfield14" id="textfield14" />
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            
            Mother's Qualification: <input type="text" placeholder="Enter Your Mother's Qualification" name="textfield14" id="textfield14" /> 
            
           <br /><br />
           
            Father's Occupation: <input type="text" placeholder="Enter Your Father's Occupation" name="textfield14" id="textfield14" />
            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            
             Mother's Occupation: <input type="text" placeholder="Enter Your Mother's Occupation" name="textfield14" id="textfield14" /><br /><br />
             
             Father's Mobile No.: <input type="text" name="textfield14" id="textfield14" />
             
              <br /><br />
         </fieldset>
         
         <br /><br />
         
         <fieldset>
         
         <h3><u>Medical Details:</u></h3>
         

         
         Blood Group:
            <label>
             <input type="radio" name="RadioGroup3" value="a_pos" id="RadioGroup3_0" />
            A+</label>
          
          <label>
            <input type="radio" name="RadioGroup3" value="a_neg" id="RadioGroup3_1" />
            A-</label>
          
          <label>
            <input type="radio" name="RadioGroup3" value="b_pos" id="RadioGroup3_2" />
            B+</label>
          
          <label>
            <input type="radio" name="RadioGroup3" value="b_neg" id="RadioGroup3_3" />
            B-</label>
          
          <label>
            <input type="radio" name="RadioGroup3" value="ab_pos" id="RadioGroup3_4" />
            AB+</label>
          
          <label>
            <input type="radio" name="RadioGroup3" value="ab_neg" id="RadioGroup3_5" />
            AB-</label>
          
          <label>
            <input type="radio" name="RadioGroup3" value="o_pos" id="RadioGroup3_6" />
            O+</label>
          
          <label>
            <input type="radio" name="RadioGroup3" value="o_neg" id="RadioGroup3_7" />
            O-</label>
            
            <br /><br />
      
     
         Identification: <input type="text" name="textfield14" id="textfield14" />
         <br /><br />
         </fieldset>
         
         
       <br /><br />
      <fieldset>
      <h3><u>Security Details:</u></h3>
      
       Security Question:
         <label for="select"></label>
         <select name="select" id="select">
           <option value="petname">What is your pet name?</option>
           <option value="bestfrnd">Who is your best friend?</option>
           <option value="sitemost">Which site do you visit most?</option>
         </select>
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
       
        Security Answer:
  			<input type="text" name="textfield16" id="textfield16" /><br /><br />
         
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        
         Username:
         <input type="text" name="textfield16" id="textfield16" />
         <br /><br />
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Password:
         <input type="password" name="textfield17" id="password" /><br /><br />
         
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         
         Confirm Password:
         <input type="password" name="textfield8" id="confirm" onmouseout="confirm_password(this)" /><span id='confirm1'></span><br /><br />
         
         </fieldset>
         <br /><br />
         
          <fieldset>
         <h3><u>Upload your photo:</u></h3>
         
         
		<input type='file' value='null' name="photo" />
		
        

		</fieldset>
         
         <br /><br />
         
         <fieldset>
         <h3><u>Declaration:</u></h3>
         <p><strong>I hereby declare that all the particulars stated in this application form are true to the best of my knowledge and belief. I have read and understood the SJS procedures. I shall abide by terms and conditions thereon.</strong></p>
         <p>
           <input type="submit" name="submit" id="button" value="Submit" />
           <input type="submit" name="button2" id="button2" value="Reset" />
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
 var result1=check_studentname.test(res1);
 if(result1!=true)
 {document.getElementById('b').innerHTML=" ENTER VALID NAME";
  document.getElementById("stdnt").value='';
 }
 else{document.getElementById("b").innerHTML="";

 }
 }
 </script>
 <script>var pin=/^[0-9]{6}$/;
 function check_pin(test2)
 {var res2=test2.value;
 var result2=pin.test(res2);
 if(result2!=true)
 {
 document.getElementById('pin_no').innerHTML=result2;
 }
 else{document.getElementById('pin_no').innerHTML=" ";}
 }</script>
 <script>
 var email=/^[a-z]{1,100}@[a-z]{1,20}\.[a-z]{1,10}$/;
 function check_email(test3)
 {var res3=test3.value
 var result3=email.test(res3);
 if(result3!=true)
 {document.getElementById('email').innerHTML=result3;
 }else
 {document.getElementById('email').innerHTML=" ";
 }
 }</script>
 <script>var no=/^\+91-[0-9]{10}$/;
 function check_no(test4)
 {var res4=test4.value;
 var result4=no.test(res4);
 if(result4!=true)
 {document.getElementById('m_no').innerHTML=result4;
 }else
 {document.getElementById('m_no').innerHTML=" ";
 }
 }</script>
 <script>

 function confirm_password(test5)
 {var confrm=test5.value;
  var pass=document.getElementById('password').value;
 if(pass==confrm)
 {document.getElementById('confirm1').innerHTML='right password';
 }
 
 else{
	 document.getElementById('confirm1').innerHTML="wrong password"
 }
 }</script>
 
</body>
</html>