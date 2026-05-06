<?php get_header(); ?>

<main>
    <div class="container">

        <div class="page-content">
            <!-- Page header -->
            <section class="page-header">
                <!-- Display title and excerpt if it exists -->
                <h1><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : the_excerpt(); ?>
                <?php endif; ?>
            </section>
            <div class="page-body">
                <?php
                // Dispay the featured image if it exists
                if (has_post_thumbnail()) :
                    the_post_thumbnail("medium");
                endif; ?>
                <div class="page-text">
                    <?php
                    // Page content
                    the_content(); ?>
                </div>
            </div>

        </div>
</main>

<?php get_footer(); ?>