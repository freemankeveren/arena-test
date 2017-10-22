<?php
/**
 * AO Base functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AO_Base
 */

if ( ! function_exists( 'aobase_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aobase_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on AO Base, use a find and replace
	 * to change 'aobase' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'aobase', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'aobase' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'aobase_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'aobase_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aobase_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aobase_content_width', 640 );
}
add_action( 'after_setup_theme', 'aobase_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aobase_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'aobase' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'aobase' ),
		'before_widget' => '<div id="%1$s" class="panel panel-default widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="panel-heading"><h3 class="panel-title widget-title">',
		'after_title'   => '</h3></div><div class="panel-body">',
	) );
}
add_action( 'widgets_init', 'aobase_widgets_init' );

// SIDEBAR BOOTSTRAP PANEL - if no title then add widget content wrapper to before widget
add_filter( 'dynamic_sidebar_params', 'check_sidebar_params' );
function check_sidebar_params( $params ) {
    global $wp_registered_widgets;

    $settings_getter = $wp_registered_widgets[ $params[0]['widget_id'] ]['callback'][0];
    $settings = $settings_getter->get_settings();
    $settings = $settings[ $params[1]['number'] ];

    if ( $params[0][ 'after_widget' ] == '</div></div>' && isset( $settings[ 'title' ] ) && empty( $settings[ 'title' ] ) )
        $params[0][ 'before_widget' ] .= '<div class="panel-body">';

    return $params;
}

/**
 * Enqueue scripts and styles.
 */
function aobase_scripts() {

 // register styles
	wp_register_style( 'aobase-bootstrap', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css' );
	wp_register_style( 'aobase-style', get_stylesheet_uri() );
	wp_register_style( 'aobase-font-awesome', get_template_directory_uri() . '/inc/css/font-awesome.min.css', false, '4.7.0' );
	wp_register_style( 'gravity-styles', get_template_directory_uri() . '/inc/css/gravityforms.css', false, '1.0' );


 // enqueue styles
	wp_enqueue_style( 'aobase-bootstrap' );
	wp_enqueue_style( 'gravity-styles' );
	wp_enqueue_style( 'aobase-style' );


	wp_enqueue_style( 'aobase-font-awesome' );


 // register js
	wp_register_script('aobase-bootstrapjs', get_template_directory_uri().'/inc/bootstrap/js/bootstrap.min.js', array('jquery') , '3.3.6', true );
	wp_register_script( 'aobase-viewport', get_template_directory_uri() . '/inc/js/jquery.viewportchecker.min.js', array(), '1.8.7', true );
	wp_register_script( 'aobase-mainjs', get_template_directory_uri() . '/inc/js/main.js', array(), '1.0', true );
	wp_register_script( 'aobase-skip-link-focus-fix', get_template_directory_uri() . '/inc/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_register_script( 'masonry', get_template_directory_uri() . '/inc/js/masonry.pkgd.min.js', array(), '4.2.0', true );
	wp_register_script( 'imagesloaded', get_template_directory_uri() . '/inc/js/imagesloaded.pkgd.min.js', array(), '20151215', true );

	// enqueue js
	wp_enqueue_script( 'aobase-bootstrapjs' );
	wp_enqueue_script( 'aobase-viewport' );
	wp_enqueue_script( 'aobase-mainjs' );
	wp_enqueue_script( 'aobase-skip-link-focus-fix' );
	wp_enqueue_script( 'masonry' );
	wp_enqueue_script( 'imagesloaded' );



}
add_action( 'wp_enqueue_scripts', 'aobase_scripts');


/**
 * Default requires from _s
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');

// Admin Functions Not on Front End
require get_template_directory() . '/inc/admin-functions.php';

//////////////////////////////////////////////////
/// CUSTOM FUNCTIONS Written/Gathered by Chase Cee
//////////////////////////////////////////////////

/// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/// TYPEKIT EMBED
function theme_typekit() {
		wp_register_script( 'theme_typekit', '//use.typekit.net/veh7cit.js', array(), '', false );
		wp_enqueue_script( 'theme_typekit');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );
function theme_typekit_inline() {
	if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php } }
add_action( 'wp_head', 'theme_typekit_inline' );

/// ACF THEME OPTIONS
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
	 'page_title' 	=> 'Theme General Options',
	 'menu_title'	=> 'Theme Options',
	 'menu_slug' 	=> 'theme-general-options',
	 'capability'	=> 'edit_posts',
	 'redirect'		=> false
 ));
 acf_add_options_sub_page(array(
	 'page_title' 	=> 'Custom Code/Scripts',
	 'menu_title'	=> 'Custom Code',
	 'parent_slug'	=> 'theme-general-options',
 ));
}

/// CUSTOM GRAVITY FORM BUTTON MARKUP
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
        GFCommon::log_debug( __METHOD__ . '(): form => ' . print_r( $form, true ) );
        return "<button class='btn btn-primary gform_button' id='gform_submit_button_{$form['id']}'><span>{$form['button']['text']}</span></button>";
}

/// LOGIN/PW PROTECTED ITEMS
add_action("login_head", "aobase_login_head");
add_action("password_protected_login_head", "aobase_login_head" );
function aobase_login_head() {
	if( function_exists('get_field')) { $logo = get_field('logo','option'); }
 if ($logo){$logo_url=$logo[url];}
 else{$logo_url= get_bloginfo('template_url')."/inc/img/logo.png";}
 echo "
 <style>
 body.login #login h1 a {
	 background: url(".$logo_url.") no-repeat scroll center center transparent;
			 height: 90px;
			 width: 100%;
			 background-size: contain;
 }
 </style>
 ";
}
function loginpage_custom_link() {
	return get_home_url();
}
add_filter('login_headerurl','loginpage_custom_link');


// Bootstrap pagination function

function wp_bs_pagination($pages = '', $range = 4)

{

     $showitems = ($range * 2) + 1;



     global $paged;

     if(empty($paged)) $paged = 1;



     if($pages == '')

     {

         global $wp_query;

		 $pages = $wp_query->max_num_pages;

         if(!$pages)

         {

             $pages = 1;

         }

     }



     if(1 != $pages)

     {

        echo '<div class="text-center">';
        echo '<nav><ul class="pagination"><li class="disabled hidden-xs"><span><span aria-hidden="true">Page '.$paged.' of '.$pages.'</span></span></li>';

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";

         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Previous</span></a></li>";



         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>

    </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";

             }

         }



         if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Next </span>&rsaquo;</a></li>";

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";

         echo "</ul></nav>";
         echo "</div>";
     }

}
