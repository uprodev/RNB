<?php 

// show_admin_bar( false );

add_action('wp_enqueue_scripts', 'load_style_script');
function load_style_script(){
	wp_enqueue_style('my-styles', get_template_directory_uri() . '/assets/css/styles.css');
	wp_enqueue_style('my-style-main', get_template_directory_uri() . '/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('my-swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), false, true);
	wp_enqueue_script('my-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), false, true);
	wp_enqueue_script('my-main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
	wp_enqueue_script('my-add', get_template_directory_uri() . '/assets/js/add.js', array(), false, true);
}


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header' => __('Header menu', 'RNB'),
		'footer' => __('Footer menu', 'RNB')
	) );
});


add_theme_support( 'title-tag' );
add_theme_support('html5');
add_theme_support( 'post-thumbnails' ); 


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main settings',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


add_filter('wpcf7_autop_or_not', '__return_false');


function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDiyT05YehIdz2LrV-QOeRa5M18WfKtlnY');
}
add_action('acf/init', 'my_acf_init');


add_filter('tiny_mce_before_init', 'override_mce_options');
function override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}


function custom_language_switcher(){
	$languages = icl_get_languages('skip_missing=0&orderby=id&order=desc');
	if(!empty($languages)){

		foreach($languages as $index => $language){
			if($language['active'] === '1') echo '<button type="button" class="lang-current">' . $language['native_name'] . '</button>';
		}

		echo '<ul>';

		foreach($languages as $index => $language){

			echo '<li><a href="' . $language['url'] . '">' . $language['native_name'] . '</a></li>';

		}

		echo '</ul>';
	}
}


add_action('wp_ajax_load_posts', 'load_posts');
add_action('wp_ajax_nopriv_load_posts', 'load_posts');
function load_posts () {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; 

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		$i = 1;
		while ( $query->have_posts() ) { 
			$query->the_post(); ?>

			<?php get_template_part('parts/content', 'post_blog', ['post_id' => get_the_ID(), 'index' => $i]) ?>

			<?php
			$i++; 
		}
		die();
	}
}


add_action('wp_ajax_load_cases', 'load_cases');
add_action('wp_ajax_nopriv_load_cases', 'load_cases');
function load_cases () {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; 

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		$i = 1;
		while ( $query->have_posts() ) { 
			$query->the_post(); ?>

			<?php get_template_part('parts/content', 'case', ['post_id' => get_the_ID()]) ?>

			<?php
			$i++; 
		}
		die();
	}
}


/*add_action( 'pre_get_posts', 'tg_include_custom_post_types_in_search_results' );
function tg_include_custom_post_types_in_search_results( $query ) {
    if ($query->is_search()) {
        $query->set( 'post_type', array( 'post', 'case', 'service' ) );
    }
}*/


require 'inc/gutenberg.php';