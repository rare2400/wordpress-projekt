<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <!-- Hero section -->
    <?php $hero_image = get_header_image(); ?>
    <section class="hero" style="background-image: url(<?php echo esc_url($hero_image) ?>);">
        <div class="hero-content">
            <h1>Välkommen till <?php bloginfo("name"); ?></h1>
            <p><?php bloginfo("description"); ?></p>

            <div class="hero-actions">
                <a href="<?php echo esc_url(home_url("/boende")); ?>" class="cta-btn">
                    <?php esc_html_e("Se våra rum", "skogsglantan"); ?>
                </a>
                <a href="<?php echo esc_url(home_url("/aktiviteter")); ?>" class="cta-btn">
                    <?php esc_html_e("Utforska aktiviteter", "skogsglantan"); ?>
                </a>
            </div>
        </div>
    </section>

    <div class="front-page-container">

        <!-- Preview of rooms -->
        <section class="preview">
            <h2><?php esc_html_e("Boende", "skogsglantan"); ?></h2>
            <?php
            $rooms = new WP_Query([
                "post_type" => "rum",
                "posts_per_page" => 3
            ]);
            ?>

            <?php if ($rooms->have_posts()) : ?>
                <div class="grid grid-3">
                    <?php while ($rooms->have_posts()) : $rooms->the_post(); ?>
                        <article class="card">
                            <!-- <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"></a> -->
                            <?php
                            // Show the featured image if it exists
                            if (has_post_thumbnail()) {
                                the_post_thumbnail("card", [
                                    "alt" => get_the_title()
                                ]);
                            } ?>
                            <div class="card-body">
                                <!-- Room title -->
                                <h3><?php the_title(); ?></h3>

                                <p>
                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    <?php esc_html_e("Läs mer", "skogsglantan"); ?>
                                    <span class="screen-reader-text"> <?php the_title(); ?></span>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php endif;

            // Reset post data to ensure other queries work correctly
            wp_reset_postdata();
            ?>
            <div class="cta-wrapper">
                <a href="<?php echo esc_url(home_url("/boende")); ?>" class="cta-btn">
                    <?php esc_html_e("Se våra rum", "skogsglantan"); ?>
                </a>
            </div>
        </section>

        <!-- Preview of activities -->
        <section class="preview">
            <h2><?php esc_html_e("Aktiviteter", "skogsglantan"); ?></h2>

            <?php
            $activities = new WP_Query([
                "post_type" => "aktivitet",
                "posts_per_page" => 3
            ]);
            ?>
            <?php
            // Loop through results if posts are found
            if ($activities->have_posts()) : ?>

                <div class="grid grid-3">
                    <?php while ($activities->have_posts()) : $activities->the_post(); ?>
                        <article class="card">
                            <!-- <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"> -->
                            <?php
                            // Show the featured image if it exists
                            if (has_post_thumbnail()) :
                                the_post_thumbnail("card", [
                                    "alt" => get_the_title()
                                ]);
                            endif;
                            ?>
                            <div class="card-body">
                                <!-- Activity title -->
                                <h3><?php the_title(); ?></h3>

                                <p>
                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    <?php esc_html_e("Läs mer", "skogsglantan"); ?>
                                    <span class="screen-reader-text"> <?php the_title(); ?></span>
                                </a>
                            </div>
                        </article>

                    <?php endwhile; ?>
                </div>
            <?php endif;

            // Reset post data to ensure other queries work correctly
            wp_reset_postdata();
            ?>
            <div class="cta-wrapper">
                <a class="cta-btn" href="<?php echo esc_url(home_url("/aktiviteter")); ?>">
                    <?php esc_html_e("Se alla aktiviteter", "skogsglantan"); ?></a>
            </div>
        </section>

        <!-- Preview of about us -->
        <section class="cta-banner">
            <?php
            $about_page = get_page_by_path("om-oss");

            if ($about_page) : ?>
                <h2><?php echo esc_html(get_the_title($about_page)); ?></h2>
                <p><?php echo esc_html(get_the_excerpt($about_page)); ?></p>

                <a class="cta-btn" href="<?php echo esc_url(get_permalink($about_page)); ?>">
                    <?php esc_html_e("Läs mer", "skogsglantan") ?></a>
            <?php endif; ?>
        </section>

        <!-- Preview of news -->
        <section class="preview">
            <h2><?php esc_html_e("Nyheter", "skogsglantan"); ?></h2>

            <?php
            // Create a new WP_Query to fetch the latest 3 posts from the "nyheter" category
            $news = new WP_Query([
                "category_name" => "nyheter",
                "posts_per_page" => 3
            ]);

            // Loop through results if posts are found
            if ($news->have_posts()) : ?>

                <div class="grid grid-3">
                    <?php while ($news->have_posts()) : $news->the_post(); ?>
                        <article class="card">
                            <!-- <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"> -->
                            <?php
                            // Shows the featured image if it exists
                            if (has_post_thumbnail()) :
                                the_post_thumbnail("card", [
                                    "alt" => get_the_title()
                                ]);
                            endif; ?>
                            <div class="card-body">
                                <!-- News title -->
                                <h3><?php the_title(); ?></h3>

                                <p>
                                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    <?php esc_html_e("Läs mer", "skogsglantan"); ?>
                                    <span class="screen-reader-text"> <?php the_title(); ?></span>
                                </a>
                            </div>
                        </article>
                    <?php
                    endwhile; ?>

                </div>
            <?php

            endif;

            // Reset post data to ensure other queries work correctly
            wp_reset_postdata();
            ?>
            <div class="cta-wrapper">
                <a class="cta-btn" href="<?php echo esc_url(get_category_link(get_cat_ID("nyheter"))); ?>">
                    <?php esc_html_e("Se alla nyheter", "skogsglantan") ?>
                </a>
            </div>

        </section>

        <!-- Call to action to book room -->
        <section class="cta-banner">
            <h2><?php esc_html_e("Boka din vistelse", "skogsglantan"); ?></h2>

            <p>
                <?php esc_html_e("Välj bland våra rum och aktiviteter och säkra din plats i naturen.", "skogsglantan"); ?>
            </p>

            <a href="<?php echo esc_url(home_url("/boende")) ?>" class="cta-btn">
                <?php esc_html_e("Boka nu", "skogsglantan"); ?>
            </a>
        </section>

    </div>

</main>

<?php get_footer(); ?>