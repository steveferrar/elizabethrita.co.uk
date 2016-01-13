<?php
/**
	The template for displaying the FOOTER after the close of <div id="page-wrapper">
*/
?>

		<div class="clearfix"></div>
		
		<footer id="footer" class="">
			
			<div class="container">
			
				<div class="row">
				
					<div class="hidden-xs hidden-sm col-md-12 col-lg-12">
				
						<nav id="footer-navigation">
							<ul>
								<li><a href="<?php echo get_permalink(18); ?>" title="About">About</a></li>
								<li><a href="<?php echo get_permalink(20); ?>" title="Showreel">Showreel</a></li>
								<li><a href="https://elizabethritamua.wordpress.com/" title="Blog" target="_blank">Blog</a></li>
								<li><a href="<?php echo get_permalink(22); ?>" title="Contact">Contact</a></li>
							</ul>
						</nav>
					
					</div>
					
					<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
						<?php
						if(!(is_front_page())):
							if(get_field('page_title')):
								echo '<h1 class="page-title">&ldquo;' . get_field('page_title') . '&rdquo;</h1>';
							else:
								echo '<h1 class="page-title">&ldquo;' . get_the_title() . '&rdquo;</h1>';
							endif;
						else:
							echo '<h1 class="page-title hidden-xs hidden-sm">&nbsp;</h1><br />';
						endif;
						?>
					</div>
				
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 footer-contact">
						<p>t: 07882951685</p>
						<p>e: <a href="mailto:elizabethrita87@gmail.com" title="Email Me">elizabethrita87@gmail.com</a></p>
					</div>
				
					<div class="hidden-xs hidden-sm col-md-6 col-lg-6 footer-logo">
						<img src="<?php bloginfo('template_url'); ?>/img/elizabeth-rita.png" alt="Elizabeth Rita | Freelance Hair &amp; Make Up Artist" />
					</div>
				
				</div>
			
			</div>
				
		</footer>
		
	<?php // header.php: <div id="page-wrapper"> ?>
	</div>
	
	<div class="copyright"><span>Copyright </span>&copy; <?php echo date('Y') ?> Elizabeth Rita</div>
	<div class="credit"><span>Website created by </span><a href="http://www.steveferrar.com" title="Steve Ferrar" target="_blank">Steve Ferrar</a></div>
	
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

	<?php wp_footer(); ?>

	<!-- Google Analytics
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>
	-->
	
</body>
</html>