<?php
/**
 * Bootstrap Basic theme
 * 
 * @package noborders
 */


/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
	$content_width = 1170;
}


if (!function_exists('NoBordersSetup')) {
	/**
	 * Setup theme and register support wp features.
	 */
	function NoBordersSetup() 
	{
		/**
		 * Make theme available for translation
		 * Translations can be filed in the /languages/ directory
		 * 
		 * copy from underscores theme
		 */
		load_theme_textdomain('noborders', get_template_directory() . '/languages');

		// add theme support post and comment automatic feed links
		add_theme_support('automatic-feed-links');

		// enable support for post thumbnail or feature image on posts and pages
		add_theme_support('post-thumbnails');

		// add support menu
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'noborders'),
		));

		// add post formats support
		add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

		// add support custom background
		add_theme_support(
			'custom-background', 
			apply_filters(
				'noborders_basic_custom_background_args', 
				array(
					'default-color' => 'ffffff', 
					'default-image' => ''
				)
			)
		);
	}// NoBordersSetup
}
add_action('after_setup_theme', 'NoBordersSetup');

if (!function_exists('NoBordersWidgetsInit')) {
	/**
	 * Register widget areas
	 */
	function NoBordersWidgetsInit() 
	{
		register_sidebar(array(
			'name'          => __('Header right', 'noborders'),
			'id'            => 'header-right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Navigation bar right', 'noborders'),
			'id'            => 'navbar-right',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));

		register_sidebar(array(
			'name'          => __('Sidebar left', 'noborders'),
			'id'            => 'sidebar-left',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Sidebar right', 'noborders'),
			'id'            => 'sidebar-right',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Footer left', 'noborders'),
			'id'            => 'footer-left',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Footer right', 'noborders'),
			'id'            => 'footer-right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));
	}// NoBordersWidgetsInit
}
add_action('widgets_init', 'NoBordersWidgetsInit');


if (!function_exists('NoBordersEnqueueScripts')) {
	/**
	 * Enqueue scripts & styles
	 */
	function NoBordersEnqueueScripts() 
	{
		wp_enqueue_style('normalize', get_template_directory_uri() . '/css/foundation5/normalize.css');
		wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');
		wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation5/foundation.css');
		wp_enqueue_style('departure-board-css', get_template_directory_uri() . '/css/departure-board.css');
		wp_enqueue_style('noborders-style', get_stylesheet_uri());
		wp_enqueue_style('elslidecustom', get_template_directory_uri() . '/css/elastslide/custom.css');
		wp_enqueue_style('elslide-style', get_template_directory_uri() . '/css/elastslide/elastislide.css');
		wp_enqueue_style('timeline-style', get_template_directory_uri() . '/css/timeline.css');
		wp_enqueue_style('foundationicons', 'http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css');

		wp_enqueue_script('jquery');
		wp_enqueue_script('gmap', 'https://maps.googleapis.com/maps/api/js?&sensor=false');
		wp_enqueue_script('noborders', get_template_directory_uri() . '/js/noborders.js');
		wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js');
		wp_enqueue_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.js');
		wp_enqueue_script('fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js');
		wp_enqueue_script('placeholder', get_template_directory_uri() . '/js/vendor/placeholder.js');
		wp_enqueue_script('foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery')); 		wp_enqueue_script('departure-board', get_template_directory_uri() . '/js/vendor/departure-board.js');
		wp_enqueue_script('elslide-ppcustom', get_template_directory_uri() . '/js/vendor/jquerypp.custom.js');
		wp_enqueue_script('elslide', get_template_directory_uri() . '/js/vendor/jquery.elastislide.js');
			
	}// NoBordersEnqueueScripts
}
add_action('wp_enqueue_scripts', 'NoBordersEnqueueScripts');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */ 
require get_template_directory() . '/inc/NoBordersWalkerNavMenu.php';

// Replaces the excerpt "more" text by a link
add_filter('excerpt_more', 'NoBordersExcerptMore');
function NoBordersExcerptMore($more) {
	global $post;
	return ' ...<br/>&nbsp;<br/><a class="button radius right" href="'. get_permalink($post->ID) . '">' .
		__("Read More", "noborders") .
	'</a>';
}

function NoBordersExcerptLength( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'NoBordersExcerptLength', 999 );

// Adds a widget area to house qtranslate flags. See also accompanying css.
if (function_exists('register_sidebar')) {
 register_sidebar(array(
 'name' => 'Extra Widget After Navbar',
 'id' => 'extra-widget',
 'description' => 'Extra widget after the navbar',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h2>',
 'after_title' => '</h2>'
 ));
}

/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/template-widgets-hook.php';

/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/adm-settings-pages.php';