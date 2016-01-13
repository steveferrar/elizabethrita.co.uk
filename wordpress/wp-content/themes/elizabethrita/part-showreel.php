<?php
/*
The template part for displaying the SHOWREEL page.
*/
?>
				
<section class="page showreel">

	<div class="container">
	
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
				<?php
				if(get_field('vimeo_ID')):
				?>

					<div class="flexslider-video">
						<ul class="slides">
							
							<li><iframe id="player_1" src="http://player.vimeo.com/video/<?php echo get_field('vimeo_ID'); ?>?api=1&player_id=player_1" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
							
						</ul>
					</div>
				
				<?php
				endif;
				?>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="clearfix"></div>
	
</section>