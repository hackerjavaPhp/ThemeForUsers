<?PHP
function mytheme_scripts() 
{
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    /*
    wp_enqueue_style( 'bootsrap-css', get_stylesheet_uri() . "css/bootstrap.min.css" );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
    */
    
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

//Произвольное меню
if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'custom-menu'=>__('Custom menu'),
		)
	);
}

function custom_menu(){
	echo '<ul>';
	wp_list_pages('title_li=&');
	echo '</ul>';
}


function wptuts_setup() {

	load_theme_textdomain('wptuts', get_template_directory() . '/lang');

	add_theme_support('title-tag');

	add_theme_support('custom-logo', array(
		'height' => 31, 
		'width' => 134, 
		'flex-height' => true
	));

	register_nav_menu('primary', 'Primary menu');
}

add_action('after_setup_theme', 'wptuts_setup');


add_theme_support('post-thumbnails');