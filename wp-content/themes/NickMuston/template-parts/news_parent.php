<?php /* Template Name: News Parent */ 
get_header(); ?>

<section class="news-parent-page">
	<div class="container">
		<h1><?php the_field('title'); ?></h1>
		<div class="divider"></div>
		<?php if( have_rows('news_details') ): ?>
			<div class="news-cards">
				<?php while( have_rows('news_details') ): the_row(); ?>
					<div class="news-card">
						<img src="<?php the_sub_field('image'); ?>" alt="image" />
						<div class="card-body">
							<span><?php the_sub_field('news_date'); ?></span>
							<h2><?php the_sub_field('news_title'); ?></h2>
							<a class="btn-link" href="javascript:void(0)"><?php the_sub_field('link_button_text'); ?></a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
    	<?php endif; ?>
	</div>
	<div class="footer-top-bar">
		<p><?php the_field('message', 'option'); ?></p>
	</div>
</section>
    
<?php get_footer(); ?>


