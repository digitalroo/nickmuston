<?php /* Template Name: News Child */ 
get_header(); ?>

<section class="news-child-page">
	<div class="container">
		<h1><?php the_field('title'); ?></h1>
	</div>
	<div class="news-main-img">
		<img src="<?php the_field('title_image'); ?>" />
	</div>
	<div class="news-content-wrapper">
		<div class="container">
			<?php if( have_rows('social_icons') ): ?>
				<ul class="share-social-icons">
					<?php while( have_rows('social_icons') ): the_row(); ?>
						<li>
							<a href="mailto:<?php the_sub_field('link'); ?>"> <!-- javascript:void(0) -->
								<i class="<?php the_sub_field('class_fab_fa'); ?>"></i>
							</a>
						</li>
					<?php endwhile; ?>
					<li>SHARE</li>
				</ul>
			<?php endif; ?>
			<div class="news-content">
				<h2><?php the_field('news_content_tilte'); ?></h2>     
				<?php the_field('short_description1'); ?>
				<blockquote><?php the_field('blockquote'); ?></blockquote>
				<img src="<?php the_field('image'); ?>" alt="image" />
				<?php the_field('short_description2'); ?>
				<a class="btn-link" href="<?php the_field('button_link'); ?>"><?php the_field('button_link_text'); ?></a>
			</div>
		</div>	
	</div>
	<div class="footer-top-bar">
		<p><?php the_field('message', 'option'); ?></p>
	</div>
</section>
    
<?php get_footer(); ?>
