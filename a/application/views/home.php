
    <!-- Main content -->
    <div class="wrapper">
        <ul class="middleNavR">

			<li><a href="<?php echo base_url('index.php/home/todo');?>" title="TO-DO" class="lightbox"><img src="<?php echo site_url('images/icons/middlenav/create.png') ?>" alt="" /></a></li>

			<li><a href="<?php echo base_url('index.php/session_control/createsession');?>" title="Create Project" ><img src="<?php echo site_url('images/icons/middlenav/add.png') ?>" alt="" /></a></li>

		</ul>
    

        <div class="widget check" style="overflow-y:scroll;max-height:400px;min-width:500px;">
            <div class="whead"><span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span><h6>Appointments</h6><div class="clear"></div></div>
            
			<table  cellpadding="0" cellspacing="0" width="100%" class="tDefault checkAll tMedia" id="checkAll">
                <thead>
                    <tr>
                        <td>S.No</td>
                        <td width="50">Image</td>
                        <td  width="" class="sortCol"><div>Appointment Name<span></span></div></td>
                        <!--<td>progress</td>-->
						<td>Role</td>
						<td width="130" class="sortCol"><div>Date<span></span></div></td>
						
                       

                    </tr>
                </thead>
              
                <tbody >
				
			
				<?php 
				if($a['appointment_name'])
			{
					for($var='a',$i=0;$i<$count;$i++,$var++)
					{
								
						 $image=${$var}['created_by'].'.jpg';
						
					
							if(file_exists('uploads/'.$image))
							 $link='<img  width="60px" src='.base_url().'uploads/'.$image.' />';
							
							else
								$link='<img  width="60px" src='.base_url().'uploads/default_profile.jpg />';
							
						
					 $x = ${$var}['_id'];
					?>

                    <tr>
                        <td><?php echo $i+1; ?></td>
                      
					  <td><a href="<?php echo base_url('index.php/home');?>" title="" ><?php 	echo $link;	?> </a></td>
                      
					  <td class="textL"><a href="<?php  echo base_url('index.php/session_control/sess/'.$x);?>" title=""><?php echo ${$var}['appointment_name']; ?></a></td>
					
<!--					<td>   
					
						
						<?php //$p='80'; ?>
						
							<progress  
							
										style=" background-color: #f3f3f3;  
												border: 0;  
												height: 18px;  
												border-radius: 9px;  " 
												
							value="<?php echo $p; ?>" max="100">
							
							</progress> 
						
					
					
					</td>
-->					   
					   
					   <td>		
					
					   <?php 
					  

									$me = $this->session->userdata('userid');	
									$me = new mongoID($me);
									$me1 = ${$var}['created_by'];
									if($me == $me1  ) 
									{
									echo '<span class="greenBack">Creator</span>';
									}
									else
										{
									echo '<span class="greenBack">Joined</span>';
									}
							?>
						</td>
					   <td><?php echo ${$var}['create_date']; ?></td>
                      
                    </tr> 
                   
					<?php 
					} 
					
			}		
			else
			{
			
					?>	
					
                </tbody>
			
				 <tfoot>
                    <tr>
                        <td colspan="6">
                      <?php
						
						echo '<div class="nNote nWarning">
						<p>Looks like u dont have any projects yet, Click on the  +  button to get started.</p>
						</div>';
					
					}
					?>
                       
                        </td>
                    </tr>
                </tfoot>
            </table>
			
        </div>
        
    </div>
  <img src="<?php echo site_url('images/mentor.png');?>" height=100px width=100px style="float:right;" alt="" />
 <?php
	/*
	 if($forfirstuser )
{
?>
	 <ul class="middleNavA">
					 <li>
						<a title="Add an article" onclick="$.jGrowl('Hello world!');"><img alt="" src="<?php echo base_url('images/icons/color/order-149.png');?>"></img>
						<span>      New User?    </span>
						</a> 
					</li>
				</ul>      
  
<?php

}
*/
  ?>  
    </div>
    <!-- Main content ends -->
	
</div>
<!-- Content ends -->


