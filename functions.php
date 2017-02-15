<?php
/**
 * Telespor functions for theme setup
 */

$current_version = 1.13;

//Theme setup
function telespor_setup() {

    //Title title
    add_theme_support( 'title-tag' );

    //HTML5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

    //Nav menus
    register_nav_menus( array(
        'primary' => __( 'Header Menu', 'telespor' ),
        'footernav'  => __( 'Footer Menu', 'telespor' ),
    ) );

    //Featured image
    add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );
    add_image_size( 'small-thumbnail', 380, 220, array( 'center', 'center' ) ); // Hard crop left top

}
add_action( 'after_setup_theme', 'telespor_setup' );

//SCRIPTS
function telespor_scripts() {

    wp_enqueue_style( 'telespor-style', get_stylesheet_uri(), array(), $GLOBALS['current_version']);

    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/min/script-min.js', array('jquery'), $GLOBALS['current_version'], true);

}
add_action( 'wp_enqueue_scripts', 'telespor_scripts' );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '[...]<p><a class="read-more" href="%1$s">%2$s</a></p>',
        get_permalink( get_the_ID() ),
        __( 'Les mer.', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
	// Define the style_formats array
	$style_formats = array(
		// Each array child is a format with it's own settings
		array(
			'title' => 'Telefon Nummer',
			'inline' => 'span',
			'classes' => 'phone-number',
			'wrapper' => false,
		),
		array(
			'title' => '⇠.rtl',
			'block' => 'inline',
			'classes' => 'rtl',
			'wrapper' => true,
		),
		array(
			'title' => '.ltr⇢',
			'block' => 'inline',
			'classes' => 'ltr',
			'wrapper' => true,
		),
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );


/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'tiny_mce.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

?>
