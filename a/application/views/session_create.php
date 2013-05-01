</div>
<!-- Sidebar ends -->
    
<!-- Content begins -->
<div id="content">
    
    <!-- Main content -->
    <div class="wrapper">
        
    
    <!-- Main content -->
    
      
    
		<?php		   
		echo form_open_multipart('index.php/session_control/createsession1','id="validate" class="main"');
		?>
            <fieldset>
                <div class="widget fluid">                    

                    <div class="formRow">
                            <div class="grid3"><label>Project Name<span class="req">*</span>:</label></div>
							<div class="grid6"><input class="validate[required]" id="appointment_name" type="text" name="appointment_name"  value="" /></div>
							<div class="clear"></div>
                        </div>
						
						<div class="formRow">
                            <div class="grid3"><label>Description<span class="req">*</span>:</label></div>
                            <div class="grid6"><input class="validate[required]" type="text" id="a_desc" name="a_desc"  value="" /></div>
							
                            <div class="clear"></div>
                        </div>
						
						<div class="formRow">
							<div class="grid3"><label>Specifications:</label></div>						
							<div class="grid9"><input type="text" id="tags" name="specs" class="tags" value="" /></div>
							<div class="clear"></div>
						</div>
						
                    
						<div class="formRow">
							<div class="grid3"><label>Need a <span class="req">*</span>:</label></div>
							<div class="grid9">
								<div>
									<input type="radio" name="who" value="Mentor"> Mentor
								</div>
								<div>
									<input type="radio" name="who" value="Mentee"> Mentee
								</div>
							</div>
							<div class="clear"></div>
							
						</div>
                            <div class="clear"></div>
                    </div>
					
					<div class="formRow">
                    <input type="submit" name="submit" class="buttonS bLightBlue" value="Update Profile" />
					</div>
					
					</div>
					
				</fieldset>
			<div class="divider"><span></span></div>
			
        </form>
    </div>

</div>
<!-- Content ends -->

</body>
</html>

