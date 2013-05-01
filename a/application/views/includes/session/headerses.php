<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mentoring Angels</title>









<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet" type="text/css" />

<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
-->

<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/ui.spinner.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/jquery.mousewheel.js"></script>
 <!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
-->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.min.js"></script>


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
<script type="text/javascript" src="<?php echo base_url();?>js/files/script.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/charts/chart.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/charts/hBar_side.js"></script>

</head>

<body>



<!-- Top line begins -->

			


<div id="top">
    <div class="wrapper">
        <a href="index.html" title="" class="logo"><img height="33px" src="<?php echo site_url('images/logo.png');?>" alt="aaqib" /></a>
        
        <!-- Right top nav -->
			<?php
	if ( $this->session->userdata('login_state') == TRUE )
	{	
		?>
        <div class="topNav">
            <ul class="userNav">
               
                
                <li><a href="<?php echo site_url('index.php/update_profile') ?>" title="" class="settings"></a></li>
				<li><a href="<?php echo site_url('index.php/login/logout') ?>" title="" class="logout"></a></li>
             
            </ul>
          
        </div>
       			
	<?php
	}
	?>

 
      
    </div>
</div>
<!-- Top line ends -->


<!-- Sidebar begins -->
<div id="sidebar">
    <div class="mainNav">
        <div class="user">
            <a title="" class="leftUserDrop">
			<?php
			$image=$this->session->userdata('userid').'.jpg';
			
			$atts = array(				  
				  'Class'     => '',
				  'id'	=>	'formDialog_open'
				);
				if(file_exists('uploads/'.$image))
				$link='<img  width="90px" src='.base_url().'uploads/'.$image.' />';
				else
				$link='<img  width="90px" src='.base_url().'uploads/default_profile.jpg />';
				echo anchor('#',$link,$atts);				
			?>
			
			
			 <!-- Dialog content -->
                        <div  id="formDialog" class="dialog" title="Update Profile Picture" >
                            <form id="form_display_picture" action="">
                            
                                <div style="margin: 0px auto;" align=center>		
								<?php
								
									if(file_exists('uploads/'.$image))
									echo '<img id="preview" width="150px" src='.base_url().'uploads/'.$image.' />';

									else
									echo '<img id="preview" width="150px" src='.base_url().'uploads/default_profile.jpg />';
								
								?>																
								</div>
								<div class="clear"></div>
                                <div class="divider"><span></span></div>
								<div>
								<div align=center><input type="file" name="image_file" id="image_file" onchange="fileSelected();" /></div>
																									   
								<div align=center>	
									<div id="error">You should select valid image files only!</div>
									<div id="error2">An error occurred while uploading the file</div>
									<div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
									<div id="warnsize">Your file is very big. We can't accept it. Please select more small file</div>
								</div>
								

									<div class="formRow" style="padding-top:50px";>
										<div class="grid9">
											<div class="contentProgress mt8"><div class="barB tipS" id="barry" title=""></div></div>
											<div id="progress_percent">&nbsp;</div>
										</div>
										<div class="clear"></div>
									</div>
									
									<span class="floatR">
									<input type="button" id="close" value="Cancel" class="buttonS bLightBlue" onclick="" />
									<input type="submit" name="submit" class="buttonS bLightBlue" value="Update Picture" />
									</span>
								</div>
                            </form>
                        </div>
			
			
			
				
				
			</a><span><?php echo $this->session->userdata('user_name'); ?></span>
			
        </div>
        
   
        
        <!-- Main nav -->
        <ul class="nav">
                        <li><a href="<?php echo site_url('index.php/home'); ?>" title="" class="active"><img src="<?php echo site_url('images/icons/mainnav/dashboard.png'); ?>" alt="" /><span>Dashboard</span></a></li>
			<li><a href="<?php echo site_url('index.php/profile_v') ?>" title=""><img src="<?php echo site_url('images/icons/mainnav/ui.png');?>" alt="" /><span>My profile</span></a></li>
			<!--<li><a href="<?php echo base_url('index.php/home/todo');?>" title="TO-DO" class="lightbox"><img src="<?php echo site_url('images/icons/middlenav/create.png') ?>" alt="" /><span>To-do</span></a></li>-->
            <li><a href="<?php echo site_url('index.php/login/logout') ?>" title=""><img src="<?php echo site_url('images/icons/mainnav/logout.png');?>" alt="" /><span>Logout</span></a></li>

        </ul>
    </div>
    
    <!-- Secondary nav -->
	

</div>
<!-- Sidebar ends -->
    
    </body>
	</html>