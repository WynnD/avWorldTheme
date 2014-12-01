	<footer class="site-footer">

		<nav class="site-nav">
				
				<?php 
				
				$args = array(
						'theme_location' => 'footer'
				);
				
				wp_nav_menu( $args ); ?>
				
		</nav>

		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y')?></p>
		<p>It is <?php the_time('g:i a'); ?> on <?php the_time('l, F jS');?></p>
		
	</footer>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>