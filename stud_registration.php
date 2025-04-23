<?php
include("database.php");



if (isset($_POST['btn_submit']))

{
	$check_user=pg_query($con, "SELECT * FROM std_registration WHERE std_username='".$_POST['std_username']."'");
	
	if(@pg_num_rows($check_user)>0)
	{
		echo "Username already exits";
	}
	
	else
	{
	
	
			$insertq="INSERT INTO std_registration(std_name, std_course, std_year, std_roll_no, std_email, std_username, std_pass, std_mobile) VALUES('".$_POST['std_name']."','".$_POST['std_course']."', '".$_POST['std_year']."','".$_POST['std_roll_no']."','".$_POST['std_email']."','".$_POST['std_username']."','".$_POST['std_pass']."','".$_POST['std_mobile']."')";
		
		if(!pg_query($con, $insertq))
		{
			echo "Query Not Execute Error";
		}
		
		else
		{
			echo "Registration Successfully";
		}
	}

}




?>



<?php
include("main_header.php");
?>








<div class="row">
<div class="offset-3 col-6 border">
<h2 ALIGN="CENTER">Registration form</h2>

<form action="stud_registration.php" method="post" class="form-control">
      
        
        
         <label for="id">Name:</label>    
		<input class="form-control" name="std_name" type="text" placeholder="Please Enter your Name:" required="required"/>
       
<label for="course year">Course:</label>
<select required name="std_course" class="form-control"  >
 <option value=""> ---- Select Course -----</option>
  <option value="Computer"> Computer Engg </option>
   <option value="mechanical"> Mechanical Engg </option>
    <option value="civil"> Civil Engg </option>
     <option value="E&TC"> E&TC Engg </option>
      <option value="Electrical"> Electrical Engg </option>
       <option value="Automobile"> Automobile Engg. </option>
       <option value="Information Technology"> Information Technology </option>
</select>


<label  for="std_year">Year:</label>
<select required name="std_year" class="form-control" >
 <option value=""> ---- Select Year -----</option>
  <option value="FY"> FY </option>
   <option value="SY"> SY </option>
    <option value="TY"> TY </option>
     
</select>

<label for="roll_no">Roll_No:</label>
<input class="form-control" id="std_roll_no" maxlength="50" name="std_roll_no" type="text" required="required"/>

<label for="email">Mobile:</label>
<input class="form-control" id="mobile" maxlength="50" name="std_mobile" type="tel" required="required" pattern='^[789][0-9]{9}$'/>

<label for="email">Email_Address:</label>
<input class="form-control" id="email" maxlength="50" name="std_email" type="email" required="required"/>

<label for="username">User_Name:</label>
<input class="form-control" id="username" maxlength="50" name="std_username" type="text" required="required"/>

<label for="password">Password:</label>
<input  class="form-control" id="password" maxlength="50" name="std_pass" type="password" required="required"/> <br>

    <input type="submit" class="form-control btnn btn-primary" value="Sumbit"  name="btn_submit" />

</form>

</div>













</body>


</html>