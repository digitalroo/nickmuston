<?php get_header();

while(have_posts()): the_post(); ?>

<section class="news-child-page">
	<div class="container">
        <div class="child-title aos-item" data-aos="fade-up" data-aos-duration="1000"> 
            <div class="post-cat">
                <p class="post-date">Posted: <?php echo get_the_date('j F Y');?></p>
                <p clas="post-category">Category: 
                    <span>
                        <?php $category = get_the_category();
                        foreach ($category as $cat) {
                            echo $cat->cat_name;
                        } ?>
                    </span>
                </p>
            </div>
		  <h1><?php the_title();?></h1>
        </div>
	</div>
	<div class="news-main-img aos-item" data-aos="fade-up" data-aos-duration="1000">
        <?php $image = ''; $alt = '';
        if( has_post_thumbnail() ) {                                        
            $attachments = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog-detail-thumb', true ); //echo '<pre>'; print_r($attachments);
            $image = $attachments[0];
            $alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
        } ?>
		<div class="container newimage">
			<img src="<?php echo $image; ?>" alt="<?php echo $alt;?>" />
		</div>
	</div>
	<div class="news-content-wrapper">
		<div class="container">
            <?php $facebook = 'http://www.facebook.com/share.php?u=' . urlencode(get_the_permalink()) . '&title=' . urlencode(get_the_title());
            $twitter = 'http://twitter.com/home?status='. urlencode(get_the_title()). '+'. urlencode(get_the_permalink());
            $mail_to = 'mailto:?subject=' . urlencode(get_the_permalink()) . '&body=Check out this article I came across '. get_the_permalink();
            $linkedin = 'http://www.linkedin.com/shareArticle?mini=true&url=' . urlencode(get_the_permalink()) . '&title=' . urlencode(get_the_title()) . '&source=' . get_bloginfo("url"); ?>
            <ul class="share-social-icons aos-item" data-aos="fade-up" data-aos-duration="1000">
                <li>
                    <a href="<?php echo $linkedin;?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="<?php echo $mail_to;?>" target="_blank"><i class="fas fa-envelope"></i></a>
                </li>
                <li>SHARE</li>
            </ul>
			<div class="news-content aos-item" data-aos="fade-up" data-aos-duration="1000">
                <?php the_content();?>
                <a class="btn-link" href="<?php echo get_the_permalink( get_option( 'page_for_posts' ) );  ?>">< BACK TO POSTS</a>
			</div>
		</div>	
	</div>
	<div class="footer-top-bar">
		<p class="aos-item" data-aos="fade-up" data-aos-duration="1000"><?php the_field('message', 'option'); ?></p>
	</div>
</section>
    
<?php endwhile;
get_footer(); ?>
