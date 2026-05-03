<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" defer></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;600&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-box">
            <!-- Logotype -->
            <?php if (has_custom_logo()) : the_custom_logo() ?>

            <?php else : ?>
                <h1 class="site-title"><?php bloginfo("name"); ?></h1>
            <?php endif; ?>

            <nav id="main-nav">
                <?php
                // Show the main menu registered in WordPress with "theme_location" => "main-nav"
                wp_nav_menu([
                    "theme_location" => "main-nav"
                ]);
                ?>
            </nav>

            <!-- SVG-icon to open the mobile menu -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="hamburger-icon" id="open-menu"
                fill="currentColor"
                width="35px"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z" />
            </svg>
        </div>
    </header>