<?php
/**
 * This is the header of the theme
 * All the <head> sections code will be here.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes() ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <!-- Page Container started -->
        <?php $box_layout = cs_get_customize_option( 'vbm__site_layout_type', 'fullwidth' ); ?>
        <?php if( $box_layout == 'fullwidth' ) : ?>
        <div id="vbm__page-container" class="vbm__fullwidth_layout">
        <?php elseif( $box_layout == 'boxed' ) : ?>
        <div id="vbm__page-container" class="vbm__box_layout">
        <?php endif; ?>

            <!-- Header Area Started -->
            <div id="vbm__top-header">
                <div class="container">
                    <div class="top-header-contact">
                        <a href="#" class="top-call">
                            <span class="fa fa-phone"></span> +0123456789
                        </a>
                        <a href="#" class="top-mail">
                            <span class="fa fa-envelope"></span> admin@email.com
                        </a>
                    </div>
                    <div class="top-header-social">
                        <a href="<?php echo site_url() ?>" class="top-fb"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="top-twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="top-insta"><span class="fa fa-instagram"></span></a>
                        <a href="#" class="top-linked"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
            </div>
            <header id="vbm__main-header">
                <div class="container">
                    <div class="logo-container">
                        <?php 
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        ?>
                    </div>
                    <div class="navigation-container">
                        <?php 
                        wp_nav_menu( array(
                            'theme_location'  => 'primary-menu',
                            'container_class' => 'primary-menu-container',
                        ));
                        ?>
                    </div>
                </div>
            </header>
            <!-- Header Area Ended -->

            <!-- Main Body Area Started -->
            <div id="vbm__main-area">