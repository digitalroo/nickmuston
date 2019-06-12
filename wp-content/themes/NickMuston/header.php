<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.png"/>
	<?php gravity_form_enqueue_scripts(1, true);
	wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<header class="header">
		<div class="container">
			<div class="desktop-menu">
				<div class="left-menu">
					<?php wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container' => '',
                        'menu_class' => ''
                    ) ); ?>
				</div>
				<div class="logo">
					<a href="<?php echo get_site_url(); ?>">
						<img src="<?php the_field('main_logo', 'options'); ?>" class="logo-icon">
						<img src="<?php the_field('scroll_logo', 'options'); ?>" class="logo-fix-icon">
					</a>
				</div>
				<div class="right-menu">
				 	<?php wp_nav_menu( array(
                        'theme_location' => 'menu-2',
                        'container' => '',
                        'menu_class' => ''
                    ) ); ?>
				</div>
			</div>
			<div class="mobile-menu">
				<div class="logo">
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile-logo.png" class="mobile-logo-icon">
					</a>
				</div>
				<div class="menu-icon-main">
					<span>MENU</span>
					<div class="menu-icon" onclick="myFunction(this)">
					  <div class="bar1"></div>
					  <div class="bar2"></div>
					  <div class="bar3"></div>
					</div>
				</div>
				<div class="navigation">
					<?php wp_nav_menu( array(
                        'theme_location' => 'mobile',
                        'container' => '',
                        'menu_class' => ''
                    ) ); ?>
				</div>
			</div>
		</div>
	</header>

	<div id="content">
