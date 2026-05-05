<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <!-- Loop through the post and display its content -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="container">

                <div class="single-content">
                    <!-- Display the post's title and featured image if it exists -->
                    <h1><?php the_title(); ?></h1>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="room-featured-image">
                            <?php the_post_thumbnail("large", [
                                'alt' => get_the_title()
                            ]); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Description -->
                    <article class="room-description card">
                        <?php the_content(); ?>

                        <!-- Information about the room, fetched from custom fields -->
                        <div class="single-meta">

                            <h2><?php esc_html_e("Information", "skogsglantan"); ?></h2>

                            <ul>
                            <li><strong>Pris per natt:</strong> <?php echo esc_html(get_field("pris_per_natt")) ?></li>
                                <li><strong>Kapacitet:</strong> <?php echo esc_html(get_field("kapacitet")) ?></li>
                                <li><strong>Typ:</strong> <?php echo esc_html(get_field("typ")) ?></li>
                                
                            </ul>

                        </div>

                    </article>


                    <!-- CTA -->
                    <div class="booking-cta">
                        <a href="<?php echo esc_url(home_url("/kontakt")); ?>" class="secondary-btn">
                            <?php esc_html_e("Boka nu", "skogsglantan"); ?>
                        </a>
                    </div>

                </div>



                <!-- Back-link -->
                <div class="back-link">
                    <a href="<?php echo esc_url(get_post_type_archive_link('rum')); ?>">
                        ← <?php esc_html_e("Tillbaka till alla rum", "skogsglantan"); ?>
                    </a>
                </div>

            </div>

    <?php endwhile;
    endif; ?>

</main>

<?php get_footer(); ?>