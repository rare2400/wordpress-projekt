<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <!-- Page header -->
    <section class="page-header">
        <h1><?php post_type_archive_title(); ?></h1>
        <p>Välj det rum som passar dig bäst och njut av lugnet i Smålands natur.</p>
    </section>

    <div class="container">

        <?php
        // Check if there are posts in the current archive
        if (have_posts()) : ?>

            <div class="grid grid-4">

                <?php
                // Loop through all posts and fetch data
                while (have_posts()) : the_post(); ?>

                    <article class="card">
                        <!-- Makes the card clickable by wrapping it in a link to the post permalink -->
                        <a href="<?php the_permalink(); ?>" class="card-link">

                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail("medium", [
                                    'alt' => get_the_title()
                                ]); ?>
                            <?php endif; ?>

                            <div class="card-body">
                                <!-- Display the post's title and excerpt -->
                                <h2><?php the_title(); ?></h2>
                                <p>
                                    <?php echo esc_html(wp_trim_words(get_the_excerpt(), 15)); ?>
                                </p>

                                <?php esc_html_e("Läs mer", "skogsglantan"); ?>

                            </div>
                        </a>

                    </article>

                <?php endwhile; ?>

            </div>

            <!-- Pagination -->
            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>

            <p class="no-content">
                <?php esc_html_e("Inga rum tillgängliga just nu.", "skogsglantan"); ?>
            </p>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>