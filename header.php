<DOCTYPE! html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lora:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
		<div class="mypage">
			<!-- site-header -->
			<header class="site-header">
				<a href="<?php echo home_url();?>"><img id="banner" src="<?php bloginfo('template_directory'); ?>/resources/images/logo.jpg" alt="AvWorld"/></a>
				<!-- <h4 id="description"><?php bloginfo('description'); ?></h4> -->
				
				<nav class="header-nav">
				
					<?php 
				
					$args = array(
						'theme_location' => 'primary'
					);
				
					wp_nav_menu( $args ); ?>
				
				</nav>
				<div style="clear:both"></div>
			</header> <!-- /site-header -->
			
