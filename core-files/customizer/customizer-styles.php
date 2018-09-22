<?php

function vibranium_customizer_css() {
    wp_enqueue_style( 'vbm__custom-style', get_theme_file_uri( '/core-files/customizer/css/customizer-styles.css' ) );
    ob_start();

        $box_layout_width = cs_get_customize_option( 'vbm__box_layout_width', '1200' );
        ?>
        #vbm__page-container.vbm__box_layout {
            max-width: <?php echo $box_layout_width . 'px' ?>;
        }

        <?php
        $body_font_size = get_theme_mod( 'vbm__body_font_size_setting', '14');
        $body_line_height = get_theme_mod( 'vbm__body_line_height_setting', '1.7');

        $custom_sidebar = get_theme_mod( 'vbm__custom_sidebar_setting', 0 );
        $custom_sidebar_width = get_theme_mod( 'vbm__custom_sidebar_width_setting', '27' );

    if( $box_layout == 1 ) : ?>
        #vbm__page-container.vbm__box_layout {
            max-width: calc( <?php echo $box_layout_width . 'px' ?> + 100px );
            width : 90%;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 10px rgba(0,0,0,.2);
        }
        #vbm__page-container.vbm__box_layout .container {
            max-width: <?php echo $box_layout_width . 'px' ?>;
        }
    <?php endif ?>

    body, ul, li, a, span, p, input, textarea, label { 
        font-size: <?php echo $body_font_size; ?>px; 
        line-height: <?php echo $body_line_height; ?>; 
    }
    
    h1 {
        font-size: <?php echo get_theme_mod( 'vbm__h1_font_size_setting', '40' ); ?>px;
        line-height: <?php echo get_theme_mod( 'vbm__h1_line_height_setting', '1' ); ?>;
    }
    h2 {
        font-size: <?php echo get_theme_mod( 'vbm__h2_font_size_setting', '34' ); ?>px;
        line-height: <?php echo get_theme_mod( 'vbm__h2_line_height_setting', '1' ); ?>;
    }
    h3 {
        font-size: <?php echo get_theme_mod( 'vbm__h3_font_size_setting', '24' ); ?>px;
        line-height: <?php echo get_theme_mod( 'vbm__h3_line_height_setting', '1' ); ?>;
    }
    h4 {
        font-size: <?php echo get_theme_mod( 'vbm__h4_font_size_setting', '18' ); ?>px;
        line-height: <?php echo get_theme_mod( 'vbm__h4_line_height_setting', '1' ); ?>;
    }
    body {
        color: <?php echo get_theme_mod( 'vbm__body_text_color_setting', '#444444' ); ?>;
    }
    body a {
        color: <?php echo get_theme_mod( 'vbm__body_link_color_setting', '#22d6d0' ); ?>;
    }
    h1, h2, h3, h4, h5, h6 {
        color: <?php echo get_theme_mod( 'vbm__heading_text_color_setting', '#444444' ); ?>;
        font-weight: <?php echo get_theme_mod( 'vbm__header_font_weight_setting', 'normal' ); ?>;
        font-style: <?php echo get_theme_mod( 'vbm__header_font_style_setting', 'normal' ); ?>;
    }

<?php
    $customozer_styles = ob_get_clean();
    wp_add_inline_style( 'vbm__custom-style', $customozer_styles );
}
add_action( 'wp_enqueue_scripts', 'vibranium_customizer_css');