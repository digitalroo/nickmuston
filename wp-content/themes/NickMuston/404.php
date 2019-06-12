<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

	<div class="container">
		<div class="error-404 not-found">
			<h1>Not Found</h1>
			<div class="divider"></div>
			<p>Apologies, but the page you requested could not be found. Perhaps searching will help.</p>
			<a href="<?php echo site_url(); ?>" class="btn yellow-btn">Back to Home</a>
		</div><!-- .error-404 -->
	</div>

<?php
get_footer();
