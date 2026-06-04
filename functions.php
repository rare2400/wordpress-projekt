<?php

// Activate title tag, featured image and logo support
add_theme_support("title-tag");
add_theme_support("custom-logo");
add_theme_support("post-thumbnails");

// Activate page excerpt
add_post_type_support("page", "excerpt");

// Disable automatic image size attributes to prevent layout issues with custom image sizes
add_filter('wp_img_tag_add_auto_sizes', '__return_false');

// Custom logo support (in header.php)
function skogsglantan_theme_setup()
{
    add_theme_support("custom-logo", [
        "height"      => 100,
        "width"       => 300,
        "flex-height" => true,
        "flex-width"  => true,
    ]);
}
add_action("after_setup_theme", "skogsglantan_theme_setup");


// Activate hero-image
$args = array(
    "default-image" => get_template_directory_uri() . "/img/hero-office.jpg",
    "width"         => 1920,
    "height"        => 900,
    "uploads"       => true
);
add_theme_support("custom-header", $args);

// Custom size images
add_image_size("hero", 1920, 900, true);
add_image_size("card", 800, 500, true);
add_image_size("thumbnail", 400, 300, true);


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


// Register custom post types for "Boende", "Aktiviteter" and "Personal"
function register_rum_cpt()
{
    $labels = [
        "name" => "Boende",
        "singular_name" => "Rum",
        "menu_name" => "Boende",
        "add_new" => "Lägg till",
        "add_new_item" => "Lägg till nytt rum",
        "edit_item" => "Redigera rum",
        "new_item" => "Nytt rum",
        "view_item" => "Visa rum",
        "all_items" => "Alla rum",
    ];

    $args = [
        "labels" => $labels,
        "public" => true,
        "has_archive" => true,
        "rewrite" => ["slug" => "boende"],
        "menu_icon" => "dashicons-admin-home",
        "supports" => ["title", "editor", "thumbnail", "excerpt"],
        "show_in_rest" => true,
    ];

    register_post_type("rum", $args);
}

add_action("init", "register_rum_cpt");

// CPT for "Aktiviteter"
function register_aktivitet_cpt()
{
    $labels = [
        "name" => "Aktiviteter",
        "singular_name" => "Aktiviteter",
        "menu_name" => "Aktiviteter",
        "add_new" => "Lägg till",
        "add_new_item" => "Lägg till aktivitet",
        "edit_item" => "Redigera aktivitet",
        "new_item" => "Ny aktivitet",
        "view_item" => "Visa aktivitet",
        "all_items" => "Alla aktiviteter",
    ];

    $args = [
        "labels" => $labels,
        "public" => true,
        "has_archive" => true,
        "rewrite" => ["slug" => "aktiviteter"],
        "menu_icon" => "dashicons-palmtree",
        "supports" => ["title", "editor", "thumbnail", "excerpt"],
        "show_in_rest" => true,
    ];

    register_post_type("aktivitet", $args);
}

add_action("init", "register_aktivitet_cpt");

// CPT for "Personal"
function register_personal_cpt()
{
    $labels = [
        "name" => "Personal",
        "singular_name" => "Person",
        "add_new_item" => "Lägg till person",
        "edit_item" => "Redigera person",
        "all_items" => "All personal",
    ];

    $args = [
        "labels" => $labels,
        "public" => true,
        "has_archive" => false,
        "rewrite" => ["slug" => "personal"],
        "menu_icon" => "dashicons-groups",
        "supports" => ["title", "editor", "thumbnail", "excerpt"],
        "show_in_rest" => true,
    ];

    register_post_type("personal", $args);
}

add_action("init", "register_personal_cpt");