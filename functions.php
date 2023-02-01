<?php 

function theme_scripts() {
	wp_enqueue_style('swiper-css', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', [], '8.4.2', 'all');
	wp_enqueue_style('theme-css', get_template_directory_uri().'/assets/css/theme.css',['swiper-css'],time(),'all');

	wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', [], '8.4.2', true);
	wp_enqueue_script('theme-js', get_template_directory_uri().'/assets/js/theme.js',['swiper-js'],time(),true);
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

add_theme_support('menus');

add_theme_support('html5');

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Opções',
        'menu_title'    => 'Opções',
        'menu_slug'     => 'options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}