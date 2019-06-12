<?php /* Template Name: About Us */ 
get_header(); ?>

<section class="about-page">
	<div class="about-intro aos-item" data-aos="fade-up" data-aos-duration="1000">
		<h1><?php the_field('main_title_intro'); ?></h1>
		<div class="divider"></div>
		<h2><?php the_field('title_intro'); ?></h2>
		<p><?php the_field('short_description_intro'); ?></p>
		<div class="caption-with-img">
			<span><?php the_field('caption_intro'); ?></span>
			<img src="<?php the_field('caption_image'); ?>" alt="image" />
		</div>
	</div>
	<div class="meet-our-team">
		<div class="container">
			<div class="team-left aos-item" data-aos="fade-up" data-aos-duration="1000">
				<div class="divider"></div>
				<p><?php the_field('short_description'); ?></p>
				<div class="divider"></div>
				<a class="btn-link" href="<?php echo site_url('/the-team');?>"><?php the_field('meet_title'); ?></a>
			</div>
			<div class="team-right aos-item" data-aos="fade-up" data-aos-duration="1000">
				<div class="team-image-holder">
					<img src="<?php the_field('team_image'); ?>" alt="image" />
				</div>
			</div>
		</div>
	</div>
    <?php get_template_part('template-parts/content','get-in-touch'); ?>
</section>
    
<?php get_footer(); ?>
