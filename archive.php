<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <section class="page-header">
        <!-- Archive title -->
        <h1><?php the_archive_title(); ?></h1>
        <div>
            <?php echo the_archive_description(); ?>
        </div>
        <?php
        ?>
    </section>

    <div class="container">

        <?php
        // Check if there are posts in the current archive
        if (have_posts()) : ?>

            <div class="grid grid-3">
                <?php
                // Loop through all posts and fetch data
                while (have_posts()) : the_post(); ?>

                    <article class="card">
                        <!-- Makes the card clickable by wrapping it in a link to the post permalink -->
                        <a href="<?php the_permalink(); ?>" class="card-link">
                            <?php
                            // Check if the post has a thumbnail and display it
                            if (has_post_thumbnail()) :
                                the_post_thumbnail("large");
                            endif; ?>
                            <div class="card-body">
                                <!-- Display the post's title and excerpt -->
                                <h2><?php the_title(); ?></h2>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </a>
                    </article>
                <?php
                endwhile;
                ?>

                <!-- Pagination to navigate between pages with posts -->
                <div class="pagination">
                    <?php
                    the_posts_pagination([
                        'mid_size' => 2,
                        'prev_text' => __('Föregående'),
                        'next_text' => __('Nästa')
                    ]);

                    ?>
                </div>
            <?php else : ?>

                <p class="no-content">
                    <?php esc_html_e("Inga inlägg hittades...", "skogsglantan"); ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>