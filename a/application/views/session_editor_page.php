<script type="text/javascript" src="<?php echo base_url(); ?>js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">

	// O2k7 skin (silver)
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "elm3",
		theme : "advanced",
		skin : "o2k7",
		skin_variant : "silver",
		plugins : "lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "<?php echo base_url(); ?>lists/template_list.js",
		external_link_list_url : "<?php echo base_url(); ?>lists/link_list.js",
		external_image_list_url : "<?php echo base_url(); ?>lists/image_list.js",
		media_external_list_url : "<?php echo base_url(); ?>lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});

	
</script>

<?php 
//secho "asdf";var_dump($content);
?>

	
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
					
				<?php echo form_open('index.php/session_control/editorsave/'.$sess);?> 

						<textarea id="elm3" name="elm3" rows="15" cols="80" style="width: 100%" >
							<?php
							echo $content; 
							?>
						</textarea>
						
				</form>	
					
		
		
		</div>
			

    </div>
    
</div>
<!-- Content ends -->
        
</body>
</html>