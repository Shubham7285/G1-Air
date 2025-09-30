<?php
/**
 * Polaris RDS Child Theme functions and definitions
 *
 * @package polarischild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function theme_enqueue_styles() {
    // Determine whether to use minified files.
    $suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

    // Define the child theme directories.
    $child_theme_dir = get_stylesheet_directory();
    $child_theme_uri = get_stylesheet_directory_uri();

    // Set file paths.
    $css_file = "/css/child-theme{$suffix}.css";
    $js_file  = "/js/child-theme{$suffix}.js";

    // Enqueue the child theme stylesheet with file modification time as the version.
    wp_enqueue_style('rds-child-styles', $child_theme_uri . $css_file, array( 'rds-parent' ), filemtime( $child_theme_dir . $css_file ));

	// Enqueue Google Fonts
	wp_enqueue_style('rds-child-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
   
	   // Enqueue Ryno RDS Icons from CDN
	wp_enqueue_style('ryno-rds-icons', 'https://cdn.icomoon.io/198172/ryno-rds-icons/style.css?h9gb2q', array(), null);

    // Enqueue jQuery (if not already enqueued).
    wp_enqueue_script( 'jquery' );

    // Enqueue the child theme script with file modification time as the version.
    wp_enqueue_script('rds-child-scripts', $child_theme_uri . $js_file, array(), filemtime( $child_theme_dir . $js_file ));

    // Enqueue comment reply script when needed.
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'polaris-rds-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );


/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );
/**
 * enqueue rds font awesomw style for showing fontss.
 */

 $child_theme_path = get_stylesheet_directory() . '/img/font-awesome/style.css';
 $parent_theme_path = get_template_directory() . '/img/font-awesome/style.css';
 
 if (file_exists($child_theme_path)) {
	 $filepath = $child_theme_path;
	 $urlpath = get_stylesheet_directory_uri() . '/img/font-awesome/style.css';
 } elseif (file_exists($parent_theme_path)) {
	 $filepath = $parent_theme_path;
	 $urlpath = get_template_directory_uri() . '/img/font-awesome/style.css';
 } else {
	 $filepath = false;
 }
 
 if ($filepath) {
	 add_action('wp_enqueue_scripts', 'rds_font_awesome_style');
	 function rds_font_awesome_style() {
		 global $urlpath; // Make $urlpath available inside the function
		 wp_register_style('rds-font-awesome', $urlpath, false);
		 wp_enqueue_style('rds-font-awesome');
	 }
 }


 // Add custom shortcode to override parent theme shortcode

function remove_parent_theme_shortcode() {
    // Remove the existing shortcode
    remove_shortcode("custom_back_to_link");

    // Add a new custom function for the shortcode
    function custom_child_back_to_link_shortcode() {
        $archive_url = get_permalink(get_option("page_for_posts"));

        $link_html = '<a name="Back to Blog" href="' . esc_url($archive_url) . '" class="no_hover_underline d-inline-flex align-items-center back_to_blog link_text_btn">';
        $link_html .= '<i class="align-middle icon-chevron-left1 position-relative"></i>';
        $link_html .= '<span class="d-inline-block align-middle">Back to Blog</span>'; // Modified text to differentiate
        $link_html .= '</a>';

        return $link_html;
    }

    // Register the new shortcode
    add_shortcode("custom_back_to_link", "custom_child_back_to_link_shortcode");
}

// Hook to `init` to ensure the parent shortcode is removed before adding the new one
add_action("init", "remove_parent_theme_shortcode");

function rds_conditionally_dequeue_swiper() {
    if (is_page(62216)) {
        wp_dequeue_script('rds-swiper-script');
        wp_deregister_script('rds-swiper-script');
    }
}
add_action('wp_enqueue_scripts', 'rds_conditionally_dequeue_swiper', 20);

function add_console_log_footer_script() {
    ?>
    <script>
        console.log('Have a great day');
    </script>
    <?php
}
add_action('wp_footer', 'add_console_log_footer_script');