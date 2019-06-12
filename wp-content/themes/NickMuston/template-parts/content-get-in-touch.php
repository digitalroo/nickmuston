<div class="get-in-touch">
    <div class="container">
        <div class="get-in-touch-left aos-item" data-aos="fade-up" data-aos-duration="1000">
            <img src="<?php the_field('get_touch_image', 'options'); ?>" alt="image" />
            <h2><?php the_field('get_touch_title', 'options'); ?></h2>
            <div class="divider"></div>
            <p><?php the_field('get_touch_short_description', 'options'); ?></p>
            <div class="contact-number">
                <span><?php the_field('contact_title', 'options'); ?></span>
                <a href="<?php the_field('contact_link', 'options'); ?>"><?php the_field('contact_number', 'options'); ?></a>
            </div>
        </div>
        <div class="get-in-touch-form aos-item" data-aos="fade-up" data-aos-duration="1000">
            <?php $form = get_field('form', 'options'); ?>
            <?php echo do_shortcode($form); ?>
        </div>    
    </div>
</div>