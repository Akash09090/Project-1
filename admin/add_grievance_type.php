<?php
include ("admin_header.php");
include("../database.php");


if(isset($_POST['btn_delete']))
	{
		
		pg_query($con,"DELETE FROM grr_type where g_id='".$_POST['btn_delete']."'");
	}
	
	
if (isset($_POST['btn_add']))

{
		if(isset($_POST['gr_add_typ']))
		{
			pg_query($con,"INSERT INTO grr_type(gr_type) VALUES('".$_POST['gr_add_typ']."')");
		}
}	
	
?>













<div class="col-8 offset-1">
<h2> Grievance Type </h2>

 <h5 style="color:#0482FF;"> 
<?php
if (isset($global['message']))
{
	echo $global['message'];
}
?>
</h5>

 
<form action="add_grievance_type.php" method="post">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Grievance Type </th>
                                        <th>Delete </th>
                                        
                                       
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody>
                               
                               <?php
							   $grtype=pg_query($con,"SELECT * FROM grr_type");
							   $sr_no=0;
							   while($g=@pg_fetch_array($grtype))
							   					   
							   {
								   $sr_no=$sr_no+1;
							   ?>
                              <tr> 
                              			 <td><?php echo $sr_no; ?> </td>
                                        <td><?php echo $g['gr_type']; ?></td>
                                        
                                      	<td><button class="btn btn-danger" type="submit" value="<?php echo $g['g_id']; ?>" name="btn_delete">Delete </button>  </td>
                                        
                                         
                              </tr>
                                    <?php
							   }
							   ?>
                               
                               
                               <tr> 
                              			 <td><?php echo $sr_no+1; ?> </td>
                                        <td><input type="text" class="form-control" name="gr_add_typ" />
                                       </td>
                                        
                                      	<td><button class="btn btn-primary" type="submit" name="btn_add">Add </button>  </td>
                                        
                                         
                              </tr>
                              
                               </tbody>
                                    </table>
                                   
                         </form>                                       
                                 <p> 
                              
              </div>
              </div>
              </html>       