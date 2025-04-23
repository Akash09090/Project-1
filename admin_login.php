<?php
session_start();
include("database.php");
if (isset($_POST['btn_submit']))
{
	
$result=pg_query($con, "SELECT * FROM admin_login where admin_name='".$_POST['admin_name']."' AND admin_pass='".$_POST['admin_pass']."'");
	
	
	if(@pg_num_rows($result)>0)
	
	{
		$_SESSION['admin']=$_POST['admin_name'];
		header("Location:admin/dashboard.php");
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
<h2 ALIGN="CENTER">Admin Login </h2>

<form action="admin_login.php" method="post" class="form-control">
      
        <label for="id">Enter User Name</label>        
        <input class="form-control" name="admin_name" type="text" placeholder="Please Enter UserName" required/>
         <label for="id">Enter Password</label>    
		<input class="form-control" name="admin_pass" type="password" placeholder="Please Enter Password" required/>
       
<br /> 
    <input type="submit" class="form-control btnn btn-primary" value="Login"  name="btn_submit" />

</form>

</div>













</body>


</html>