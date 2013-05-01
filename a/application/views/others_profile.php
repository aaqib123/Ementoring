
    <!-- Main content -->
    <div class="wrapper">

	
	
	              <div class="widget">
				  
                    <ul class="userList">
					
					
					<?php 
					
			
					for($var='b',$i=0;$i<$count;$i++,$var++)
					{
					if (${$var}['_id'] != $this->session->userdata('userid')) 
						{
						
						
					?>
					
				
                        <li>

							
							
							<a href="<?php  echo base_url("index.php/session_control/viewprofiles/".${$var}['_id']."/".$sesid);?>">
							<?php

							 $pic= "uploads/".${$var}['_id'].".jpg"; 
							if (file_exists($pic))
							{
							
							 $pic= "uploads/".${$var}['_id'].".jpg"; 
							}
							else
							{
							
							 $pic= "uploads/default_profile.jpg"; 
							}
							
							?>
                                <img  width=50px height=50px src="<?php echo base_url($pic);?>" alt="" />
                                <span class="contactName">
										<strong>
										
										
										<?php 

										echo ${$var}['name']; 
										
										
										?> 
										
										
										<span></span>
										</strong>
                                    <i>
									<?php 
									
									
									
									$string = ${$var}['description'];

									echo $string = character_limiter($string, 20);
									
									
									
									?> </i>
                                </span>
                                <span class="status_away"></span>
                                <span class="clear"></span>
                            </a>
                        </li>
						<?php 
						} 
					}
					
						?>	
					
					
					
                    </ul>
					
                </div>
	
	
	
	
	
	
				
				
				
				
				
				
    </div>
    
</div>
<!-- Content ends -->
        
</body>
</html>