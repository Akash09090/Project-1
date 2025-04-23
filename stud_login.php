<?php
session_start();
include("database.php");
if (isset($_POST['btn_login']))
{
	
	
	
	$result=pg_query($con,"SELECT * FROM std_registration where std_username='".$_POST['std_username']."' AND std_pass='".$_POST['std_pass']."'");
	
	
	if(@pg_num_rows($result)>0)
	
	{
		$_SESSION['user']=$_POST['std_username'];
		header("Location:student/dashboard.php");
	}
	
	else
	{
		echo "Wrong Username or password ";
	}
	
	
}



include("main_header.php");
?>



<div class="row">
<div class="offset-4 col-4 border">
<h2 ALIGN="CENTER">Student Login </h2>

<form action="stud_login.php" method="post" class="form-control">
      
        <label for="id">Enter User Name</label>        
        <input class="form-control" name="std_username" type="text" placeholder="Please Enter UserName" required="" />
         <label for="id">Enter Password</label>    
		<input class="form-control" name="std_pass" type="password" placeholder="Please Enter Password" required="" />
       
<br /> 
    <input type="submit" class="form-control btnn btn-primary" value="Login"  name="btn_login" />

</form>

</div>













</body>


</html>