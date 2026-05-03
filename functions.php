<?php

// Activate logo support
add_theme_support("custom-logo");

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