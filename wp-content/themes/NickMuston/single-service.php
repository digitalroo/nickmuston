<?php get_header();
while ( have_posts() ): the_post(); ?>

<section class="service-child-page">
	<div class="container">
		<div class="service-child-intro aos-item" data-aos="fade-up" data-aos-duration="1000">
			<h1><?php the_title(); ?></h1>
			<div class="divider"></div>
			<h2><?php the_field('subtext'); ?></h2>
			<p><?php the_field('short_description'); ?></p>
		</div>
	</div>
	<div class="gray-light-bg">	
		<div class="container">
			<div class="service-image aos-item" data-aos="fade-up" data-aos-duration="1000">
                <?php $image = ''; $alt = '';
                if( has_post_thumbnail() ) {                                        
                    $attachments = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', true );
                    $image = $attachments[0];
                    $alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
                } ?>
				<img src="<?php echo $image; ?>" alt="<?php echo $alt;?>" />
			</div>
			<div class="servcie-content aos-item" data-aos="fade-up" data-aos-duration="1000">
                <?php the_content(); ?>
                <a href="<?php echo site_url('/testimonials'); ?>" class="btn-link">Browse Our Testimonials</a>
			</div>
		</div>
	</div>
	<?php get_template_part('template-parts/content','get-in-touch'); ?>	
</section>
    
<?php endwhile;
get_footer(); ?>
