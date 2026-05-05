<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <!-- Hero -->
    <section class="page-header">
        <h1><?php post_type_archive_title(); ?></h1>
        <p>Upptäck våra aktiviteter och upplev naturen i Glasriket på riktigt.</p>
    </section>

    <div class="container">
        <?php if (have_posts()) : ?>

            <div class="grid grid-3">

                <?php while (have_posts()) : the_post(); ?>

                    <article class="card">

                        <a href="<?php the_permalink(); ?>" class="card-link">

                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail("medium", [
                                    'alt' => get_the_title()
                                ]); ?>
                            <?php endif; ?>

                            <div class="card-body">
                                <h2><?php the_title(); ?></h2>

                                <p>
                                    <?php echo esc_html(wp_trim_words(get_the_excerpt(), 25)); ?>
                                </p>

                                <span class="read-more">
                                    <?php esc_html_e("Läs mer", "skogsglantan"); ?>
                                </span>

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
                <?php esc_html_e("Inga aktiviteter tillgängliga just nu.", "skogsglantan"); ?>
            </p>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>