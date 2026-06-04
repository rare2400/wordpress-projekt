<?php get_header(); ?>

<main>
    <div class="container">
        <?php
        // Check if there are posts to display
        if (have_posts()) : ?>

            <div class="grid grid-2 grid-3">

                <?php while (have_posts()) :
                    the_post();

                ?>
                    <!-- Display the post as a card with featured image, title, and excerpt -->
                    <article class="card">
                        <?php
                        // Check if the post has a featured image and display it
                        if (has_post_thumbnail()) {
                            the_post_thumbnail("card", [
                                "alt" => get_the_title()
                            ]);
                        }
                        ?>
                        <div class="card-body">
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>
        <?php else :

            // If no posts are found, display a message to the user
            echo "<p>Inga inlägg hittades.</p>";

        endif; ?>
    </div>
</main>

<?php get_footer(); ?>