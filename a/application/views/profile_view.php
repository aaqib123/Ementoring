
		<!---------------------------------------------------------the form magic------------------------------------------------------------------- -->

    <!-- Main content -->
    <div class="wrapper">

            <fieldset>
                <div class="widget fluid">
                    <div class="whead"><h5>&nbsp;&nbsp;&nbsp;<?php echo $name;?></h5><div class="clear"></div></div>
						<?php
						
						
						$pic1 = 'uploads/'.$_id.'.jpg';
						if (file_exists($pic1)) {
							$pic1 = 'uploads/'.$_id.'.jpg';
						} else {
							$pic1 =  'uploads/default_profile.jpg';
						}
						
						?>
			
							<div class="formRow">
								
								<div class="grid3"><label><h4><img width=150x height=140px  src="<?php echo base_url($pic1); ?>" /> </h4></label></div>
								<div class="grid9"><?php
								
								
								if($description != NULL)
								{
								echo $description;
								
								}
								else
								{
								echo "No description availabale";
								}
								?></div>
						
								
								<div class="clear"></div>
							</div>
							
						<?php
						
				
						
						if($mycountry[0] != NULL)
						{
						?>
						<div class="formRow">
                            <div class="grid3"><label><h4>Country </h4></label></div>
                            <div class="grid9"><?php echo $mycountry[0];?></div>
							
                            <div class="clear"></div>
                        </div>
						<?php
						}
					
						if($myindustry[0] != NULL)
						{
						?>
						<div class="formRow">
                            <div class="grid3"><label><h4>Indutry </h4></label></div>
                            <div class="grid9">
							<?php 
							foreach( $myindustry as $a)
							{
							echo '<span class="greyBack">'.$a.'</span>&nbsp';
							
							}
							?>
							</div>
										
                         <div class="clear"></div>
                        </div>
						<?php
						}
						if($myinterest[0] != NULL)
						{
						?>	
						<div class="formRow">
                            <div class="grid3"><label><h4>Interest </h4></label></div>
                            <div class="grid9">
							<?php 
							foreach( $myinterest as $a)
							{
								echo '<span class="greyBack">'.$a.'</span>&nbsp';
							}
							?>
							</div>
							
                            <div class="clear"></div>
                        </div>
						<?php
						}
						
						if($skills[0] != NULL)
						{
						?>	
								<div class="formRow">
                            <div class="grid3"><label><h4>Skills </h4></label></div>
                            <div class="grid9">
							<?php 
							foreach( $skills as $a)
							{
								echo '<span class="greyBack">'.$a.'</span>&nbsp';
							}
							?>
							</div>
							
                            <div class="clear"></div>
                        </div>
						<?php
						}
						
						if($add_count != NULL)
						{
						?>	
							<div class="formRow">
                            <div class="grid3"><label><h4> Popularity </h4></label></div>
                            <div class="grid9">
							<?php 

							
							$rating = ($add_count/$views)*100;
							
							if($rating > '100')
							{
							
							
							echo $rating = 100; 
							
							
							}
							
							//echo '<span class="greyBack">'.ceil($rating).'%</span>';
							 $x = ceil($rating/10);
							
							for($i =1;$i<=$x/2;$i++)
							{
							
							?>
							
								<img  src="<?php echo base_url('images/star.png'); ?>" /> 
							
							<?php
							
							}
							
							
							?>
							</div>
							
                            <div class="clear"></div>
							</div>
			
							<?php 
						}
					if(isset($pid))
					{	
						 $my = $this->session->userdata('userid');
						if($pid != $my )
						{
							//echo $pid;echo $sid; 
							 $url = 'index.php/session_control/adder/'.$pid.'/'.$sid;
							echo form_open($url);
							?>
							
							<div class="formRow">
							<input type="submit" name="submit" class="buttonS bLightBlue" value="add me" />
							</div>
								  
							<?php 
							
						}
					echo form_close();
					} 
					?>	  
						  
						  
						  
						  
						  
						  
						  
				</div>
	</div>
						
       
							
						
					</div>
				</fieldset>
			<div class="divider"><span></span></div>
        </form>
    </div>
</div>
<!-- Content ends -->  

