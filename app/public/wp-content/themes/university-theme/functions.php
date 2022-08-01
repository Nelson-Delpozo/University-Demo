<?php


function university_demo_files(): void{
    wp_enqueue_style('main_styles', get_stylesheet_uri());}

add_action('wp_enqueue_scripts', 'university_demo_files');
