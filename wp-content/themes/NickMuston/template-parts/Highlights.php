<?php /* Template Name: Highlights */ 
get_header(); ?>

<section class="highlights-page">
	<div class="testimonial-header aos-item" data-aos="fade-up" data-aos-duration="1000">
        <h2><?php the_title();?></h2>
		<div class="divider"></div>
	</div>
	<div class="highlights-main">
        <?php $i = 1; while( have_rows( 'highlights' ) ): the_row();?>
            <?php if($i%2 != 0): ?>
                <div class="first-highlight">
                    <div class="container">
                        <div class="highlight-img aos-item" data-aos="fade-up" data-aos-duration="1000">
                            <?php $image = get_sub_field( 'image' ); ?>
                            <img src="<?php echo $image['url'];?>" alt="image" />
                        </div>
                        <div class="highlight-content aos-item" data-aos="fade-up" data-aos-duration="1000">
                            <?php the_sub_field( 'content' ); ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="two-highlight">
                    <div class="container">
                        <div class="highlight-content aos-item" data-aos="fade-up" data-aos-duration="1000">
                            <?php the_sub_field( 'content' ); ?>
                        </div>
                        <div class="highlight-img aos-item" data-aos="fade-up" data-aos-duration="1000">
                            <?php $image = get_sub_field( 'image' ); ?>
                            <img src="<?php echo $image['url'];?>" alt="image" />
                        </div>
                    </div>
                </div>
            <?php endif; $i++;?>
        <?php endwhile;?>
	</div>
	<div class="browse">
		<div class="container aos-item" data-aos="fade-up" data-aos-duration="1000">
            <p>browse our <a href="<?php echo get_the_permalink(get_field( 'archive_testimonial', 'options' ) );?>">client testimonials</a></p>
		</div>
	</div>
    <?php get_template_part('template-parts/content','get-in-touch'); ?>
</section> 

<?php get_footer(); ?>
