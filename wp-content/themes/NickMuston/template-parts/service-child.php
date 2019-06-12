<?php /* Template Name: Service Child */ 
get_header(); ?>

<section class="service-child-page">
	<div class="container">
		<div class="service-child-intro">
			<h1><?php the_field('first_title'); ?></h1>
			<div class="divider"></div>
			<h2><?php the_field('second_title'); ?></h2>
			<p><?php the_field('short_description'); ?></p>
		</div>
	</div>
	<div class="gray-light-bg">	
		<div class="container">
			<div class="service-image">
				<img src="<?php the_field('service_image'); ?>" alt="image" />
			</div>
			<div class="servcie-content">
				<?php the_field('description'); ?>
				<a href="<?php the_field('link_button_link'); ?>" class="btn-link"><?php the_field('link_button_text'); ?></a>
			</div>
		</div>
	</div>
	<?php get_template_part('template-parts/content','get-in-touch'); ?>
</section>
    
<?php get_footer(); ?>
