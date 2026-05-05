<?php get_header(); ?>

<main>
    <div class="container">

        <div class="post-wrapper">
            <?php
            // Check if there are posts to display
            if (have_posts()) :
                while (have_posts()) : the_post();

            ?>
                    <div class="post-content card">
                        <div class="post-image">
                            <?php
                            // Check if the post has a thumbnail and display it
                            if (has_post_thumbnail()) :
                                the_post_thumbnail("large");
                            endif;
                            ?>
                        </div>

                        <div class="card-body">
                            <!-- Display the posts title content -->
                            <h1><?php the_title(); ?></h1>

                            <?php the_content(); ?>

                            <?php
                            // if the post belongs to the category "Nyheter", display author and date, and a link to the category page
                            if (in_category('nyheter')) :
                            ?>
                                <div class="author-wrapper">
                                    <span class="post-author">Postat av: <?php the_author(); ?> <br> <?php the_date(); ?></span>

                                    <a href="<?php echo get_category_link(get_cat_ID('Nyheter')); ?>">
                                        Läs mer nyheter
                                    </a>


                                </div>

                            <?php endif; ?>
                        </div>

                    </div>
            <?php
                endwhile;
            endif;

            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>