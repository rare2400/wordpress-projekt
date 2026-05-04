<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <section class="page-header">
        <!-- Category title -->
        <h1><?php single_cat_title(); ?></h1>
        <?php
        // Check if the category has a description and display it
        if (!empty(category_description())) :
        ?>
            <div>
                <?php echo category_description(); ?>
            </div>
        <?php
        endif;
        ?>
    </section>

    <div class="container">
        <?php
        // Check if there are posts in the current category
        if (have_posts()) : ?>

            <div class="grid grid-1">
                <?php
                // Loop through all posts and fetch data
                while (have_posts()) : the_post();

                ?>
                    <a href="<?php the_permalink(); ?>" class="card-link">
                        <!-- Display every post as a card -->
                        <article class="card grid grid-list">
                            <div class="category-image">
                                <?php
                                // Check if the post has a thumbnail and display it
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail("large");
                                endif; ?>
                            </div>
                            <div class="category-text">
                                <!-- Display title and excerpt -->
                                <h2><?php the_title(); ?></h2>
                                <div class="category-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </article>
                    </a>
                <?php
                endwhile;
                ?>

                <!-- Paginering för att navigera mellan sidor med inlägg -->
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