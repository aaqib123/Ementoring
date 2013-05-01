<?php error_reporting(0);?>

    
    <!-- Main content -->
    <div class="wrapper">
   <ul class="middleNavR">
            <li><a href="<?php echo site_url('index.php/session_control/editor/'.$sess); ?>" title="editor" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/create.png" alt="" /></a></li>
            <li><a href="<?php echo site_url('index.php/session_control/msg/'.$sess); ?>" title="Messages" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/dialogs.png" alt="" /></a> </li>
            <li><a href="<?php echo site_url('index.php/session_control/upload/'.$sess); ?>" title="Upload files" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/upload.png" alt="" /></a></li>
            <li><a href="<?php echo site_url('index.php/session_control/search/'.$sess); ?>" title="Search" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/users.png" alt="" /></a></li>
			<li><a href="<?php echo site_url('index.php/session_control/delete_sess/'.$sess); ?>" title="delete session" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/delete.png" alt="" /></a></li>
			
			
		</ul>
      
    
		<?php		   
	
		 $url = "/index.php/session_control/run_search/".$sessid;
		echo form_open($url,'id="validate" class="main"');
		?>
            <fieldset>

                <div class="widget fluid">
                    
                    <div class="formRow">
						<div class="grid3"><label>Search:<span class="req">*</span></label></div>
						<div class="grid6"><input class="" id="req" type="text" name="search"  value="" /></div>
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <input type="submit" name="submit" class="buttonS bLightBlue" value="search" />
						<div class="clear"></div>
					</div>
					
				</form>			


				</div>
					
			</fieldset>
			<div class="divider"><span></span></div>
			
       
 <div class="widget">
						                    <div class="whead"><h5>&nbsp;&nbsp;&nbsp;Recommendations</h5><div class="clear"></div></div>
	  
                    <ul class="userList">
					
					
					<?php 
					
			
					for($var='a',$i=0;$i<$count;$i++,$var++)
					{
					if (${$var}['_id'] != $this->session->userdata('userid')) 
						{
						
						if(${$var}['name'])
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
					}
					
						?>	
					
					
					
                    </ul>
					
                </div>
	



















	   
    </div>

</div>
<!-- Content ends -->

</body>
</html>

