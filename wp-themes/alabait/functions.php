<?php
/**
 * AlaBait functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AlaBait
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'alabait_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

/* ======= Theme Plugins AutoInstallation ======= */

	 require_once dirname(__FILE__).'/class-tgm-plugin-activation.php';
 add_action('tgmpa_register','my_theme_register_required_plugins');
 function my_theme_register_required_plugins(){
   $plugins = array(
     /* AutoInstall from WP Repo */
     array(
     'name' => 'Yoast SEO',
     'slug' => 'wordpress-seo',
     ),
     array(
     'name' => 'Contact Form 7',
     'slug' => 'contact-form-7',
     ),
     array(
     'name' => 'Duplicate Post',
     'slug' => 'duplicate-post',
     ),
       array(
     'name' => 'Duplicator – WordPress Migration Plugin',
     'slug' => 'duplicator',
     ),
         array(
     'name' => 'TinyMCE Advanced',
     'slug' => 'tinymce-advanced',
     ),

     /* AutoInstall from Theme Repo */
		 	array(
		 'name' => 'Advanced Custom Fields PRO',
		 'slug' => 'advanced-custom-fields',
		 'source' => get_stylesheet_directory().'/plugins/acf-pro.zip',
		 'required' => true,
		 ),
     		array(
     'name' => 'Advanced Custom Fields: Gallery Field',
     'slug' => 'acf-gallery',
     'source' => get_stylesheet_directory().'/plugins/acf-gallery.zip',
     'required' => true,
     ),
         array(
     'name' => 'Advanced Custom Fields: Options Page',
     'slug' => 'acf-options-page',
     'source' => get_stylesheet_directory().'/plugins/acf-options-page.zip',
     'required' => true,
     ),
        array(
     'name' => 'Advanced Custom Fields: Repeater Field',
     'slug' => 'acf-repeater',
     'source' => get_stylesheet_directory().'/plugins/acf-repeater.zip',
     'required' => true,
     ),

		 array(
    'name' => 'Cyr to Lat Enhanced',
    'slug' => 'cyr3lat',
		'source' => get_stylesheet_directory().'/plugins/cyr3lat.zip',
		'required' => true,
    ),
   );

   $theme_text_domain = 'alabait'; // текстовый домен темы
     $config = array(
     'settings' => array(
     ),
   );
   tgmpa( $plugins, $config );
 }

/* =====================================================*/

	function alabait_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on AlaBait, use a find and replace
		 * to change 'alabait' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alabait', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'headerMenu' => esc_html__( 'Верхнее меню', 'alabait' ),
				'footerMenu' => esc_html__( 'Нижнее меню', 'alabait' ),
			)
		);



		add_theme_support('menus');

		function remove_footer_admin () {
		echo '<p>AlaBait Theme developed by <a href="https://github.com/IceSlam" target="_blank">IceSlam</a></p>';
		}
		add_filter('admin_footer_text', 'remove_footer_admin');
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
				'alabait_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'alabait_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alabait_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'alabait_content_width', 640 );
}
add_action( 'after_setup_theme', 'alabait_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alabait_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'alabait' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'alabait' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'alabait_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alabait_scripts() {
		/* AlaBait Theme styles */
		wp_enqueue_style( 'Roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap' );
		wp_enqueue_style( 'Comfortaa-font', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap' );
		wp_enqueue_style( 'Montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
		wp_enqueue_style( 'Bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css', array(), 4.4 );
		wp_enqueue_style( 'MDBootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css', array(), 4.16 );
		wp_enqueue_style( 'UIKit', 'https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/css/uikit.min.css', array(), 3.4 );
		wp_enqueue_style( 'AlaBait-styles', get_stylesheet_uri(), array(), 1.0, );
		wp_enqueue_style( 'AlaBait-main', get_template_directory_uri() . '/assets/css/main.css', array(), 0.9, all );
		wp_enqueue_style( 'AlaBait-media', get_template_directory_uri() . '/assets/css/media.css', array(), 0.9, all );

		/* AlaBait Theme scripts */
		wp_enqueue_script( 'FontAwesome', 'https://kit.fontawesome.com/6ac2b40a9b.js', array(), 5.13 );
		wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), 3.4 );
		wp_enqueue_script( 'Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js', array(), 1.14 );
		wp_enqueue_script( 'Bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js', array(), 4.4 );
		wp_enqueue_script( 'MDBootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js', array(), 4.16 );
		wp_enqueue_script( 'UIKit', 'https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit.min.js', array(), 3.4 );
		wp_enqueue_script( 'UIKit-Icons', 'https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit-icons.min.js', array(), 3.4 );
		wp_enqueue_script( 'VueJS', 'https://cdn.jsdelivr.net/npm/vue@2.6.11', array(), 4.16 );
	}
	add_action( 'wp_enqueue_scripts', 'alabait_scripts' );

/* Custom logo in adminbar */

function alabait_custom_logo() {
echo '
	<style type="text/css">
	#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	display:inline-block;
	background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/img/logo_wp_navbar.png) !important;
	background-position: 0 0;
	width:20px !important;
	height: 20px !important;
	color:rgba(0, 0, 0, 0);
	}
	#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
	background-position: 0 0;
	}
	</style>
';
}
add_action('wp_before_admin_bar_render', 'alabait_custom_logo');


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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
