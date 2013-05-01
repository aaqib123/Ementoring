
<!-- Content begins -->
	<div id="content">
		<div class="contentTop">
			<span class="pageTitle"><span class="icon-screen"></span>Dashboard</span>
			<ul class="quickStats">
			<?php 
				if( $main_content == 'home')
			{
			?>
				<li>
					<a href="" class="blueImg"><img src="<?php echo site_url('images/icons/quickstats/plus.png');?>" alt="" /></a>
					<div class="floatR"><strong class="blue"><?php echo $all['views'];?></strong><span>visits</span></div>
				</li>
			<?php
			}
			
			?>
			   
			</ul>
			<div class="clear"></div>
		</div>
		
		<!-- Breadcrumbs line -->
		<div class="breadLine">
			<div class="bc">
				<ul id="breadcrumbs" class="breadcrumbs">
					<li><a href="#">Dashboard</a></li>

				</ul>
			</div>
			
	
		</div>