<?php
/**
 * The template for displaying the footer
 */
?>
	</div>
	<footer class="footer">		
		<div class="footer-logo">
			<img src="<?php the_field('footer_logo', 'option'); ?>" />
		</div>
		<div class="container">
			<ul class="footer-contact">
				<li><a href="tel:<?php the_field('contact_no', 'option'); ?>"><span>t</span> <?php the_field('contact_no', 'option'); ?></a></li>
				<li><a href="tel:<?php the_field('contact_no_2', 'option'); ?>"><span>m</span> <?php the_field('contact_no_2', 'option'); ?></a></li>
				<li><a href="mailto:<?php the_field('email', 'option'); ?>"><span>e</span> <?php the_field('email', 'option'); ?></a></li>
			</ul>
			<address><?php the_field('address', 'option'); ?></address>
			<p><?php the_field('copyright', 'option'); ?></p>
		</div>
	</footer>
	<div class="footer-bottom-bar">
		<div class="container">
			<ul>
				<?php  wp_nav_menu(array(
	                'theme_location' => 'footer',
	                'container' => '',
	                'menu_class' => ''
	        	)); ?>
			</ul>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
