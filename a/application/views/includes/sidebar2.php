	<script langauge="javascript">  
            var counter = 0;  
            window.setInterval("refreshDiv()", 1000);  
            function refreshDiv(){     

			var container = document.getElementById('asdf');
			var refreshContent = container.innerHTML;
			container.innerHTML = refreshContent; 
			document.getElementById("asd").innerHTML=Date();
            }  
			
        </script> 

  <div class="secNav">
        <div class="secWrapper">
            <div class="secTop" id=asdf>
                <div class="balance">
				
				<?php $this->load->helper('date');
				$datestring = "Year: %Y Month: %m Day: %d ";
				
				
				
                    ?>
					
					<div  class="balInfo">
					
					<span id=asd>
					<?php// echo mdate($datestring);echo date('H:i:s'); ?>
					
					
					</span></div>
                  
                </div>
                <a href="#" class="triangle-red"></a>
            </div>
            
          
            <div id="tab-container" class="tab-container">
                <ul class="iconsLine ic2 etabs">
                    <li><a href="#general" title=""><span >Requests</span></a></li>
                    <li><a href="#alt1" title=""><span >To-Do</span></a></li>
					
                </ul>
		
                
                <div class="divider"><span></span></div>
                
                <div id="general">
                <div class="widget">
			

                    <div class="whead"><h6>Notifications</h6><div class="clear"></div></div>
                    <ul class="updates">
                      
 <?php
					   
					
						if($notif != NULL)
						{						
							for($i=0;$i<$n_count;$i++)
							{
							
								
								$image=$sescname[$i];
								$image=$image.".jpg";					
								if(file_exists('uploads/'.$image))
								$link='<img  width="40px" src='.base_url().'uploads/'.$image.' />';
								else
								$link='<img  width="40px" src='.base_url().'uploads/default_profile.jpg />';
							
							
							
							
?>
							   <li>
									<div class="wNews">
										<div class="announce">
											<span><?php	echo $notif[$i]; ?></span>
										</div>
									</div>
									<span class="uDate"><?php	echo $link; ?></span>
									<span class="clear"></span>
								</li>
<?php
							}
						}
						else
						{
						$no_notif = 'No new notifications';
						
?>
						<!--	<script>$.jGrowl('Hello world!');</script>
							<script>$.jGrowl('Whats up!');</script> -->
							<li>
								<div class="wNews">
									<div class="announce">
										<span><?php	echo $no_notif; ?></span>
									</div>
								</div>
								
								<span class="clear"></span>
							</li>
						
<?php
						}
						
						
?>
                    </ul>
                </div>
				<?php 
				
				
				if($forfirstuser == NULL)
				{
				//var_dump( $forfirstuser);
				echo "<script>$.jGrowl('Hello !')</script>";
				echo "<script>$.jGrowl('Please update your profile.')</script>";
				//echo '</br><div class="nNote nInformation"><p>Update Profile</p></div>';
				//$forfirstuser=1;
				}
				
				
				?>		
                        <div class="divider"><span></span></div>
                </div>
               <!-- ////////////////////////////////////////////////////////////////-->
                <div id="alt1">
				
				<div id="general">
                <div class="widget">
					<div class="whead"><h6>To - Do</h6><div class="clear"></div></div>

					
					<?php
                    		
					
					$a=0;
					while( $a <= $todos['count'] )
					{
					$t = "todo".$a;	
						if (isset($todos[$t]))
						{		

			
						
						$list[$a] = $todos[$t];
						
						
							?>
								<div id="allusers">
									<ul class="userList">
										<li>
											<a href="<?php echo base_url("index.php/home/todocancel/todo".$a); ?>" title="">
												<img src="images/live/face1.png" alt="" />
													<span class="contactName">
													
														<strong><?php  ?></strong>
														<i><p>
															<?php 
														//	echo $a." ] ";
															echo $list[$a]; 
															?> 
															</p>
														</i>
														
													</span>
												<span class="status_off"></span>									
												<span class="clear"></span>
											</a>
										</li>
									</ul>
								</div>
								
						   <?php
						}
						$a++;
						
					}
					?>
					</div>
                          <div class="divider"><span></span></div>
                </div>
                </div>

				
            </div>
            
          
           
            
       </div> 
       <div class="clear"></div>
   </div>
   
   
</div>