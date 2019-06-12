<?php get_header(); ?>
	<div class="hero-banner" style="background-image:url('<?php the_field('banner_image'); ?>')">
		<div class="aos-item" data-aos="fade-up" data-aos-duration="1000">
			<h1><?php  the_field('banner_heading'); ?></h1>
			<p><?php  the_field('banner_subheading'); ?></p>
			<div class="divider"></div>
		</div>
	</div>
	<div class="after-banner-caption aos-item" data-aos="fade-up" data-aos-duration="1000">
		<p><span><?php  the_field('after_banner_caption'); ?></span> <img src="<?php  the_field('after_banner_caption_image'); ?>" alt="image" /></p>
	</div>
	<div class="nick-home-about">
		<div class="container aos-item" data-aos="fade-up" data-aos-duration="1000">
			<?php the_field('about'); ?>
		</div>
	</div>
	<div class="half-half">
		<?php if( have_rows('sections') ): ?>
		<div class="container">
			<?php while( have_rows('sections') ): the_row(); ?>
				<div class="row">
					<div class="half-img-holder aos-item" data-aos="fade-up" data-aos-duration="1000">
						<img src="<?php the_sub_field('section_image1'); ?>" alt="image" />
					</div>
					<div class="half-content-holder Professional-content aos-item" data-aos="fade-up" data-aos-duration="1000">
						<h2><?php the_sub_field('section_title1'); ?></h2>
						<p><?php the_sub_field('section_text1'); ?></p>
						<a class="btn-link" href="<?php the_sub_field('section_link1'); ?>"><?php the_sub_field('section_link_text1'); ?></a>
					</div>
				</div>
				<div class="row">
					<div class="half-content-holder Heading-content aos-item" data-aos="fade-up" data-aos-duration="1000">
						<h2><?php the_sub_field('section_title2'); ?></h2>
						<p><?php the_sub_field('section_text2'); ?></p>
						<a class="btn-link" href="<?php the_sub_field('section_link2'); ?>"><?php the_sub_field('section_link_text2'); ?></a>
					</div>
					<div class="half-img-holder heading-img-holder aos-item" data-aos="fade-up" data-aos-duration="1000">
						<img src="<?php the_sub_field('section_image2'); ?>" alt="image" />
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="recent-valuations">
		<div class="container aos-item" data-aos="fade-up" data-aos-duration="1200">
			<h2>Recent valuations</h2>
			<div class="divider"></div>
			<?php if( have_rows('recent_valuations_image') ): ?>
				<div class="row" id="recentValuations" class="aos-item" data-aos="fade-up" data-aos-duration="1000">
					<?php while( have_rows('recent_valuations_image') ): the_row(); ?>
						<div class="valuation">
							<img src="<?php the_sub_field('image_valuations'); ?>" alt="image"/>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="testimonials">
		<div class="container aos-item" data-aos="fade-up" data-aos-duration="1200">
			<?php if( have_rows('testimonials') ): ?>
				<div class="owl-carousel">
	                <?php $query = new WP_Query( array( 'post_type' => 'testimonials') );
					while( $query->have_posts() ): $query->the_post();      
                        $image = ''; $alt = '';
                        if( has_post_thumbnail() ) {                                        
                            $attachments = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail', true );
                            $image = $attachments[0];
                            $alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
                        } ?>
						<div>
							<img src="<?php echo $image; ?>" alt="<?php echo $alt;?>" />
							<?php the_content(); ?>
							<?php the_title(); ?>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>
			<a class="btn-link" href="<?php the_field('testimonials_link'); ?>"><?php the_field('testimonials_text_link'); ?></a>
		</div>
	</div>
	<div class="footer-top-bar">
		<p class="aos-item" data-aos="fade-up" data-aos-duration="1000"><?php the_field('message', 'options') ?></p>
	</div>
<?php get_footer(); ?>