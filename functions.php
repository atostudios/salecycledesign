<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu')
			)
		);

}

function code_mirror_css(){
if(is_page('linkwizard')){
	wp_enqueue_style('codemirrorcss', get_template_directory_uri() . '/js/cm/lib/codemirror.css');
	}
}
add_action('wp_enqueue_scripts', 'code_mirror_css');

add_action( 'init', 'register_theme_menus' );

function wpa_theme_styles(){

	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	


}

add_action('wp_enqueue_scripts', 'wpa_theme_styles');

function wpa_theme_js(){

	 wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), '', true );


} 

add_action('wp_enqueue_scripts', 'wpa_theme_js');

function sc_clipboard() {
	if(is_page('Placeholders')){
		wp_enqueue_script('zeroclipboard', get_template_directory_uri() . '/js/ZeroClipboard.js','jquery', true );
		wp_enqueue_script('clippyinit', get_template_directory_uri() . '/js/clippy_init.js', array('jquery', 'zeroclipboard'), true );

	}
}

add_action('wp_enqueue_scripts', 'sc_clipboard');


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');





function code_mirror_js(){
if(is_page('linkwizard')){
	wp_enqueue_script('zeroclipboard', get_template_directory_uri() . '/js/ZeroClipboard.js','jquery', true );
	wp_enqueue_script('codemirror', get_template_directory_uri() . '/js/cm/lib/codemirror.js');
	wp_enqueue_script('css', get_template_directory_uri() . '/js/cm/mode/css/css.js', '', true );
	wp_enqueue_script('javascript', get_template_directory_uri() . '/js/cm/mode/javascript/javascript.js', '', true );
	wp_enqueue_script('xml', get_template_directory_uri() . '/js/cm/mode/xml/xml.js', '', true );
	wp_enqueue_script('htmlmixed', get_template_directory_uri() . '/js/cm/mode/htmlmixed/htmlmixed.js', '', true );
	wp_enqueue_script('cminit', get_template_directory_uri() . '/js/cm_init.js', array('jquery'), null, true );
	wp_enqueue_script('linkwizard', get_template_directory_uri() . '/js/linkwizard.js', array('jquery'), null, true );
}
}

add_action('wp_enqueue_scripts', 'code_mirror_js');



function searchfilter($query) {
	if ($query->is_search && !is_admin() ){
		 $query->set('post_type',array('tutorial', 'osr', 'emr'));

	}
return $query;
}

add_filter('pre_get_posts', 'searchfilter');

function highlight_js(){
	
	wp_enqueue_script('highlightjs', get_template_directory_uri() . '/js/highlight.pack.js',array('jquery'), true);
	wp_enqueue_script('highlightinit', get_template_directory_uri() . '/js/highlight_init.js',array('jquery'), true);

	}

add_action('wp_enqueue_scripts', 'highlight_js');

function highlight_css(){

	wp_enqueue_style('highlightcss', get_template_directory_uri() . '/monokai_sublime.css');

}

add_action('wp_enqueue_scripts', 'highlight_css');


function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "To view this protected post, enter the password below:" ) . '
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

?>




