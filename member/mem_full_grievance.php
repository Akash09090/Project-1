<?php
include ("mem_header.php");
include("../database.php");

if(isset($_POST['btn_submitr']))
{
	pg_query($con, "update post_grievance set gr_mem_details='".$_POST['mem_res']."', status='Success' where gr_id='".$_POST['gr_id_new']."'");
	
	header("Location:dashboard.php");
	echo "member response successfully";
}
?>
<div class="col-9">
<h2> View Grievance </h2>

<?php


 $fetch=pg_query($con, "SELECT * FROM post_grievance where gr_id='".$_POST['btn_submit']."'");

 $f=@pg_fetch_array($fetch);
 
?>
<form action="mem_full_grievance.php" method="post">
<table class="table offset-1 border table-bordered">
               
               <tr>
               <div style="display:none;">
               <input type="text" value="<?php echo $_POST['btn_submit'] ?>" name="gr_id_new" />
               </div>
                   <td width="20%">Complaint ID </td>
                   <td> <?php echo $f['gr_id']; ?> </td>
               </tr>
               <tr>
                   <td>Grievance type </td>
                   <?php
                   $gtype=pg_query($con, "SELECT * FROM grr_type where g_id='".$f['gr_type']."'");
				 $gt=@pg_fetch_array($gtype);
				 ?>
                   <td> <?php echo $gt['gr_type']; ?></td>
               </tr>
               <tr>
                   <td> Grievance Subject</td>
                   <td><?php echo $f['gr_subject']; ?> </td>
               </tr>
               <tr>
                   <td>Status </td>
                   <td> <?php echo $f['status']; ?></td>
               </tr>
               <tr>
                   <td>Details </td>
                   <td><?php echo $f['gr_details']; ?> </td>
               </tr>
                <tr>
                   <td>Member Response </td>
                   <td><?php echo $f['gr_mem_details']; ?> </td>
               </tr>
                <tr>
                   <td>Post Member Response </td>
                   <td>
                   <textarea class="form-control" name="mem_res">
                   </textarea><br /> 
                   <input type="submit" class="btn btn-primary" value="Submit" name="btn_submitr" /> 
                   
                     </td>
               </tr>
               </table>
   </form>            
               
               
               
             
   </div>
   </div>                                 
                                            
</body>
</html>