<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="container">

                <div class="single-content">

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="activity-featured-image">
                            <?php the_post_thumbnail("large", [
                                'alt' => get_the_title()
                            ]); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Desctription -->
                    <article class="activity-description card">
                        <h1><?php the_title(); ?></h1>

                        <?php the_content(); ?>

                        <!-- Info -->
                        <div class="single-meta">

                            <h2><?php esc_html_e("Information", "skogsglantan"); ?></h2>

                            <ul>
                                <li>Längd: 2 timmar</li>
                                <li>Svårighetsgrad: Medel</li>
                                <li>Utrustning ingår</li>
                            </ul>

                        </div>
                    </article>



                    <!-- CTA -->
                    <div class="booking-cta">
                        <a href="<?php echo esc_url(home_url("/kontakt")); ?>" class="secondary-btn">
                            <?php esc_html_e("Boka aktivitet nu", "skogsglantan"); ?>
                        </a>
                    </div>

                </div>

                <!-- Tillbaka -->
                <div class="back-link">
                    <a href="<?php echo esc_url(get_post_type_archive_link('aktivitet')); ?>">
                        ← <?php esc_html_e("Tillbaka till alla aktiviteter", "skogsglantan"); ?>
                    </a>
                </div>

            </div>

    <?php endwhile;
    endif; ?>

</main>

<?php get_footer(); ?>