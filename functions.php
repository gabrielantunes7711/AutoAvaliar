<?php 

function theme_scripts() {
	wp_enqueue_style('swiper-css', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', [], '8.4.2', 'all');
	wp_enqueue_style('theme-css', get_template_directory_uri().'/assets/css/theme.css',['swiper-css'],time(),'all');

	wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', [], '8.4.2', true);
	wp_enqueue_script('theme-js', get_template_directory_uri().'/assets/js/theme.js',['swiper-js'],time(),true);
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

add_theme_support('menus');

add_theme_support('html5', ['gallery','caption']);

add_theme_support('post-thumbnails');

if(function_exists('acf_add_options_page')) {
    
    acf_add_options_page([
        'page_title'    => 'Opções',
        'menu_title'    => 'Opções',
        'menu_slug'     => 'options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
    
}

function get_img($filename){
	return get_bloginfo('template_url')."/assets/img/{$filename}";
}

function get_icon($iconname){
	get_template_part("/assets/icons/{$iconname}");
}