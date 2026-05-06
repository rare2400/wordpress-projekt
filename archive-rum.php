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
                                <?php the_post_thumbnail("card", [
                                    "alt" => get_the_title()
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
                <?php the_posts_pagination([
                    "mid_size" => 2,
                    "prev_text" => '
                        <span class="pagination-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20" height="20" class="icon" aria-hidden="true"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                <path d="M73.4 297.4C60.9 309.9 60.9 330.2 73.4 342.7L233.4 502.7C245.9 515.2 266.2 515.2 278.7 502.7C291.2 490.2 291.2 469.9 278.7 457.4L173.3 352L544 352C561.7 352 576 337.7 576 320C576 302.3 561.7 288 544 288L173.3 288L278.7 182.6C291.2 170.1 291.2 149.8 278.7 137.3C266.2 124.8 245.9 124.8 233.4 137.3L73.4 297.3z"/>
                            </svg>
                        </span>
                        <span class="pagination-text">Föregående</span>
                    ',

                    "next_text" => '
                        <span class="pagination-text">Nästa</span>
                        <span class="pagination-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20" height="20" class="icon" aria-hidden="true"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/>
                        </svg>
                        </span>
                        '
                ]); ?>
            </div>

        <?php else : ?>

            <p class="no-content">
                <?php esc_html_e("Inga rum tillgängliga just nu.", "skogsglantan"); ?>
            </p>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>