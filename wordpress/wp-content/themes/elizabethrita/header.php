<?php
/**
	The template for displaying the HEADER until <div id="page-wrapper">
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->

<head>
	
	<title>
		<?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'blanktheme' ), max( $paged, $page ) );
		?>
	</title>
	
	<?php // Meta SEO handled by plugin ?>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144-precomposed.png" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3.js"></script>

	<?php wp_head(); ?>
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<style type="text/css">
				.gradient {
					filter: none;
				}
			</style>
	<![endif]-->
	
</head>

<body <?php body_class(); ?>>

	<!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]--> 

	<nav id="mobile-navigation">
		<ul>
			<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
			<li><a href="<?php echo get_permalink(6); ?>" title="Beauty">Beauty</a></li>
			<li><a href="<?php echo get_permalink(8); ?>" title="Fashion">Fashion</a></li>
			<li><a href="<?php echo get_permalink(10); ?>" title="Male Grooming">Male Grooming</a></li>
			<li><a href="<?php echo get_permalink(12); ?>" title="Children">Children</a></li>
			<li><a href="<?php echo get_permalink(14); ?>" title="Nails">Nails</a></li>
			<li><a href="<?php echo get_permalink(16); ?>" title="Celebrities">Celebrities</a></li>
			<li><a href="<?php echo get_permalink(25); ?>" title="Weddings">Weddings</a></li>
		</ul>
	</nav>
					
	<div id="page-wrapper"><?php // footer.php: </div> ?>
	
		<header id="header" class="">
			
			<div class="container">
			
				<div class="row">
					
					<div class="col-xs-9 col-sm-9 hidden-md hidden-lg header-logo text-left">
						<img src="<?php bloginfo('template_url'); ?>/img/elizabeth-rita.png" alt="Elizabeth Rita | Freelance Hair &amp; Make Up Artist" />
					</div>
					
					<div class="col-xs-3 col-sm-3 hidden-md hidden-lg text-right">
						<a href="#" class="menu-button">
							<div id="nav-icon">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
					</div>
					
					<div class="hidden-xs hidden-sm col-md-12 col-lg-12">
						<?php
						if(!(is_front_page())):
							if(get_field('page_title')):
								echo '<h1 class="page-title">&ldquo;' . get_field('page_title') . '&rdquo;</h1>';
							else:
								echo '<h1 class="page-title">&ldquo;' . get_the_title() . '&rdquo;</h1>';
							endif;
						else:
							echo '<h1 class="page-title hidden-xs hidden-sm">&nbsp;</h1>';
						endif;
						?>
					</div>
				
					<div class="hidden-xs hidden-sm col-md-12 col-lg-12">
			
						<nav id="header-navigation">
							<ul>
								<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
								<li><a href="<?php echo get_permalink(6); ?>" title="Beauty">Beauty</a></li>
								<li><a href="<?php echo get_permalink(8); ?>" title="Fashion">Fashion</a></li>
								<li><a href="<?php echo get_permalink(10); ?>" title="Male Grooming">Male Grooming</a></li>
								<li><a href="<?php echo get_permalink(12); ?>" title="Children">Children</a></li>
								<li><a href="<?php echo get_permalink(14); ?>" title="Nails">Nails</a></li>
								<li><a href="<?php echo get_permalink(16); ?>" title="Celebrities">Celebrities</a></li>
								<li><a href="<?php echo get_permalink(25); ?>" title="Weddings">Weddings</a></li>
							</ul>
						</nav>
					
					</div>
				
				</div>
			
			</div>
		
		</header>
	