

<?php
include ("stud_header.php");
include("../database.php");






?>



 <div class="col-9"> 
           <div class="row" style="margin-top:10px;"> 
           
                    <div class="col-2 offset-2 border" style="border-radius:500px; padding-top:20px; background:#F9F9F9; height:150px;">
                       <center>  <h4> Success Grievance </h4> 
                       
                       
                       <?php
					   $sc=pg_query($con,"SELECT count(gr_id) as scount FROM post_grievance where std_user='".$_SESSION['user']."' AND status='Success'");
					   $s=@pg_fetch_array($sc)
					   ?>
                        <h3> <a href="success_grievance.php"> <?php echo $s['scount'];?> </a> </h3></center>
                    </div>
                    
                     <div class="col-2 offset-3 border" style="border-radius:500px; padding-top:20px;background:#F9F9F9;  height:150px;">
                       <center>  <h4> Pending Grievance </h4> 
                        
                        
                       <?php
					   $pc=pg_query($con,"SELECT count(gr_id) as pcount FROM post_grievance where std_user='".$_SESSION['user']."' AND status='Pending'");
					   $p=@pg_fetch_array($pc)
					   ?>
                        <h3><a href="pending_grievance.php"> <?php echo $p['pcount'];?> </a> </h3></center>
                    </div>
                    
                   
           </div> 
           <div class="row" style="margin-top:10px;">
           		
<form action="stud_full_grievance.php" method="post"> 

<table class="table offset-1 border table-bordered">
                <tr> 
                	<th> Sr NO </th>
                    <th> Complaint ID </th>
                    <th> Grievance type </th>
                    <th>Grievance Subject </th>
                    <th>Status </th>
                    <th>View </th>
                </tr> 
                
                
                <?php
				 $fetch=pg_query($con,"SELECT * FROM post_grievance where std_user='".$_SESSION['user']."' ORDER BY gr_id DESC");
				 $sr_no=0;
				 while($f1=@pg_fetch_array($fetch))
				 {
					 $sr_no=$sr_no+1;
				
               echo "<tr>";
              	 echo "<td>".$sr_no."</td>";
                 echo "<td>".$f1['gr_id']."</td>";
				 
				 $gtype=pg_query($con,"SELECT * FROM grr_type where g_id='".$f1['gr_type']."'");
				 $gt=@pg_fetch_array($gtype);
				 
                 echo "<td>".$gt['gr_type']."</td>";
                 echo "<td>".$f1['gr_subject']."</td>";
                 echo "<td>".$f1['status']."</td>";
				 ?>
				 <td>
                 <button name="btn_submit" value="<?php echo $f1['gr_id'];?>"> View </button>
                  </td>
                 
                 <?php echo "</tr>";
                    
				 }
					?>
             
                 
                </table>
                </form>
           </div>
           
   		
    </div>
    
 </div>
</div>


</body>


</html>