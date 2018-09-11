<?php

/**
 * Primary Template Page (Index.php)
 */

get_header() ?>
    <!-- Main content started -->
    <div id="vbm__main-content">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                        get_template_part( 'template-parts/post/content', get_post_format() );
                    ?>
            <?php endwhile; ?>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <!-- Main content ended -->
<?php get_footer(); ?>