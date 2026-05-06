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

            <!-- Section for staff members -->
            <section class="staff-section">
                <h2>Vår personal</h2>

                <?php
                // Query to get all staff members (personal post type)
                $staff = new WP_Query([
                    "post_type" => "personal",
                    "posts_per_page" => -1,
                    "orderby" => "date",
                    "order" => "ASC"
                ]);

                // Check if there are staff members to display
                if ($staff->have_posts()) : ?>
                    <div class="grid grid-4">

                        <?php
                        // Loop through each staff member and display their information
                        while ($staff->have_posts()) : $staff->the_post(); ?>
                            <article class="card staff-card">

                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail("thumbnail", [
                                        "alt" => get_the_title()
                                    ]);
                                endif; ?>

                                <h3><?php the_title(); ?></h3>
                                <p class="role">
                                    <?php
                                    // The staff member's role (roll) using ACF field
                                    echo esc_html(get_field("roll")); ?>
                                </p>

                                <p>
                                    <?php
                                    // Display the staff member's excerpt if it exists, otherwise, display the content
                                    if (get_the_excerpt()) : echo esc_html(get_the_excerpt()); ?>
                                    <?php else : the_content();

                                    endif; ?>
                                </p>

                                <p class="staff-contact">
                                    <?php
                                    // The staff member's email (e-post) using ACF field
                                    if (get_field("e-post")) : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="icon"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                            <path d="M125.4 128C91.5 128 64 155.5 64 189.4C64 190.3 64 191.1 64.1 192L64 192L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 192L575.9 192C575.9 191.1 576 190.3 576 189.4C576 155.5 548.5 128 514.6 128L125.4 128zM528 256.3L528 448C528 456.8 520.8 464 512 464L128 464C119.2 464 112 456.8 112 448L112 256.3L266.8 373.7C298.2 397.6 341.7 397.6 373.2 373.7L528 256.3zM112 189.4C112 182 118 176 125.4 176L514.6 176C522 176 528 182 528 189.4C528 193.6 526 197.6 522.7 200.1L344.2 335.5C329.9 346.3 310.1 346.3 295.8 335.5L117.3 200.1C114 197.6 112 193.6 112 189.4z" />
                                        </svg>
                                        <a href="mailto:<?php echo esc_attr(get_field("e-post")); ?>">
                                            <?php echo esc_html(get_field("e-post")); ?> <br>
                                        </a>
                                    <?php endif; ?>

                                    <?php
                                    // The staff member's phonenumber (telefon) using ACF field
                                    if (get_field("telefon")) : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="icon"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                            <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                        </svg>
                                        <a href="tel:<?php echo esc_attr(get_field("telefon")); ?>">
                                            <?php echo esc_html(get_field("telefon")); ?>
                                        </a>
                                    <?php endif; ?>
                                </p>

                            </article>
                        <?php endwhile; ?>

                    </div>
                <?php endif;

                wp_reset_postdata();
                ?>
            </section>
        </div>
</main>

<?php get_footer(); ?>