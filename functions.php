<?php

function mj_theme_support()
{
    add_theme_support('title-tag');
    // add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mj_theme_support');

function mj_menus(){

    $locations = array(
        "primary"=>"Desktop Primary Left Sidebar",
        "footer"=>"Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init','mj_menus');

function mj_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('mj-style', get_template_directory_uri() . "/style.css", $version, 'all');
    wp_enqueue_style('mj-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', '2.3.1', 'all');
    
}

add_action('wp_enqueue_scripts', 'mj_register_styles');

function mj_register_scripts()
{
    wp_enqueue_script('mj_jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('mj_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('mj_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('mj_mailjs',  get_template_directory_uri() . "/assets/js/sendMail.js", array(), '1.0', false);
    wp_enqueue_script('mj_aos', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '2.3.1', false);
}

add_action('wp_enqueue_scripts', 'mj_register_scripts');

function mj_widget_areas(){
    register_sidebar(array('
    before_title'=>'',
'after_title'=>'',
'before_widget'=>'<ul class="social-list list-inline py-3 mx-auto">',
'after_widget'=>'</ul>','name'=>'Sidebar area',
'id'=>'sidebar-1',
'description'=>'Sidebar Widget Area'));

register_sidebar(array('
    before_title'=>'',
'after_title'=>'',
'before_widget'=>'',
'after_widget'=>'',
'name'=>'Footer area',
'id'=>'footer-1',
'description'=>'Footer Widget Area'));
}


add_action('widgets_init', 'mj_widget_areas');
