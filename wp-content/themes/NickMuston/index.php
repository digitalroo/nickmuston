<?php get_header(); ?>

    <section class="news-parent-page">
    	<div class="container">
            <?php $page = get_option( 'page_for_posts' ); $post = get_post( $page ); setup_postdata( $post ); ?>
            <h1 class="aos-item" data-aos="fade-up" data-aos-duration="1000"><?php the_title(); ?></h1>
            <?php wp_reset_postdata(); ?> 
    		<div class="divider"></div>
    		<?php if( have_posts() ): ?>
                <div class="news-cards aos-item" data-aos="fade-up" data-aos-duration="1000">
                    <?php while( have_posts() ): the_post(); ?>
                        <div class="news-card">
                            <?php $image = ''; $alt = '';
                            if( has_post_thumbnail() ) {                                        
                                $attachments = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', true );
                                $image = $attachments[0];
                                $alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
                            } ?>
                            <img src="<?php echo $image; ?>" alt="<?php echo $alt;?>" />
                            <div class="card-body">
                                <span><?php the_time('d M, Y'); ?></span>
                                <a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
                                <a class="btn-link" href="<?php the_permalink();?>">READ NEWS POST</a>
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