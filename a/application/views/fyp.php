<?php $msg=''; ?>
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
				
				</div>
	</div>
</div>

</br>






				<div class="whead"><h6>Sign Up</h6><div class="clear "></div></div>
				<fieldset >
					<div class="widget grid4" style="width:300px;margin-left : auto; margin-right : auto;">	
								<?php echo form_open('index.php/login/forgot');?> 
					
						<div class="formRow">
							
							
							<div class="grid4"><input type="text" name="email" placeholder="enter email" /></div>
							
							<div class="clear"></div>
						</div>
				
						<div  class="formRow">
							
							
							<div  class="grid4">	<input class="buttonM bBlue" type="submit" value="retrieve" name="submit"></div>
						
							<div class="clear"></div>
						</div>
				
					</div>
<?php echo form_close(); ?>

				</fieldset>
            </div>



</body>
</html>