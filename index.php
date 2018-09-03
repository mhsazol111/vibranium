<?php

/**
 * Primary Template Page (Index.php)
 */

get_header() ?>
    <!-- Main content started -->
    <div id="vbm__main-content">
        <?php while( have_posts() ) : the_post(); ?>
            <div class="container">
                <?php the_content(); ?> <h1>index.php</h1>
            </div>
        <?php endwhile; ?>
        <?php get_sidebar(); ?>
    </div>
    <!-- Main content ended -->
<?php get_footer(); ?>