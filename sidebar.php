<?php 
/**
 * Sidebar Template
 * Main blog sidebar template
 */

 if( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div id="vbm__sidebar" class="primary-sidebar">
        <div class="sidebar-container">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    </div>
 <?php
    endif;