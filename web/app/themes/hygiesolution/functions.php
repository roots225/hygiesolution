<?php
require_once "post-functions.php";

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', 'Menu principale' );
}

function register_custom_posts () {
  $partners_labels = array(
    'name'               => 'Partenaires',
    'singular_name'      => 'Partenaire',
    'menu_name'          => 'Partenaires',
    'add_new'=> 'Ajouter un Partenaire',
    'add_new_item'=>'Ajouter un nouveau Partenaire',
    'edit_item' => 'Editer un Partenaire',
    'new_item'=>'Nouveau Partenaire',
    'view_item'=>'Voir le Partenaire',
    'search_items'=>'Rechercher un Partenaire',
    'not_found'=>'Aucun Partenaire',
    'not_found_in_trash'=>'Aucun Partenaire dans la corbeille',
  );

  $partners_args = array(
    'labels'             => $partners_labels,
    'public'             => true,
    'show_in_rest'       => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'supports'           => array( 'excerpt', 'thumbnail', 'revisions', 'title', 'post-thumbnails'),
    'menu_icon'          => 'dashicons-admin-users',
  );

  register_post_type('partners', $partners_args);
}
add_action('init', 'register_custom_posts');

function register_custom_assets () {
	$version = (new DateTime())->getTimestamp();
  wp_register_style('appstyle', get_template_directory_uri() . '/assets/dist/css/app.css', [], $version, false);
  wp_enqueue_style('appstyle');

  wp_register_script('jquery', get_template_directory_uri(). '/assets/dist/js/jquery.min.js', [], $version, true);
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap', get_template_directory_uri(). '/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js', ['jquery'], $version, true);
  wp_enqueue_script('bootstrap');
  wp_register_script('appscript', get_template_directory_uri() . '/assets/dist/js/app.js', [], $version, true);
  wp_enqueue_script('appscript');
}
add_action('wp_enqueue_scripts', 'register_custom_assets');

add_action( 'after_setup_theme', 'custom_setup' );
if ( ! function_exists( 'custom_setup' ) ) :
	function custom_setup() {

		// load_theme_textdomain( 'relaistv', get_template_directory() . '/languages' );

		// This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style();

		// Load regular editor styles into the new block-based editor.
		add_theme_support( 'editor-styles' );

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Blue', 'relaistv' ),
					'slug'  => 'blue',
					'color' => '#1982d1',
				),
				array(
					'name'  => __( 'Black', 'relaistv' ),
					'slug'  => 'black',
					'color' => '#000',
				),
				array(
					'name'  => __( 'Dark Gray', 'relaistv' ),
					'slug'  => 'dark-gray',
					'color' => '#373737',
				),
				array(
					'name'  => __( 'Medium Gray', 'relaistv' ),
					'slug'  => 'medium-gray',
					'color' => '#666',
				),
				array(
					'name'  => __( 'Light Gray', 'relaistv' ),
					'slug'  => 'light-gray',
					'color' => '#e2e2e2',
				),
				array(
					'name'  => __( 'White', 'relaistv' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);

		// Add default posts and comments RSS feed links to <head>.
		add_theme_support( 'automatic-feed-links' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'relaistv' ) );

		// Add support for a variety of post formats.
		add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

		// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images.
		add_theme_support( 'post-thumbnails' );

		// Add support for custom headers.
		$custom_header_support = array(
			// The default header text color.
			'default-text-color'     => '000',
			// The height and width of our custom header.
			/**
			 * Filter the Twenty Eleven default header image width.
			 *
			 * @since Twenty Eleven 1.0
			 *
			 * @param int The default header image width in pixels. Default 1000.
			 */
			'width'                  => apply_filters( 'relaistv_header_image_width', 1000 ),
			/**
			 * Filter the Twenty Eleven default header image height.
			 *
			 * @since Twenty Eleven 1.0
			 *
			 * @param int The default header image height in pixels. Default 288.
			 */
			'height'                 => apply_filters( 'relaistv_header_image_height', 288 ),
			// Support flexible heights.
			'flex-height'            => true,
			// Random image rotation by default.
			'random-default'         => true,
		);

		add_theme_support( 'custom-header', $custom_header_support );

		if ( ! function_exists( 'get_custom_header' ) ) {
			// This is all for compatibility with versions of WordPress prior to 3.4.
			define( 'HEADER_TEXTCOLOR', $custom_header_support['default-text-color'] );
			define( 'HEADER_IMAGE', '' );
			define( 'HEADER_IMAGE_WIDTH', $custom_header_support['width'] );
			define( 'HEADER_IMAGE_HEIGHT', $custom_header_support['height'] );
			add_custom_image_header( $custom_header_support['wp-head-callback'], $custom_header_support['admin-head-callback'], $custom_header_support['admin-preview-callback'] );
			add_custom_background();
		}

		/*
		 * We'll be using post thumbnails for custom header images on posts and pages.
		 * We want them to be the size of the header image that we just defined.
		 * Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
		 */
		set_post_thumbnail_size( $custom_header_support['width'], $custom_header_support['height'], true );

		/*
		 * Add Twenty Eleven's custom image sizes.
		 * Used for large feature (header) images.
		 */
		add_image_size( 'large-feature', $custom_header_support['width'], $custom_header_support['height'], true );
		// Used for featured posts if a large-feature doesn't exist.
		add_image_size( 'small-feature', 500, 300 );


		// Indicate widget sidebars can use selective refresh in the Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;