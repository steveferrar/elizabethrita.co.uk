<?php
/*
The template part for displaying the GALLERY pages.
*/
?>
				
<section class="page gallery">

	<div class="container">
	
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<?php
				if(get_field('images')):
				?>

					<div class="sly-frame">
						<ul class="slidee">
							<?php
							while(has_sub_field('images')):
							if(get_sub_field('image')):
							$image = wp_get_attachment_image_src( get_sub_field('image') , '' );
							if(get_sub_field('name')): $name = get_sub_field('name'); else: $name = get_the_title(); endif;
							?>
							
								<li><img src="<?php echo $image[0]; ?>" alt="<?php echo $name; ?>" /></li>
								
							<?php
							endif;
							endwhile
							?>
						</ul>
					</div>
					
					<div class="sly-scrollbar">
						<div class="handle"></div>
					</div>
				
				<?php
				endif;
				?>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="clearfix"></div>
	
</section>