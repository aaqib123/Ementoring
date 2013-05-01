<?php
 $msg='';
 $exists;
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mentoring Angels</title>

<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/ui.spinner.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.mousewheel.js"></script>
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/tables/jquery.sortable.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/tables/jquery.resizable.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.uniform.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.autotab.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.chosen.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.ibutton.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.validationEngine.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/wizards/jquery.form.wizard.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/wizards/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/wizards/jquery.form.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.fileTree.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/others/jquery.fullcalendar.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/others/jquery.elfinder.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/ui/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/files/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/files/functions.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/charts/chart.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/charts/hBar_side.js"></script>

</head>
<body>
<div id="top">
	<div class="wrapper">
		<a class="logo" title="" href="#">
		<img  height="33px"  alt="" src="<?php echo site_url('images/logo.png');?>" > 
		</a>
				<div class="topNav">
						<ul class="userNav">
						<?php		
							echo form_open('index.php/login/login_validation');
						?>
							<li>
								<input type="text" name="email" placeholder="email" />
									
							</li>
							<li>
								<input type="password" name="password" placeholder="password" />
											
							</li>
							<li>
							<input class="buttonM bBlue" type="submit"  value="Login" name="submit" >
							</li>
							<?php
							if(form_error('email'))
							{
							echo '<div class="nNote nFailure">';
							echo form_error('email'); 
							echo '</div>';
							}
							if(form_error('password'))
							{
							echo '<div class="nNote nFailure">';
							echo form_error('password'); 
							echo '</div>';
							}
							
							?>
						<?php
						echo form_close();
						
						if( form_error('name') )
						echo '<div class="nNote nFailure">'.form_error('name').'</div>';
						if( form_error('emailr') )
						echo '<div class="nNote nFailure">'.form_error('emailr').'</div>';
						if( form_error('passwordr') )
						echo '<div class="nNote nFailure">'.form_error('passwordr').'</div>';	
						if( form_error('password2r'))
						echo '<div class="nNote nFailure">'.form_error('password2r').'</div>';	
						
						echo $exists;
						//echo $registered;
						
					
						
						?>
						</ul>
				</div>
	</div>
</div>

</br>






				<div class="whead"><h6>Sign Up</h6><div class="clear "></div></div>
				<fieldset >
					<div class="widget grid4" style="width:300px;margin-left : auto; margin-right : auto;">	
							<?php echo form_open('index.php/login/register'); ?>	
					
						<div class="formRow">
							<div class="grid4"><label>Name :</label></div>
							
							<div class="grid4"><input type="text" name="name" placeholder="name" /></div>
							
							<div class="clear"></div>
						</div>
						<div class="formRow">
							<div class="grid4"><label>E mail :</label></div>
							
							<div class="grid4"><input type="text" name="emailr" placeholder="asdf@asdf.com" /></div>
							
							<div class="clear"></div>
						</div>
						<div class="formRow">
							<div class="grid4"><label>Password</label></div>
							<div class="grid4"><input type="password" name="passwordr" /></div>
							
							<div class="clear"></div>
						</div>
						
						<div class="formRow">
							<div class="grid4"><label>Confirm password :</label></div>
							<div class="grid4"><input type="password" name="password2r" /></div>
							
							<div class="clear"></div>
						</div>
						
						<div class="formRow">
							<div class="logControl">
								<div class="memory">
									<div id="uniform-remember2" class="checker">
										<?php	echo $msg; ?>
									</div>
								</div>
								
								<input class="buttonM bBlue" type="submit" value="sign up" name="signup" style="margin-top: -23px;">
							
							</div>
							<!--</br>
							<li>
								<span class="note"><a href="<?php echo base_url('index.php/login/forgot')?>" > forgot password?</a></span>
							

							</li>
							<li>
								<span class="note"><a href="<?php echo base_url('ementorchangelog.html')?>" > Changelog</a></span>
							</li>-->
						<?php echo form_close(); ?>
						</div>
					</div>


				</fieldset>
       
  
				<fieldset >
					<div class="widget grid4" style="margin-left : auto; margin-right : auto;">	
						<div class="formRow"  style="margin-left : auto; margin-right : auto;" >
						 <?php        		
						 $this->load->model('Model_Users','',TRUE);

					
						$users = $this->Model_Users->all();
						$i=0; 
						$a='a';
						foreach($users as $user)
						{
							//var_dump( $user);
							$a = $user;
							$a++;
							$i++;
							
		
								
						  $image=$a['_id'].'.jpg';

							if(file_exists('uploads/'.$image))
							{
							echo "&nbsp;&nbsp;&nbsp;";
							echo $link='<img style="z-index: -1;" height="60px" width="60px" src='.base_url().'uploads/'.$image.' />';
							echo '<a style="position:relative;left:-50px;top:10px;font-size: 12px;">'.$a['name'].'</a>';
							}
							else
							{
							echo "&nbsp;&nbsp;&nbsp;";
							 echo $link='<img style="z-index: -1;" height="60px" width="60px" src='.base_url().'uploads/default_profile.jpg />';
							echo '<a style="position:relative;left:-50px;top:10px;font-size: 12px;">'.$a['name'].'</a>';
							}
						
						}
						?>
						</div>
						
						</div>
				</fieldset>

</body>
</html>