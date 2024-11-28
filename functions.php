<?php
/**
 * Best Day Ever Vacations by Jen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Best_Day_Ever_Vacations_by_Jen
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bdev_by_jen_setup()
{
	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Best Day Ever Vacations by Jen, use a find and replace
	 * to change 'bdev_by_jen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('bdev_by_jen', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'bdev_by_jen'),
			'footer-1' => esc_html__('Footer-1', 'bdev_by_jen'),
			'footer-2' => esc_html__('Footer-2', 'bdev_by_jen'),
			'footer-3' => esc_html__('Additional Info', 'bdev_by_jen'),

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
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bdev_by_jen_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);

}
add_action('after_setup_theme', 'bdev_by_jen_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bdev_by_jen_content_width()
{
	$GLOBALS['content_width'] = apply_filters('bdev_by_jen_content_width', 640);
}
add_action('after_setup_theme', 'bdev_by_jen_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bdev_by_jen_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Blog Sidebar', 'bdev_by_jen'),
			'id' => 'blog-sidebar',
			'description' => esc_html__('Add widgets here.', 'bdev_by_jen'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Banner Sidebar', 'bdev_by_jen'),
			'id' => 'banner-sidebar',
			'description' => esc_html__('Add widgets here.', 'bdev_by_jen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Marketing Banner Main', 'bdev_by_jen'),
			'id' => 'marketing-banner-main',
			'description' => esc_html__('Add widgets here.', 'bdev_by_jen'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Home Page Marketing Banner', 'bdev_by_jen'),
			'id' => 'home-pg-marketing-banner',
			'description' => esc_html__('Add your ad banner here.', 'bdev_by_jen'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Proud Member of', 'bdev_by_jen'),
			'id' => 'proud-member',
			'description' => esc_html__('Add/edit logos here.', 'bdev_by_jen '),
			'before_widget' => '<section id="%1$s" class="widget %2$s my-4">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Subsciption Main', 'bdev_by_jen'),
			'id' => 'subscription-main',
			'description' => esc_html__('Add widgets here.', 'bdev_by_jen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s subscription my-4">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Meet Jen Blog Post', 'bdev_by_jen'),
			'id' => 'meet-jen',
			'description' => esc_html__('Add widgets here.', 'bdev_by_jen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s my-4">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Social Media Share Icon', 'bdev_by_jen'),
			'id' => 'social-media-share-icon',
			'description' => esc_html__('Add widgets here.', 'bdev_by_jen '),
			'before_widget' => '<div id="%1$s" class="widget %2$s my-4">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Accordion FAQs', 'bdev_by_jen'),
			'id' => 'accordion-faqs',
			'description' => esc_html__('Add widgets here.', 'bdev_by_jen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s my-4">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Instagram', 'bdev_by_jen'),
			'id' => 'instagram',
			'description' => esc_html__('Add widgets here.', 'bdev_by_jen'),
			'before_widget' => '<div id="%1$s" class="widget %2$s my-4">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Footer', 'bdev_by_jen'),
			'id' => 'footer',
			'description' => esc_html__('Add widgets here.', 'bdev_by_jen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
		)
	);

	register_sidebar(array(
		'name' => esc_html__('Jen Info', 'bdev_by_jen'),
		'id' => 'footer-widget1',
		'description' => esc_html__('Add your own (Owner of Website) infomations here', 'bdev_by_jen'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
	));

	register_sidebar(array(
		'name' => esc_html__('Addition Links', 'bdev_by_jen'),
		'id' => 'footer-widget2',
		'description' => esc_html__('Any information that user want to add.', 'bdev_by_jen'),
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '<h5>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
	));

	register_sidebar(array(
		'name' => esc_html__('Contact Jen', 'bdev_by_jen'),
		'id' => 'footer-widget3',
		'description' => esc_html__('Social Media and Button', 'bdev_by_jen'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
	));
}
add_action('widgets_init', 'bdev_by_jen_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function bdev_by_jen_scripts()
{
	wp_enqueue_style('bdev_by_jen-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('bdev_by_jen-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');

	wp_style_add_data('bdev_by_jen-style', 'rtl', 'replace');

	wp_enqueue_script('bdev_by_jen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('bdev_by_jen-slider', get_template_directory_uri() . '/js/slider.js', array(), null, true);
	wp_enqueue_script('bdev_by_jen-quote-form', get_template_directory_uri() . '/js/quote-form.js', array(), null, true);
	wp_enqueue_script('jquery');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bdev_by_jen_scripts');

/**
 * Enqueue Swiper JS
 */
function bdev_enqueue_swiper() {
	wp_enqueue_style('swiper-css', esc_url(get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.css'));
	wp_enqueue_script('swiper-js', esc_url(get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js'));
}
add_action('wp_enqueue_scripts', 'bdev_enqueue_swiper');

/**
 * Implement the Custom Fonts
 */
function enqueue_custom_fonts()
{
	if (!is_admin()) {
		wp_register_style('young_serif', 'https://fonts.googleapis.com/css2?family=Young+Serif&display=swap',[], null);
		wp_register_style('noto_sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap', [], null);

		wp_enqueue_style('young_serif');
		wp_enqueue_style('noto_sans');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Columns Special Deal
 */
require get_template_directory() . '/inc/custom-columns.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Get Shortcode for testimonials, specialties, and certifications
require_once get_template_directory(). '/parts/testimonials-slider.php';
require_once get_template_directory(). '/parts/specialties-slider.php';
require_once get_template_directory(). '/parts/certificates-slider.php';

/**
 * Enable theme support
 */
function theme_testing_parts_setup()
{
	add_theme_support('block-template-parts');
}
add_action('after_setup_theme', 'theme_testing_parts_setup');

