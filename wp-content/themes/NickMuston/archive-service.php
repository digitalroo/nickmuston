<?php /* Template Name: Highlights */ 
get_header(); ?>

    <section class="highlights-page">
        <div class="testimonial-header aos-item" data-aos="fade-up" data-aos-duration="1000">
            <?php $page = get_field( 'archive_service', 'options' ); $post = get_post( $page ); setup_postdata( $post ); ?>
            <h2><?php the_title(); ?></h2>
            <?php wp_reset_postdata(); ?>
            <div class="divider"></div>
        </div>
        <div class="highlights-main">
            <?php if( have_posts() ): ?>
            <?php $i = 1;  $loop = new WP_Query( array( 'post_type' => 'service', 'posts_per_page' =>6, 'category' => 'current' ) );
                    if($i%2 != 0): ?>
                        <div class="first-highlight">
                            <div class="container">
                                <div class="highlight-img aos-item" data-aos="fade-up" data-aos-duration="1000">
                                    <?php $i++; $image = ''; $alt = '';
                                    if( has_post_thumbnail() ) {                                        
                                        $attachments = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', true );
                                        $image = $attachments[0];
                                        $alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
                                    } ?>
                                    <img src="<?php echo $image;?>" alt="image" />
                                </div>
                                <div class="highlight-content aos-item" data-aos="fade-up" data-aos-duration="1000">
                                    <a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
                                    <p><?php the_field('short_description'); ?></p><br>
                                    <a class="btn-link" href="<?php the_permalink();?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="two-highlight">
                            <div class="container">
                                <div class="highlight-content aos-item" data-aos="fade-up" data-aos-duration="1000">
                                    <a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
                                    <p><?php the_field('short_description'); ?></p><br>
                                    <a class="btn-link" href="<?php the_permalink();?>">Read More</a>
                                </div>
                                <div class="highlight-img aos-item" data-aos="fade-up" data-aos-duration="1000">
                                    <?php $i=1; $image = ''; $alt = '';
                                    if( has_post_thumbnail() ) {                                        
                                        $attachments = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', true );
                                        $image = $attachments[0];
                                        $alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
                                    } ?>
                                    <img src="<?php echo $image;?>" alt="image" />
                                </div>
                                
                            </div>
                        </div>
                    <?php endif;
                endwhile; ?>
            <?php endif;?>
        </div>
        <div class="browse">
            <div class="container aos-item" data-aos="fade-up" data-aos-duration="1000">
                <p>browse our <a href="<?php echo get_the_permalink(get_field( 'archive_testimonial', 'options' ) );?>">client testimonials</a></p>
            </div>
        </div>
        <?php get_template_part('template-parts/content','get-in-touch'); ?>   
    </section> 
<?php get_footer(); ?>
