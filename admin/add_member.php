<?php
include ("admin_header.php");
include("../database.php");

if (isset($_POST['btn_submit']))

{
	$check_user=pg_query($con,"SELECT * FROM member_list WHERE mem_user='".$_POST['mem_user']."'");
	
	if(@pg_num_rows($check_user)>0)
	{
		echo "Member allready exits";
	}
	
	else
	{
	
	
			$insertq="INSERT INTO member_list(mem_name, mem_mobile, mem_desg, mem_email, mem_user, mem_pass) VALUES('".$_POST['mem_name']."','".$_POST['mem_mobile']."', '".$_POST['mem_desg']."','".$_POST['mem_email']."','".$_POST['mem_user']."','".$_POST['mem_pass']."')";
		
		if(!pg_query($con,$insertq))
		{
			echo "Query Not Execute Error".@pg_error();
		}
		
		else
		{
		 	header("Location:member_view_old.php");
		}
	}

}


?>













<div class="col-8 offset-1">
<h2> Add Member </h2>
   
                            <form action="add_member.php" method="post" class="form-control">
                            	<label> Name: </label>
                                <input type="text" name="mem_name" required="required" class="form-control" />
                                <label> Mobile No: </label>
                                <input type="tel" name="mem_mobile" required="required" class="form-control" pattern="^[789][0-9]{9}$" />
                                  <label> Designation </label>
                                <input type="text" name="mem_desg" required="required" class="form-control" />
                                
                                <label> Email-ID </label>
                                <input type="email" name="mem_email" required="required" class="form-control" />
                                
                                 <label> User ID </label>
                                <input type="text" name="mem_user" required="required" class="form-control" />
                                
                                 <label> Password</label>
                                <input type="password" name="mem_pass" required="required" class="form-control" />
                                <br />
                                <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary" />
                                
                            </form>
                                                                  
                                 
              </div>
              </div>
              </html> 