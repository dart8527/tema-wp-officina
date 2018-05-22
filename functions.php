<?php
require_once('template-parts/class_walker_category_template.php');



if ( ! function_exists( 'theme_setup' ) ) :

function theme_setup(){
  // attiva la voce menu in admin
  add_theme_support( "menus" );
  // attiva la feature image nei post e nella pagine
  add_theme_support('post-thumbnails');

add_image_size('officina_blog',419,600,true);
    /*
     * attiva la posizione dei menu nell'overlay
     */
    register_nav_menus( array(
      'primary' => __('primary', 'officina' ),
        'col-1'   => __( 'colonna uno', 'officina' ),
        'col-2' => __('colonna due', 'officina' ),
        'col-3' => __('colonna tre', 'officina' ),
        'col-4' => __('colonna quattro', 'officina' ),
        'social' => __('social', 'officina' ),

    ) );

 }

endif; // officina_theme_setup
add_action('after_setup_theme','theme_setup');




if ( ! function_exists( 'officina_sidebar' ) ) :
  function officina_sidebar(){
    register_sidebar(array(
      'name' => esc_html__('Primary','officina'),
      'id' => 'barra-1',
      'description' => 'Main sidebar',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>'
    ));
  }
endif;//officina_sdebars
add_action('widgets_init','officina_sidebar');






// custom excerpt length
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { width:173px!important;
    background-size:cover!important;
    background-image: url('.get_bloginfo('template_directory').'/asset/logo/logo_small2.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// Insert custom content after each post
/*function add_post_content($content) {
	if(!is_feed() && !is_home()) {
		$content .= '<p>This article is copyright &copy; '.date('Y').'&nbsp;'.bloginfo('name').'</p>';
	}
	return $content;
}
add_filter('the_content', 'add_post_content');*/


/* permalink personalizzato
richiamato dalla funzione echo get_permalink_by_name('my-post-name');
_____________________*/
function get_permalink_by_name($post_name)
{
     global $post;
     global $wpdb;
     $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$post_name."'");
     return get_permalink($id);
}


// include javascript files
function add_styles(){
  // Add styles
  wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.css', array(), false);
  //wp_enqueue_style('fontawesome', get_template_directory_uri(). 'font-awesome/css/font-awesome.min.css', array(), false);
  wp_enqueue_style('custom-font', get_template_directory_uri(). '/css/custom-font.css', array(), false);
  wp_enqueue_style('animate', get_template_directory_uri(). '/css/animate.css', array(), false);
  wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.css', array(), false);
  wp_enqueue_style('slick-slider', get_template_directory_uri(). '/slick/slick.css', array(), false);
  wp_enqueue_style('slick-slider-theme', get_template_directory_uri(). '/slick/slick-theme.css', array(), false);
  wp_enqueue_style('style', get_template_directory_uri(). '/style.css', array(), false);
  wp_enqueue_style('responsive', get_template_directory_uri(). '/css/responsive.css', array(), false);
    wp_enqueue_style('fancybox', get_template_directory_uri(). '/css/jquery.fancybox.min.css', array(), false);
  wp_enqueue_style('oswald-font','https://fonts.googleapis.com/css?family=Oswald', array(), false);
}
add_action('wp_enqueue_scripts','add_styles'); //hook: wp_enqueue_scripts


function add_scripts(){
?>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/scrollreveal.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/slick/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/responsiveslides.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/jquery.fancybox.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<?php
}
add_action('wp_footer','add_scripts');







 ?>
