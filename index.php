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
			<p><?php the_content(); ?></p>
		</article>	
	<?php endwhile;
	
	else :
		echo '<p>No content!</p>';
		
endif; ?>
	</section>

<?php
get_footer();
?>