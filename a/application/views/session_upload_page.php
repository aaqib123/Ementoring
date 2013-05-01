
    
    <!-- Main content -->
    <div class="wrapper">
   <ul class="middleNavR">
            <li><a href="<?php echo site_url('index.php/session_control/editor/'.$sess); ?>" title="editor" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/create.png" alt="" /></a></li>
            <li><a href="<?php echo site_url('index.php/session_control/msg/'.$sess); ?>" title="Messages" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/dialogs.png" alt="" /></a> </li>
            <li><a href="<?php echo site_url('index.php/session_control/upload/'.$sess); ?>" title="Upload files" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/upload.png" alt="" /></a></li>
            <li><a href="<?php echo site_url('index.php/session_control/search/'.$sess); ?>" title="Search" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/users.png" alt="" /></a></li>
			<li><a href="<?php echo site_url('index.php/session_control/delete_sess/'.$sess); ?>" title="delete session" class="tipN"><img src="<?php echo base_url(); ?>images/icons/middlenav/delete.png" alt="" /></a></li>
			
			
		
		</ul>
        <div class="widget">    
            <div class="whead"><h6>File uploader</h6><div class="clear"></div></div>
            
				<?php
				
					if($error['error'] != NULL && $error['error'] != 'asdf' )
					{	
							echo '<div class="nNote nFailure">';
							echo '<center>'.$error['error'].'</center>'; 
							echo '</div>';
					}
					if($error['error'] != null && $error['error'] == 'asdf' )
					{	
							echo '<div class="nNote nSuccess">';
							 echo '<center>Your file was successfully uploaded!</center>'; 
							echo '</div>';
					
					}
					

				 ?>

				<?php echo form_open_multipart('index.php/session_control/upload_do/'.$sess);?>
				</br>
					<center>
						<div>
						<input style="float:right;" type="file" name="userfile" size="20" />
						<input class="buttonS bBlack  mb10" type="submit" value="upload" />
						<p>allowed : doc,docx,txt,jpg,gif,png</p>

						</div>
					</center>
				</br>
				</br>
				
				</form>
			 <div class="whead"><h6>Download</h6><div class="clear"></div></div>

                 	  <ul class="filesDown">                    
							<?php
							
							
							$idx = NULL;
							foreach ($map as $dir => $file) 
								{			
										$idx .= "<p> {$dir} : {$file} </p>";
										$f = $sess.'/'.$file;
										$path = '/'.$sess.'/'.$file;
										
										?>
											<li>
											<span class="fileSuccess"></span>
											<a href="<?php echo base_url('index.php/session_control/file_download'.$path);?>"> <?php echo $file ?></a></br>
											<a class="remove" href="<?php echo base_url('index.php/session_control/file_delete'.$path);?>"></a></li>
										<?php
										
								}
									

									
							?>
						</ul>

        </div>
    

   
    </div>
</div>
<!-- Content ends -->    
        
</body>
</html>