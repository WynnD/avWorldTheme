	<footer class="site-footer">

		<nav class="footer-nav">
				
				<?php 
				
				$args = array(
						'theme_location' => 'footer'
				);
				
				wp_nav_menu( $args ); ?>
				
		</nav>

		<div style="clear:both"></div>

		<div class="site-info">
			<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y')?></p>

		</div>	
	</footer>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>