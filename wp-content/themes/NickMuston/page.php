<?php get_header();

while(have_posts()): the_post(); ?>

	<section class="news-child-page legel-inner">
		<div class="container">
	        <div class="child-title aos-item" data-aos="fade-up" data-aos-duration="1000"> 
			  <h1><?php the_title();?></h1>
	        </div>
		</div>
		<div class="news-content-wrapper">
			<div class="container">
				<div class="news-content aos-item" data-aos="fade-up" data-aos-duration="1000">
	                <?php the_content();?>
	                <a class="btn-link" href="<?php echo site_url();  ?>">< BACK TO HOME</a>
				</div>
			</div>	
		</div>
		<div class="footer-top-bar">
			<p class="aos-item" data-aos="fade-up" data-aos-duration="1000"><?php the_field('message', 'option'); ?></p>
		</div>
	</section>
    
<?php endwhile;
get_footer(); ?>
