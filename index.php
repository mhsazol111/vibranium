<?php

/**
 * Primary Template Page (Index.php)
 */

get_header() ?>
    <!-- Main content started -->
    <div id="vbm__main-content">
        <?php while( have_posts() ) : the_post(); ?>
            <div class="container">
                <?php 
                    get_template_part( 'template-parts/post/content', get_post_format() );
                ?>
            </div>
        <?php endwhile; ?>
        <?php get_sidebar(); ?>
    </div>
    <!-- Main content ended -->
<?php get_footer(); ?>