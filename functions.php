<?php

// Activate title tag, featured image and logo support
add_theme_support("title-tag");
add_theme_support("custom-logo");
add_theme_support("post-thumbnails");

// Activate page excerpt
add_post_type_support("page", "excerpt");

// Custom logo support (in header.php)
function skogsglantan_theme_setup()
{
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
}
add_action('after_setup_theme', 'skogsglantan_theme_setup');

// Activate custom menu support
function register_my_menus()
{
    register_nav_menus(
        array(
            "main-nav" => __("Huvudmeny"),
        )
    );
}
add_action("init", "register_my_menus");