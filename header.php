<DOCTYPE! html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
		<div class="page">
			<!-- site-header -->
			<header class="site-header">
				<a href="<?php echo home_url();?>"><img id="banner" src="<?php bloginfo('template_directory'); ?>/resources/images/logo.jpg" alt="AvWorld"/></a>
				<h4 id="description"><?php bloginfo('description'); ?></h4>
				
				<nav class="site-nav">
				
					<?php 
				
					$args = array(
						'theme_location' => 'primary'
					);
				
					wp_nav_menu( $args ); ?>
				
				</nav>
				<div style="clear:both"></div>
			</header> <!-- /site-header -->
			
