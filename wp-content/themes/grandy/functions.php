<?php
//adminbar

add_filter('show_admin_bar', '__return_false');

//optionTree
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_true' );

function theme_options_parent($parent) {
    $parent = '';
    return $parent;
}
add_filter('ot_theme_options_parent_slug', 'theme_options_parent', 20);
/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
 //warning metaboxes
require( trailingslashit(get_template_directory() ) . 'functions/theme-options.php');
require( trailingslashit(get_template_directory() ) . 'functions/meta-boxes.php');


if ( ! function_exists( 'grandy_setup' ) ) :
	
	function grandy_setup() {
		
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'grandy' ),
            'mobile-menu-header' => 'Моб. меню',
		) );

		
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'grandy_setup' );

function grandy_setup() {
    include (get_template_directory().'/inc/custom-post-type-reviews.php');
}

add_action('after_switch_theme', 'grandy_reset_permalink');

function grandy_reset_permalink()  {
    flush_rewrite_rules();
}

function grandy_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'grandy' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'grandy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'grandy_widgets_init' );

//styles

function grandy_style() {
    wp_enqueue_style('icons', get_template_directory_uri() . '/css/materialdesignicons.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'grandy-style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts','grandy_style');

//scripts

function grandy_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.js', array('jquery'));
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grandy_scripts' );

//классы на меню

function special_nav_class($classes, $item) {
    $classes[] = 'header-nav';
    return $classes;
}

add_filter('nav_menu_css_class','special_nav_class', 10, 2);

// allow SVG uploads
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
  $existing_mimes['svg'] = 'image/svg+xml';
  return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
 }
 add_action('admin_head', 'fix_svg');


