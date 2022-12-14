<?php


function university_files(): void
{

    wp_enqueue_style('main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_script('main_university_js', get_theme_file_uri('/build/index.js'), array('jquery'), 1.0, true);
}

add_action('wp_enqueue_scripts', 'university_files');


function university_features(): void
{
//    register_nav_menu('header_menu_location', 'Header Menu Location');
//    register_nav_menu('footerLocationOne', 'Footer Location One');
//    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'university_features');

//function university_post_types(): void
//{
//    register_post_type('event', array(
//        'public' => true,
//        'labels' => array(
//            'name' => 'Events'
//        ),
//        'menu_icon' => 'dashicons-calendar'
//    ));
//}
//
//add_action('init', 'university_post_types');


