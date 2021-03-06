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
				 array(
		 'name' => 'No Category Base (WPML)',
		 'slug' => 'no-category-base-wpml',
		 ),
				 array(
		 'name' => 'Easy SVG Support',
		 'slug' => 'easy-svg',
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

		add_theme_support('menus');

		register_nav_menus(
			array(
				' headerMenu ' => esc_html__( 'Шапка', 'alabait' ),
				' footerMenu ' => esc_html__( 'Подвал', 'alabait' ),
			)
		);

		function register_navwalker(){
			require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
		}
		add_action( 'after_setup_theme', 'register_navwalker' );

		if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

		function remove_footer_admin () {
		echo '<p style="padding-top:1rem;">Тема АлаБайт разработана <a href="https://iceslam.ru" target="_blank">IceSlam</a> в компании <a href="https://alianscompany.ru" target="_blank">Альянс+</a>. Работает на WordPress</p>';
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
		wp_enqueue_style( 'FancyBox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), 3.5 );
		wp_enqueue_style( 'ExpandingSearchBar-default', get_template_directory_uri() . '/assets/css/default.css', array(), 1.0 );
		wp_enqueue_style( 'ExpandingSearchBar-main', get_template_directory_uri() . '/assets/css/component.css', array(), 1.0);
		wp_enqueue_style( 'AlaBait-styles', get_template_directory_uri() . '/style.css', array(), 0.9 );
		wp_enqueue_style( 'AlaBait-main', get_template_directory_uri() . '/assets/css/main.css', array(), 0.9 );
		wp_enqueue_style( 'AlaBait-media', get_template_directory_uri() . '/assets/css/media.css', array(), 0.9 );
		wp_enqueue_style( 'Lightbox-style', get_template_directory_uri() . '/assets/css/lightbox.min.css');

		/* AlaBait Theme scripts */
		wp_enqueue_script( 'FontAwesome', 'https://kit.fontawesome.com/6ac2b40a9b.js', array(), 5.13 );
		wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), 3.4 );
	    wp_enqueue_script('Lightbox-script', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js', array('jquery'));
		wp_enqueue_script( 'Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js', array(), 1.14 );
		wp_enqueue_script( 'Bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js', array(), 4.4 );
		wp_enqueue_script( 'MDBootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js', array(), 4.16 );
		wp_enqueue_script( 'UIKit', 'https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit.min.js', array(), 3.4 );
		wp_enqueue_script( 'UIKit-Icons', 'https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit-icons.min.js', array(), 3.4 );
		wp_enqueue_script( 'FancyBox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), 3.5 );
		wp_enqueue_script( 'ExpandingSearchBar-classie', get_template_directory_uri() . '/assets/js/classie.js', array(), 1.0 );
		wp_enqueue_script( 'ExpandingSearchBar-modernizr', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array(), 1.0 );
		wp_enqueue_script( 'ExpandingSearchBar-uisearch', get_template_directory_uri() . '/assets/js/uisearch.js', array(), 1.0 );
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

function mytheme_customize_register( $wp_customize ) {

$wp_customize->add_section(

    'data_site_section',

    array(
        'title' => 'Контактная информация',
        'capability' => 'edit_theme_options',
        'description' => "Телефоны, мессенджеры, адреса компании, социальные сети и другое..."
    )
);


$wp_customize->add_setting(

    'alabait_address',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'alabait_address_control',

    array(
        'type' => 'text',
        'label' => "Адрес компании",
        'section' => 'data_site_section',

        'settings' => 'alabait_address'
    )
);

$wp_customize->add_setting(

    'alabait_address_link',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_address_link_control',

    array(
        'type' => 'text',
        'label' => "Ссылка на карту с организацией в Яндекс",
        'section' => 'data_site_section',

        'settings' => 'alabait_address_link'
    )
);

$wp_customize->add_setting(

    'alabait_phone',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_phone_control',

    array(
        'type' => 'text',
        'label' => "Телефон/Факс",
        'section' => 'data_site_section',

        'settings' => 'alabait_phone'
    )
);

$wp_customize->add_setting(

    'alabait_mobile',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_mobile_control',

    array(
        'type' => 'text',
        'label' => "Мобильный телефон/Whatsapp",
        'section' => 'data_site_section',

        'settings' => 'alabait_mobile'
    )
);

$wp_customize->add_setting(

    'alabait_email',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_email_control',

    array(
        'type' => 'text',
        'label' => "Электронная почта",
        'section' => 'data_site_section',

        'settings' => 'alabait_email'
    )
);

$wp_customize->add_setting(

    'alabait_instagram',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_instagram_control',

    array(
        'type' => 'text',
        'label' => "Инстаграм",
        'section' => 'data_site_section',

        'settings' => 'alabait_instagram'
    )
);

$wp_customize->add_setting(

    'alabait_odnoklassniki',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_odnoklassniki_control',

    array(
        'type' => 'text',
        'label' => "Одноклассники",
        'section' => 'data_site_section',

        'settings' => 'alabait_odnoklassniki'
    )
);

$wp_customize->add_setting(

    'alabait_odnoklassniki',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_odnoklassniki_control',

    array(
        'type' => 'text',
        'label' => "Одноклассники",
        'section' => 'data_site_section',

        'settings' => 'alabait_odnoklassniki'
    )
);

$wp_customize->add_setting(

    'alabait_facebook',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_facebook_control',

    array(
        'type' => 'text',
        'label' => "Фейсбук",
        'section' => 'data_site_section',

        'settings' => 'alabait_facebook'
    )
);

$wp_customize->add_setting(

    'alabait_vkontakte',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_vkontakte_control',

    array(
        'type' => 'text',
        'label' => "ВКонтакте",
        'section' => 'data_site_section',

        'settings' => 'alabait_vkontakte'
    )
);

$wp_customize->add_setting(

    'alabait_telegram',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_telegram_control',

    array(
        'type' => 'text',
        'label' => "Телеграм",
        'section' => 'data_site_section',

        'settings' => 'alabait_telegram'
    )
);

$wp_customize->add_setting(

    'alabait_product_feedback',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_product_feedback_control',

    array(
        'type' => 'text',
        'label' => "Email для форм заказа продуктов/услуг",
        'section' => 'data_site_section',

        'settings' => 'alabait_product_feedback'
    )
);

$wp_customize->add_setting(

    'alabait_feedback_email',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'alabait_feedback_email_control',

    array(
        'type' => 'text',
        'label' => "Email для отправки форм заказа продукта/услуги",
        'section' => 'data_site_section',

        'settings' => 'alabait_feedback_email'
    )
);

}
add_action( 'customize_register', 'mytheme_customize_register' );

/*
==========================================================================
      WP pagination
==========================================================================
*/
function pagination( $max_num_pages = false, $paged = false ) {

	$big = 999999999;

  if( !$max_num_pages ){
      global $wp_query;
      $max_num_pages = $wp_query->max_num_pages;
  }

  if( !$paged ){
      $paged = max( 1, get_query_var('paged') );
  }

	$links = paginate_links(array(
		// 'base'                  => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
    'base'                      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'format'                => '?paged=%#%',
		'current'               => $paged,
		'type'                  => 'array',
		'prev_text'             => '<img src="/wp-content/themes/alabait/assets/img/partners_slide_np.png" alt="Страница назад">',
        'next_text'              => '<img src="/wp-content/themes/alabait/assets/img/partners_slide_nn.png" alt="Страница вперед">',
		'total'                 => $max_num_pages,
		'show_all'              => false,
		'end_size'              => 15,
		'mid_size'              => 15,
		'add_args'              => false,
		'add_fragment'          => '',
		'before_page_number'    => '',
		'after_page_number'     => ''
	));
 	if( is_array( $links ) ) {
	    echo '<ul class="is-cases__pagination"  style="margin-left:0;">';
	    foreach ( $links as $link ) {
	    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>";
	        else echo "<li>$link</li>";
	    }
	   	echo '</ul>';
	 }
}
?>
