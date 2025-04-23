<?php

session_start();
include("database.php");
if (isset($_POST['btn_submit']))
{
	
$result=pg_query($con, "SELECT * FROM member_list where mem_user='".$_POST['mem_user']."' AND mem_pass='".$_POST['mem_pass']."'");
	
	
	if(@pg_num_rows($result)>0)
	
	{
		$_SESSION['member']=$_POST['mem_user'];
		header("Location:member/dashboard.php");
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
<h2 ALIGN="CENTER">Member Login </h2>

<form action="mem_login.php" method="post" class="form-control">
      
        <label for="id">Enter User Name</label>        
        <input class="form-control" name="mem_user" type="text" placeholder="Please Enter UserName" required="" />
         <label for="id">Enter Password</label>    
		<input class="form-control" name="mem_pass" type="password" placeholder="Please Enter Password" required="" />
       
<br /> 
    <input type="submit" class="form-control btnn btn-primary" value="Login"  name="btn_submit"/>

</form>

</div>













</body>


</html>