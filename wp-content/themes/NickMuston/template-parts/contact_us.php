<?php /* Template Name: Contact Us */ 
get_header(); ?>

<section class="contact-page">
	<div class="container">
		<h1 class="aos-item" data-aos="fade-up" data-aos-duration="1000"><?php the_field('title')?></h1>
		<div class="divider aos-item" data-aos="fade-up" data-aos-duration="1000"></div>
		<?php if( have_rows('contact_list') ): ?>
			<ul class="contact-list aos-item" data-aos="fade-up" data-aos-duration="1000">
				<?php while( have_rows('contact_list') ): the_row(); ?>
					<li>
						<span><?php the_sub_field('contect_title'); ?></span>
						<a href="<?php the_sub_field('contact_link'); ?>">
							<?php the_sub_field('contact_number'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<address class="aos-item" data-aos="fade-up" data-aos-duration="1000"><?php the_field('address')?></address>
		<div class="enquiry-form aos-item" data-aos="fade-up" data-aos-duration="1000">
			<h2><?php the_field('form_title')?></h2>
			<?php the_field('enquiry_form')?>
		</div>
	</div>
</section> 
	    
<?php get_footer(); ?>
