<?php
/*
The template for displaying the HOME page.
*/
get_header(); ?>
	
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
				
			<section class="page">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<?php
							if(get_field('images')):
							?>
			
								<div class="flexslider">
									<ul class="slides">
									
										<?php
										while(has_sub_field('images')):
										if(get_sub_field('image')):
										$image = wp_get_attachment_image_src( get_sub_field('image') , '' );
										if(get_sub_field('name')): $name = get_sub_field('name'); else: $name = 'Elizabeth Rita | Freelance Hair &amp; Make Up Artist'; endif;
										?>
										
											<li><img src="<?php echo $image[0]; ?>" alt="<?php echo $name; ?>" class="flexImages" /></li>
											
										<?php
										endif;
										endwhile
										?>
										
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
			
							
			<?php
			// Page 
			// get_template_part('part', 'page'); 
			?>
	
			
		<?php endwhile; // end of the loop. ?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>