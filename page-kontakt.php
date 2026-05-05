<?php

get_header();
?>

<main id="main-content" tabindex="-1">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>

                <!-- Section for page header with title and excerpt -->
                <section class="page-header">
                    <h1><?php the_title(); ?></h1>
                    <?php if (has_excerpt()) { ?>
                        <p><?php the_excerpt(); ?></p>
                    <?php } ?>
                </section>

                <!-- Displaying the content of the page -->
                <section class="contact-section">
                    <div class="contact-info">
                        <?php the_content(); ?>
                    </div>
                </section>

            <?php endwhile; ?>

        <?php else :
            echo "<p>Inget innehåll hittades.</p>";
        endif; ?>

    </div>
</main>

<?php get_footer(); ?>