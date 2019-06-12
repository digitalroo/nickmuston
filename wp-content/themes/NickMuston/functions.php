<?php

if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary Left', 'twentynineteen' ),
				'menu-2' => __( 'Primary Right', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
				'mobile' =>	__('Mobile Menu', 'twentynineteen'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {

	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'all-css', get_theme_file_uri( '/assets/css/all.css' ) );
	wp_enqueue_style( 'owl.carousel.min.css', get_theme_file_uri( '/assets/css/owl.carousel.min.css' ) );
	wp_enqueue_style( 'aos', get_theme_file_uri( '/assets/css/aos.css' ) );
	wp_enqueue_style( 'style.css', get_theme_file_uri( '/assets/css/style.css' ) );
	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );
	
	wp_enqueue_script('jqury.js', get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js', array(), '1.0.0', true);
	wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), '1.0.0', true);
	wp_enqueue_script('masonry.pkgd.min.js', get_template_directory_uri().'/assets/js/masonry.pkgd.min.js', array(), '1.0.0', true);
	wp_enqueue_script('newsload.js', get_template_directory_uri().'/assets/js/newsload.js', array(), '1.0.0', true);
	wp_enqueue_script('aos-js', get_template_directory_uri().'/assets/js/aos.js', array(), '1.0.0', true);
	wp_enqueue_script('custom.js', get_template_directory_uri().'/assets/js/custom.js', array(), '1.0.0', true);
	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() { ?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	} ?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

add_action( 'init', 'wpb_register_post_types', 5 );

function wpb_register_post_types() {
    register_post_type('testimonials', array(
        'labels'			=> array(
            'name'					=> __( 'Testimonials', 'ap' ),
            'singular_name'			=> __( 'Testimonial', 'ap' ),
            'menu_name'	            => __( 'Testimonials', 'ap'),
            'add_new'				=> __( 'Add New' , 'ap' ),
            'add_new_item'			=> __( 'Add New Testimonial' , 'ap' ),
            'edit_item'				=> __( 'Edit Testimonial' , 'ap' ),
            'new_item'				=> __( 'New Testimonial' , 'ap' ),
            'view_item'				=> __( 'View Testimonial', 'ap' ),
            'search_items'			=> __( 'Search Testimonials', 'ap' ),
            'not_found'				=> __( 'No Testimonials found', 'ap' ),
            'not_found_in_trash'	=> __( 'No Testimonials found in Trash', 'ap' ), 
        ),
        'public'			=> true,
        'has_archive'       => true,
        'show_ui'			=> true,
        'show_in_menu'      => true,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    ));
}

add_action( 'init', 'wpb_register_post_service', 5 );

function wpb_register_post_service() {
    register_post_type('Service', array(
        'labels'			=> array(
            'name'					=> __( 'Service', 'ap' ),
            'singular_name'			=> __( 'Service', 'ap' ),
            'menu_name'	            => __( 'Service', 'ap'),
            'add_new'				=> __( 'Add New' , 'ap' ),
            'add_new_item'			=> __( 'Add New Service' , 'ap' ),
            'edit_item'				=> __( 'Edit Service' , 'ap' ),
            'new_item'				=> __( 'New Service' , 'ap' ),
            'view_item'				=> __( 'View Service', 'ap' ),
            'search_items'			=> __( 'Search Service', 'ap' ),
            'not_found'				=> __( 'No Service found', 'ap' ),
            'not_found_in_trash'	=> __( 'No Service found in Trash', 'ap' ), 
        ),
        'public'			=> true,
        'has_archive'       => true,
        'show_ui'			=> true,
        'show_in_menu'      => true,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'rewrite'           => array( 'slug' => 'services' ),
    ));
}

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


function law_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_site_url().'/wp-content/uploads/2019/05/logo-1.png'; ?>);
            background-size: 80%;
            width: 150px;
			height: 90px;
        }
        html body.login {
        	background-color: #172d4d;
            background-position:center; background-blend-mode: overlay;
        }
        .login form {
			border:1px solid #eee;
            background: transparent none repeat scroll 0 0;
            background: #fff none repeat scroll 0 0;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
            margin-left: 0;
            margin-top: 20px;
            padding: 26px 24px 46px;
            border-radius: 5px;
            box-shadow: none !important;
            position: relative;
            z-index: 1;
        }
        .login .button-primary {
            background-color: #000 !important;
            border: none !important;
            box-shadow: none !important;
            color: #fff !important;
            text-decoration: none !important;
            text-shadow: none !important;
        }
        .button-primary.button-large{ background-color: #000 !important; }
        .login label, .login #backtoblog a, .login #nav a {
            color: #000 !important;
        }
        .login-action-login #login #nsl-custom-login-form-main,
        .login-action-register #login #nsl-custom-login-form-main
        {display:none;}
        .login label{color: #000 !important;}
        body.login #backtoblog a, .login #nav a{color: #fff !important;}
        .login form {background: rgba(255,255,255,0.7) !important;}
		.login .privacy-policy-link {display:none}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'law_login_logo' );

if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'blog-detail-thumb', 1244, 622, true ); //(cropped)
}
