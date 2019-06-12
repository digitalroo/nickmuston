<?php get_header(); ?>

    <section class="testimonial-page">
    	<div class="testimonial-header aos-item" data-aos="fade-up" data-aos-duration="1000">
            <?php $page = get_field( 'archive_testimonial', 'options' ); $post = get_post( $page ); setup_postdata( $post ); ?>
            <h2><?php the_title(); ?></h2>
            <?php wp_reset_postdata(); ?>
    		<div class="divider"></div>
    	</div>
    	<ul class="testimonial-list">
            <?php while( have_posts() ): the_post();?>
                <li class="aos-item" data-aos="fade-up" data-aos-duration="1000">
                    <?php $image = ''; $alt = '';
                    if( has_post_thumbnail() ) {                                        
                        $attachments = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail', true );
                        $image = $attachments[0];
                        $alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
                    } ?>
                    <div class="single-testimonial">
                        <div class="user-image">
                            <img src="<?php echo $image;?>" alt="<?php echo $alt;?>" />
                        </div>
                        <?php the_content();?>
                        <span><?php the_title();?></span>
                    </div>
                </li>
            <?php endwhile;?>
    	</ul>
    	<?php get_template_part('template-parts/content','get-in-touch'); ?>
    </section> 

<?php get_footer(); ?>
