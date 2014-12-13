<?php

get_header();
?>
<div class="main">
	<section class="post-content">
<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<article class="post">
			
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>	
	<?php endwhile;
	
	else :
		echo '<p>No content!</p>';
		
	endif; ?>
	</section>
	<aside class="side-menu">
		<nav class="side-nav">
			<?php

			$args = array('theme_location' => 'secondary'
				);
			wp_nav_menu( $args ); ?>
		</nav>
	</aside>
	<div class="push"></div>
</div>
</div>

<?php
get_footer();
?>