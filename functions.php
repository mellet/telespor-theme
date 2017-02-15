<?php
/**
 * Telespor functions for theme setup
 */

$current_version = 1.20;

//define( 'ACF_LITE' , true );

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


/* Register AFC fields */
function my_acf_add_local_field_groups() {

    $home_page = get_page_by_title('Hjem');
    $contact_page = get_page_by_title('Kontakt Oss');
    $product_page = get_page_by_title('Produkt');

    /* Make sure required pages are set up */
    if (!$home_page || !$contact_page || !$product_page){
        return;
    }

    if(function_exists("register_field_group"))
    {
        /* Front page fields */
    	register_field_group(array (
    		'id' => 'acf_forside',
    		'title' => 'Forside',
    		'fields' => array (
    			array (
    				'key' => 'field_58a4319551ca8',
    				'label' => 'Velkomst tittel - fet',
    				'name' => 'welcomeTextFat',
    				'type' => 'text',
    				'instructions' => 'Velkomst tekst på forside. Fet del.',
    				'default_value' => 'ELEKTRONISK',
    				'placeholder' => 'ELEKTRONISK',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_58a431fc94bc2',
    				'label' => 'Velkomst tittel - tynn',
    				'name' => 'welcomeTextSkinny',
    				'type' => 'text',
    				'instructions' => 'Velkomst tekst på forside. Tynn del.',
    				'default_value' => 'OVERVÅKING AV HUSDYR',
    				'placeholder' => 'OVERVÅKING AV HUSDYR',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_58a4327a588e3',
    				'label' => 'Egenskaper - Tittel',
    				'name' => 'feature_title',
    				'type' => 'text',
    				'instructions' => 'Egenskaper tittel',
    				'default_value' => 'Radiobjellas egenskaper',
    				'placeholder' => 'Radiobjellas egenskaper',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_58a4328de7d0b',
    				'label' => 'GPS Lokalisering beskrivelse',
    				'name' => 'feature_one',
    				'type' => 'wysiwyg',
    				'default_value' => '<h3>GPS Lokalisering</h3><p>Vi lokaliserer dine dyr og du kan selv velge hvilket koordinatsystem du vil se dyrene dine i. Vi støtter Lat/Lon, UTM, Sweref-99 og ISN93/Lambert 1993.</p>',
    				'toolbar' => 'basic',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a4329f193d2',
    				'label' => 'Bevegelsessensor beskrivelse',
    				'name' => 'feature_two',
    				'type' => 'wysiwyg',
    				'default_value' => '<h3>Bevegelsessensor</h3><p>Velg hvor ofte enhetene sender sin posisjon. Alt fra hvert 5. minutt til en gang i løpet av døgnet. Alt etter ditt behov. (Batteriet vil brukes opp raskere ved oftere intervaller.)</p>',
    				'toolbar' => 'basic',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a432af82834',
    				'label' => 'Toveis kommunikasjon beskrivelse',
    				'name' => 'feature_three',
    				'type' => 'wysiwyg',
    				'default_value' => '<h3>Toveis kommunikasjon</h3><p>Hver gang radiobjella sender sin posisjon henter den de nyeste innstilligene du har satt. Du kan dermed fleksibelt endre hvor ofte radiobjella skal rapportere inn i løpet av sesongen.</p>',
    				'toolbar' => 'basic',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a432ae82833',
    				'label' => 'SMS Varsling beskrivelse',
    				'name' => 'feature_four',
    				'type' => 'wysiwyg',
    				'default_value' => '<h3>SMS Varsling</h3><p>I brukerportalen kan du velge om du vil bli varslet via SMS om en alarm går på radiobjella.</p>',
    				'toolbar' => 'basic',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a432ad82832',
    				'label' => 'Klar for vær å vind beskrivelse',
    				'name' => 'feature_five',
    				'type' => 'wysiwyg',
    				'default_value' => '<h3>Klar for vær å vind</h3><div class="single-feature-description"><p>Våre enheter tåler det skandinaviske klima og er vanntett.</p></div>',
    				'toolbar' => 'basic',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a432ce75585',
    				'label' => 'Gratis Support beskrivelse',
    				'name' => 'feature_six',
    				'type' => 'wysiwyg',
    				'default_value' => '<h3>Gratis Support</h3><p>Alle våres kunder får gratis support og kan ringe i våre åpningtider dersom det er noe man lurer på eller trenger hjelp med.</p>',
    				'toolbar' => 'basic',
    				'media_upload' => 'no',
    			),
    		),
    		'location' => array (
    			array (
    				array (
    					'param' => 'page',
    					'operator' => '==',
    					'value' => $home_page->ID,
    					'order_no' => 0,
    					'group_no' => 0,
    				),
    			),
    		),
    		'options' => array (
    			'position' => 'normal',
    			'layout' => 'no_box',
    			'hide_on_screen' => array (
    				0 => 'the_content',
    			),
    		),
    		'menu_order' => 0,
    	));

        /* Contact page */
        register_field_group(array (
    		'id' => 'acf_kontakt',
    		'title' => 'Kontakt',
    		'fields' => array (
    			array (
    				'key' => 'field_58a438d62fb34',
    				'label' => 'Support Åpningstider',
    				'name' => 'support_open_time',
    				'type' => 'text',
    				'instructions' => 'Åpningstider',
    				'default_value' => 'Åpent mandag - fredag, 08.00 - 16.00',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'none',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_58a439b09308e',
    				'label' => 'Telefon nummer',
    				'name' => 'contact_number',
    				'type' => 'text',
    				'default_value' => '90 47 46 00',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'none',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_58a43a288d381',
    				'label' => 'Addresse',
    				'name' => 'contact_address',
    				'type' => 'wysiwyg',
    				'default_value' => 'Sykehusveien 23<br />
    	Postboks 6427<br />
    	9294 Tromsø',
    				'toolbar' => 'full',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a43af688a0e',
    				'label' => 'Kontakt form',
    				'name' => 'contact_form',
    				'type' => 'wysiwyg',
    				'instructions' => 'Legg til shortcode for kontakt skjema som brukes',
    				'default_value' => '[contact-form-7 id="364" title="Kontakt"]',
    				'toolbar' => 'full',
    				'media_upload' => 'no',
    			),
    		),
    		'location' => array (
    			array (
    				array (
    					'param' => 'page',
    					'operator' => '==',
    					'value' => $contact_page->ID,
    					'order_no' => 0,
    					'group_no' => 0,
    				),
    			),
    		),
    		'options' => array (
    			'position' => 'normal',
    			'layout' => 'no_box',
    			'hide_on_screen' => array (
    				0 => 'the_content',
    			),
    		),
    		'menu_order' => 0,
    	));

        /* Product page */
        register_field_group(array (
    		'id' => 'acf_produkt',
    		'title' => 'Produkt',
    		'fields' => array (
    			array (
    				'key' => 'field_58a43ef113148',
    				'label' => 'Produkt Bilde',
    				'name' => 'product_image',
    				'type' => 'image',
    				'save_format' => 'object',
    				'preview_size' => 'medium',
    				'library' => 'all',
    			),
    			array (
    				'key' => 'field_58a43f4418fb2',
    				'label' => 'GPS Sporing',
    				'name' => 'info_gps',
    				'type' => 'wysiwyg',
    				'default_value' => '<h4>GPS Sporing</h4>
    	<p>Radiobjella sender sin posisjon slik at du kan se hvor dyret ditt er og hvor det har vært. Du velger selv hvor ofte du vil at posisjonen skal oppdateres, fra hvert 5. min og oppover.</p>',
    				'toolbar' => 'full',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a43fe4b85fa',
    				'label' => 'Toveis kommunikasjon',
    				'name' => 'info_communication',
    				'type' => 'wysiwyg',
    				'default_value' => '<h4>Toveis kommunikasjon</h4>
    	<p>Du kan når som helst endre på hvor ofte radiobjella skal send sin posisjon eller hvor sensitiv alarmene skal være. Hver gang radiobjella sender sin posisjon vil den hente de oppdaterte innstillingene du har valgt.</p>',
    				'toolbar' => 'full',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a4406261222',
    				'label' => 'SMS Varsling',
    				'name' => 'info_sms',
    				'type' => 'wysiwyg',
    				'default_value' => '<h4>SMS Varsling</h4>
    	<p>Velg og bli varslet via SMS dersom det skjer noe med radiobjella. Velg selv om du vil bli varslet om lavt batteri, ingen bevegelse eller at dyret er utenfor dekning.</p>',
    				'toolbar' => 'full',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a4408161223',
    				'label' => 'Vanntett',
    				'name' => 'info_water',
    				'type' => 'wysiwyg',
    				'default_value' => '<h4>Vanntett</h4>
    	<p>Radiobjella er vanntett og tåler all slags vær eller om dyret ditt bestemmer seg for å ta seg en svømmetur.</p>',
    				'toolbar' => 'full',
    				'media_upload' => 'no',
    			),
    			array (
    				'key' => 'field_58a43ea483e26',
    				'label' => 'Produkt Beskrivelse',
    				'name' => 'product_description',
    				'type' => 'wysiwyg',
    				'instructions' => 'Diverse informasjon om produktet',
    				'default_value' => '<h2>Bevegelsessensor</h2>

    	<p>Hver enhet har innbygd bevegelsessensor som utløses dersom noe uventet skulle skje.</p>
    	<p>Radiobjella er utstyrt med 3 alarmer:</p>
    	<p class="alert-types">
    	<span class="alert-type"><i class="fa fa-plus" aria-hidden="true"></i><span>Dyret har ikke beveget seg de siste 3 timene.</span></span>
    	<span class="alert-type"><i class="fa fa-plus" aria-hidden="true"></i><span>Dyret har vært på samme posisjon i en lengre periode.</span></span>
    	<span class="alert-type"><i class="fa fa-plus" aria-hidden="true"></i><span>Radiobjella har ikke klart å sende sin posisjon de siste 2 rapportene.</span></span></p>

    	<p>Følsomheten på disse kan man justere dersom et dyr er naturlig mindre aktiv.<br />
    	Du velger selv om du vil bli varslet via e-post eller SMS<sup>*</sup> dersom en alarm blir utløst.</p>
    	<p class="astrix-notice">* Ved SMS medfølger ekstra gebyrer.</p>',
    				'toolbar' => 'full',
    				'media_upload' => 'no',
    			),
    		),
    		'location' => array (
    			array (
    				array (
    					'param' => 'page',
    					'operator' => '==',
    					'value' => $product_page->ID,
    					'order_no' => 0,
    					'group_no' => 0,
    				),
    			),
    		),
    		'options' => array (
    			'position' => 'normal',
    			'layout' => 'no_box',
    			'hide_on_screen' => array (
    				0 => 'the_content',
    			),
    		),
    		'menu_order' => 0,
    	));

    }


}
add_action('init', 'my_acf_add_local_field_groups');

?>
