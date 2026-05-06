<?php get_header(); ?>

<main>
    <div class="container">
        <article class="page-content">
            <!-- Page header section -->
            <div class="page-header">
                <!-- Title and excerpt if it exists -->
                <h1><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : the_excerpt();
                endif; ?>
            </div>
            <div class="page-body">
                <?php
                // Show the featured image if it exists
                if (has_post_thumbnail()) :
                    the_post_thumbnail("card", [
                        "alt" => get_the_title()
                    ]);
                endif; ?>
                <div class="page-text">
                    <?php
                    // Page content
                    the_content(); ?>
                </div>
        </article>
    </div>
</main>

<?php get_footer(); ?>