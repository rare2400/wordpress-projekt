<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <!-- Loop through the post and display its content -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="container">

                <div class="single-content grid">
                    <!-- Display the post's title and featured image if it exists -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="activity-featured-image">
                            <?php the_post_thumbnail("card", [
                                "alt" => get_the_title()
                            ]); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Info -->
                    <div class="single-meta card card-body">

                    <h1>Information</h1>

                        <ul>
                            <li><strong>Längd:</strong> <?php echo esc_html(get_field("langd")) ?></li>
                            <li><strong>Svårighetsgrad:</strong> <?php echo esc_html(get_field("svarighetsgrad")) ?></li>
                            <li><strong>Utrustning:</strong> <?php echo esc_html(get_field("utrustning")) ?></li>
                            <li><strong>Pris per person:</strong> <?php echo esc_html(get_field("pris_per_person")) ?></li>
                        </ul>

                    </div>

                    <!-- Description -->
                    <article class="activity-description card">
                        <h2><?php the_title(); ?></h2>

                        <?php the_content(); ?>

                    </article>

                    <!-- CTA -->
                    <div class="booking-cta">
                        <a href="<?php echo esc_url(home_url("/kontakt")); ?>" class="secondary-btn">
                            <?php esc_html_e("Boka aktivitet nu", "skogsglantan"); ?>
                        </a>
                    </div>

                </div>

                <!-- Back-link -->
                <div class="back-link">
                    <a href="<?php echo esc_url(get_post_type_archive_link("aktivitet")); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20" height="20" class="icon" aria-hidden="true"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path d="M73.4 297.4C60.9 309.9 60.9 330.2 73.4 342.7L233.4 502.7C245.9 515.2 266.2 515.2 278.7 502.7C291.2 490.2 291.2 469.9 278.7 457.4L173.3 352L544 352C561.7 352 576 337.7 576 320C576 302.3 561.7 288 544 288L173.3 288L278.7 182.6C291.2 170.1 291.2 149.8 278.7 137.3C266.2 124.8 245.9 124.8 233.4 137.3L73.4 297.3z" />
                        </svg>
                        <?php esc_html_e("Tillbaka till alla aktiviteter", "skogsglantan"); ?>
                    </a>
                </div>

            </div>

    <?php endwhile;
    endif; ?>

</main>

<?php get_footer(); ?>