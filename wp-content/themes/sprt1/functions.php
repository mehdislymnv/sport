<?php
/**
 * sprt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sprt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sprt_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sprt_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sprt, use a find and replace
		 * to change 'sprt' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sprt', get_template_directory() . '/languages' );

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
		/* register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'sprt' ),
			)
		); */

		register_nav_menus([
			'primary' => __('Header Menu'),
			'footer' => __('Footer Menu'),
			'mobile' => __('Mobile Menu'),
		]);

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
				'sprt_custom_background_args',
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
add_action( 'after_setup_theme', 'sprt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sprt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sprt_content_width', 640 );
}
add_action( 'after_setup_theme', 'sprt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sprt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar5', 'sprt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sprt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar([
		'id'            => 'sidebar-footer',
		'name'          => esc_html__( 'Footer Sidebar', 'sprt' ),
		'description'   => esc_html__( '4 widgets holder.', 'sprt' ),
		// 'before_widget' => '<section id="%1$s" class="widget %2$s">',
		// 'after_widget'  => '</section>',
		// 'before_title'  => '<h2 class="widget-title">',
		// 'after_title'   => '</h2>',
	]);
}
add_action( 'widgets_init', 'sprt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


 /*
 
 Css
 */
function sprt_scripts() {
	wp_enqueue_style( '3dslider',
	get_template_directory_uri() . "/assets/css/3dslider.css",
	  array(), _S_VERSION );
	

	wp_enqueue_style( 'animate',
	 get_template_directory_uri() . "/assets/css/animate.css",
	   array(), _S_VERSION );
 


	wp_enqueue_style( 'bootstrap-theme',
	  get_template_directory_uri() . "/assets/css/bootstrap-theme.css",
		array(), _S_VERSION );
  
	wp_enqueue_style( 'bootstrap-theme.min',
		get_template_directory_uri() . "/assets/css/bootstrap-theme.min.css",
		 array(), _S_VERSION );
   
  
	wp_enqueue_style( 'bootstap',
	 get_template_directory_uri() . "/assets/css/bootstrap.min.css",
	   array(), _S_VERSION );
	

	wp_enqueue_style( 'bootstap',
	  get_template_directory_uri() . "/assets/css/bootstrap.min.css",
		array(), _S_VERSION );
  
 
	wp_enqueue_style( 
		'custom', 
		get_template_directory_uri() . "/assets/css/custom.css", 
		[], _S_VERSION 

	);


	wp_enqueue_style( 
		'flaticon', 
		get_template_directory_uri() . "/assets/css/flaticon.css", 
		[], _S_VERSION 

	);

	wp_enqueue_style( 
		'font-awesome', 
		get_template_directory_uri() . "/assets/css/font-awesome.css", 
		[], _S_VERSION 

	);

	wp_enqueue_style( 
		'font-awesome.min', 
		get_template_directory_uri() . "/assets/css/font-awesome.min.css", 
		[], _S_VERSION 

	);

	wp_enqueue_style( 
		'owl.carousel', 
		get_template_directory_uri() . "/assets/css/owl.carousel.css", 
		[], _S_VERSION 

	);

	wp_enqueue_style( 
		'prettyPhoto', 
		get_template_directory_uri() . "/assets/css/prettyPhoto.css", 
		[], _S_VERSION 

	);

	/*  wp_enqueue_style( 
		'versions', 
		get_template_directory_uri() . "/assets/css/versions.css", 
		[], _S_VERSION 

	); */
	 
	wp_enqueue_style( 
		'custom', 
		get_template_directory_uri() . "/assets/css/custom.css", 
		[], _S_VERSION 

	);
	wp_enqueue_style( 
		'responsive', 
		get_template_directory_uri() . "/assets/css/responsive.css", 
		[], _S_VERSION 

	); 

	wp_enqueue_style( 'sprt',get_template_directory_uri(), array(), _S_VERSION );
	





	/* 
	
	js
	*/

	wp_enqueue_script( '3dslider',
	get_template_directory_uri() . "/assets/js/3dslider.js",
	  array(), _S_VERSION );
	

	wp_enqueue_script( 'all',
	  get_template_directory_uri() . "/assets/js/all.js",
		array(), _S_VERSION );  

	wp_enqueue_script( 'animate',
	 get_template_directory_uri() . "/assets/js/animate.js",
	   array(), _S_VERSION );


	wp_enqueue_script( 
		'custom', 
		get_template_directory_uri() . "/assets/js/custom.js", 
		[], _S_VERSION 

	);
 


	
  
	wp_enqueue_script( 'hoverdir',
		get_template_directory_uri() . "/assets/js/hoverdir.js",
		 array(), _S_VERSION );
   
  
	wp_enqueue_script( 'jquery.prettyPhoto',
	 get_template_directory_uri() . "/assets/js/jquery.prettyPhoto.js",
	   array(), _S_VERSION );
	

	wp_enqueue_script( 'jquery.vide',
	  get_template_directory_uri() . "/assets/js/jquery.vide.js",
		array(), _S_VERSION );
  
 
	


	wp_enqueue_script( 
		'map', 
		get_template_directory_uri() . "/assets/js/map.js", 
		[], _S_VERSION 

	);

	wp_enqueue_script( 
		'modernizer', 
		get_template_directory_uri() . "/assets/js/modernizer.js", 
		[], _S_VERSION 

	);

	wp_enqueue_script( 
		'owl.carousel', 
		get_template_directory_uri() . "/assets/js/owl.carousel.js", 
		[], _S_VERSION 

	);

	wp_enqueue_script( 
		'portfolio', 
		get_template_directory_uri() . "/assets/js/portfolio.js", 
		[], _S_VERSION 

	);

	wp_enqueue_script( 
		'retina', 
		get_template_directory_uri() . "/assets/js/retina.js", 
		[], _S_VERSION 

	);

	  wp_enqueue_script( 
		'scroll', 
		get_template_directory_uri() . "/assets/js/scroll.js", 
		[], _S_VERSION 

	);
	
	wp_enqueue_script( 
		'custom', 
		get_template_directory_uri() . "/assets/js/custom.js", 
		[], _S_VERSION 

	);
	/* wp_enqueue_script( 
		'responsive', 
		get_template_directory_uri() . "/assets/js/responsive.js", 
		[], _S_VERSION 

	); */

	wp_enqueue_script( 'sprt',get_template_directory_uri(), array(), _S_VERSION );
	



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sprt_scripts' );


/**
 * Implement the Custom Header feature.
 */
# include get_template_directory() . '/inc/custom-header.php';

## Navigations
require get_template_directory() . '/inc/navigations/primary-nav.php';

## CPTs
require get_template_directory() . '/inc/cpt/cpt-news.php';

## Widget
require get_template_directory() . '/inc/widgets/latest-posts-widget.php';
require get_template_directory() . '/inc/widgets/footer-info-page-widget.php';
require get_template_directory() . '/inc/widgets/footer-recent-posts-widget.php';


# Taxonomies
require get_template_directory() . '/inc/taxonomies/news-taxonomy.php';