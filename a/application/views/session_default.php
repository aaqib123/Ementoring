<script>

function desc()
{

	var texta='<textarea class="grid9" placeholder="<?php echo $sess['ses_description'];?>" name="textarea" cols="" rows="8"></textarea>	<input type="submit" style="float:right" name="edit" class="buttonS bLightBlue" value="save" />';
	document.getElementById("desc").innerHTML=texta;
}

</script>


    <!-- Main content -->
    <div class="wrapper">

   <ul class="middleNavR">
            <li><a href="<?php echo site_url('index.php/session_control/editor/'.$sess['_id']); ?>" title="editor" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/create.png" alt="" /></a></li>
            <li><a href="<?php echo site_url('index.php/session_control/msg/'.$sess['_id']); ?>" title="Messages" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/dialogs.png" alt="" /></a></li>
            <li><a href="<?php echo site_url('index.php/session_control/upload/'.$sess['_id']); ?>" title="Upload files" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/upload.png" alt="" /></a></li>
            <li><a href="<?php echo site_url('index.php/session_control/search/'.$sess['_id']); ?>" title="Search" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/users.png" alt="" /></a></li>
			<li><a href="<?php echo site_url('index.php/session_control/delete_sess/'.$sess['_id']); ?>" title="delete session" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/delete.png" alt="" /></a></li>
			
			
				
			</li>
			
		</ul>
		
		<fieldset>
            <div class="widget fluid">
                    <div class="whead"><h6>Appointment Description</h6><div class="clear"></div></div>
                    <div class="formRow">
                            <div class="grid3"><label><h6>Appointment name</h6></label></div>
                            <div  class="grid9"><?php echo $sess['appointment_name'];?></div>

							<div class="clear"></div>
                        </div>
	<!------------------------------------------------------------------------------->

						<div class="formRow">
                            <div class="grid3"><label><h6>Description </h6></label></div>
							<?php echo form_open('index.php/session_control/sess_edit/'.$sess['_id']);?>
                            <div  id="desc" class="grid9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sess['ses_description'];?>
								
								<?php

									$user = $this->session->userdata('userid');
									if( $sess['created_by'] == $user )
									{
									?>
									<input type="button" style="float:right" name="edit" class="buttonS bLightBlue" onclick="desc()" value="edit" />
									<?php
									}
								?>
								</form>
							</div>
						<div class="clear"></div>

                        </div>
		
	<!------------------------------------------------------------------------------->

						<div class="formRow">
                            <div class="grid3"><label><h6>specs</h6></label></div>
                            <div class="grid9"><?php 
							
							foreach($spec as $a)
							{
							echo '<span class="greenBack">'.$a.'</span>&nbsp;';
							}
							//echo var_dump($spec);?></div>
                        <div class="clear"></div>
                        </div>
						
		<!------------------------------------------------------------------------------->
						<div class="formRow">
                            <div class="grid3"><label><h6> Mentor</h6></label></div>						
								<div class="grid9">
								<?php 
								
								if(isset($mentor['name']))
								echo $mentor['name'];
								else
								{
									
									if(isset($request['name']) )
									{
								
										echo '<span class="redBack">'.$request['name'].'</span>&nbsp;';
									}
									
										if($request['name'] != "No request sent")
										{
									echo '<span class="redBack">Request sent to </span>&nbsp;';
										echo '<span class="redBack">'
												.$to['name'].
												'</span>';
										
										}
								}

								
								
								if($mentor['_id'] == $createdby['_id']   ) 
								{
								echo v;
								}
									?>
								</div>
							<div class="clear"></div>
						</div>
					
		<!------------------------------------------------------------------------------->
						<div class="formRow">
                            <div class="grid3"><label><h6>Mentee</h6></label></div>
								<div class="grid9">
								<?php 
								
								if(isset($mentee['name']) == TRue)
								{
								echo $mentee['name'];
								}
								else
								{
									
									if(isset($request['name']) )
									{
								
										echo '<span class="redBack">'.$request['name'].'</span>&nbsp;';
									}
									
										if($request['name'] != "No request sent")
										{
										echo '<span class="redBack">Request sent to </span>&nbsp;';
										echo '<span class="redBack">'
												.$to['$name'].
												'</span>';
										}
								}
								
								
								if($mentee['_id'] == $createdby['_id']   ) 
								{
								echo '&nbsp;<span class="greenBack">creator</span>';
								}
								?>
								</div>
							<div class="clear"></div>
						</div>
						
						
			<!------------------------------------------------------------------------------->			
						
						
					<?php
						echo form_open('index.php/session_control/user_ses_adder/'.$sess['_id']);
							$one = $this->session->userdata('userid');
							$two = $sess['created_by'];
							$three = $sess['req_status'];
							if($one != $two && ($three == '0' || $three == '2' ))
							
						{						
					?>		<div class="formRow">
					
							<input type="submit" name="accept" class="buttonS bLightBlue" value="accept" />
							<input type="submit" name="reject" class="buttonS bLightBlue" value="reject" />
							</div>
					<?php
					
					}
					else if($three == '0')
					{
						echo '<div class="formRow">
							<input type="submit" name="cancel" class="buttonS bLightBlue" value="cancel" />
							</div>
							';
					
					}
					
					?>
					</form>
						
							
			</div>
		</fieldset>
		
    </div>
    
</div>
<!-- Content ends -->
        
</body>
</html>