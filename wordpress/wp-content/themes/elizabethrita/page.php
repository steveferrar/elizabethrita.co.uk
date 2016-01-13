<?php
/*
	The template for displaying all GENERIC and most SPECIFIC pages.
*/
get_header(); ?>

	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php 
			// Gallery Pages
			if(is_page(6) || is_page(8) || is_page(10) || is_page(12) || is_page(14) || is_page(16)):
				get_template_part('part', 'gallery'); 
			?>
		
			<?php 
			// Showreel Page
			elseif(is_page(20)): 
				get_template_part('part', 'showreel');
			?>
		
			<?php 
			// Showreel Page
			elseif(is_page(20)): 
				get_template_part('part', 'showreel');
			?>
			
			<?php 
			// All Other Pages
			else:
			?>
				
				<section class="page">
				
					<div class="container">
					
						<div class="row">
						
							<div class="page-text-wrapper">
								<?php 
								if(get_field('content_image')):
								$image = wp_get_attachment_image_src( get_field('content_image') , '' );
								?>
									<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 page-text">
										<?php the_content(); ?>
									</div>
									<div class="hidden-xs col-sm-4 col-md-4 col-lg-4 page-image">
										<img src="<?php echo $image[0]; ?>" alt="<?php echo get_field('page_title'); ?>" />
									</div>
								<?php else: ?>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 page-text">
										<?php the_content(); ?>
									</div>
								<?php endif; ?>
								
								<div class="clearfix"></div>
								
							</div>
							
						</div>
						
					</div>
					
					<div class="clearfix"></div>
					
				</section>
		
			<?php
			endif;
			?>
			
		<?php endwhile; // end of the loop. ?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>