	<script langauge="javascript">  
     /*       var counter = 0;  
            window.setInterval("refreshDiv()", 1000);  
            function refreshDiv(){     

			
     
			var container = document.getElementById('test');
			var refreshContent = container.innerHTML;
			container.innerHTML = refreshContent; 
			*/
            }  
			
        </script> 


			
		
    <!-- Main content -->
    <div class="wrapper" id=home>
   <ul class="middleNavR">
            <li><a href="<?php echo site_url('index.php/session_control/editor/'.$sess); ?>" title="editor" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/create.png" alt="" /></a></li>
			
            <li><a href="<?php echo site_url('index.php/session_control/msg/'.$sess); ?>" title="Messages" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/dialogs.png" alt="" /></a>
			
			
			 
			
			
			
			</li>
			
			
			
            <li><a href="<?php echo site_url('index.php/session_control/upload/'.$sess); ?>" title="Upload files" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/upload.png" alt="" /></a></li>
            <li><a href="<?php echo site_url('index.php/session_control/search/'.$sess); ?>" title="Search" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/users.png" alt="" /></a></li>
			<li><a href="<?php echo site_url('index.php/session_control/delete_sess/'.$sess); ?>" title="delete session" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/delete.png" alt="" /></a></li>
			
			
		
		</ul>
	   <div class="widget">
	      <div class="enterMessage">
		  
					<?php		echo form_open('index.php/message/validation/'.$sess);					?>
						<input type="text" name="message" placeholder="Enter your message..." />
						<div class="sendBtn">
							<input type="submit" name="sendMessage" class="buttonS bLightBlue" value="Send" />
						</div>
					<?php		echo form_close();				?>
        </div>
            <div class="whead">
                <h6>Messages layout #1</h6>
                <div class="on_off">
                    <span class="icon-reload-CW"></span>
                    <input type="checkbox" id="check1" checked="checked" name="chbox" />
                </div>            
                <div class="clear"></div>
            </div>

            <div id="test"> 
			
			
            <ul class="messagesOne">
 
            
			<?php 
					
					for($var='a',$i=0;$i<$count;$i++,$var++)
					{
					
								$m = ${$var}['message'];
								$desti = ${$var}['from'];
								
								$userid = $this->session->userdata('userid');
						if ($desti!=$userid)
						{
						
							//echo " </br>if not equal</br>";
							echo "<li class='by_user'>";
							$pic1 = 'uploads/'.$desti.'.jpg';
							
							if (file_exists($pic1))
							{
							
							 $pic1 = 'uploads/'.$desti.'.jpg';
							}
							else
							{
							
							 $pic1= "uploads/default_profile.jpg"; 
							}
							?>
							<a ><img width=50px height=40px  src="<?php echo base_url($pic1); ?>" /></a>
							<?php
						}
						else 
						{
							//echo "</br>else</br>";
						   echo "<li class='by_user'>"; //by_me
						   $pic2 = 'uploads/'.$userid.'.jpg';
						   if (file_exists($pic2))
							{
							
							 $pic2 = 'uploads/'.$userid.'.jpg';
							}
							else
							{
							
							 $pic2= "uploads/default_profile.jpg"; 
							}
						  ?>
							<a ><img width=50px height=40px src="<?php echo base_url($pic2); ?>" /></a>
							<?php
						   
						}
							
							//var_dump($desti);
							?>
								
								<div class="messageArea">
									<span class="aro"></span>
									<div class="infoRow">
									<?php echo $m; ?>
								</div>
								<div class="clear"></div>
							</li>
						
								<?php 
					}
					
					?>	
            </ul>
			</div>
        </div>
        
        <!-- Enter message field -->

        
        <div class="divider"><span></span></div>
            
	   
	   
	   
    
	</div>
<!-- Content ends -->
        
</body>
</html>