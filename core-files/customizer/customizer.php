<?php
/**
 * All the customizer options are registered here.
 * Using customizer api
 */

require get_theme_file_path( 'core-files/customizer/customizer-range-control.php' );

function vibranium_customize_register($wp_customize) {
    /** =========================================
     * ========= Start General Panel ============
     *==========================================*/
    $wp_customize->add_panel( 'vbm__general_panel', array(
        'title'          => esc_html__('General Settings', 'vibranium'),
        'priority'       => 1
    ));

    //================ Site Layout =================
    $wp_customize->add_section( 'vbm__site_layout', array(
        'title' => esc_html__( 'Website Layout', 'vibranium' ),
        'panel' => 'vbm__general_panel'
    ));
    $wp_customize->add_setting( 'vbm__box_layout_setting', array(
        'title'     => esc_html__( 'Enable Box Layout', 'vibranium' ),
        'default'   => 0,
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vbm__box_layout', array(
        'label'	      => esc_html__( 'Enable Box Layout', 'vibranium' ),
        'section'     => 'vbm__site_layout',
        'settings'    => 'vbm__box_layout_setting',
        'type'        => 'checkbox',
    )));
    //=============== End of Site Layout ===========

     //================ Start Typography Section ==============
    $wp_customize->add_section( 'vbm__typography', array(
        'title' => esc_html__( 'Typography', 'vibranium' ),
        'panel' => 'vbm__general_panel'
    ));
    $wp_customize->add_setting( 'vbm__body_font_size_setting', array(
        'title'     => esc_html__( 'Body Font Size', 'vibranium' ),
        'default'   => '14',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__body_font_size', array(
        'label'	      => esc_html__( 'Body Font Size', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__body_font_size_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 7,
            'max'  => 35,
            'step' => 1
        )
    )));
    $wp_customize->add_setting( 'vbm__body_line_height_setting', array(
        'title'     => esc_html__( 'Body Line Height', 'vibranium' ),
        'default'   => '1.7',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__body_line_height', array(
        'label'	      => esc_html__( 'Body Line Height', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__body_line_height_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0.5,
            'max'  => 3.0,
            'step' => 0.1
        )
    )));
    $wp_customize->add_setting( 'vbm__h1_font_size_setting', array(
        'title'     => esc_html__( 'h1 Font Size', 'vibranium' ),
        'default'   => '40',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__h1_font_size', array(
        'label'	      => esc_html__( 'h1 Font Size', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__h1_font_size_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 10,
            'max'  => 150,
            'step' => 1
        )
    )));
    $wp_customize->add_setting( 'vbm__h1_line_height_setting', array(
        'title'     => esc_html__( 'h1 Line Height', 'vibranium' ),
        'default'   => '1',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__h1_line_height', array(
        'label'	      => esc_html__( 'h1 Line Height', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__h1_line_height_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0.5,
            'max'  => 3.0,
            'step' => 0.1
        )
    )));
    $wp_customize->add_setting( 'vbm__h2_font_size_setting', array(
        'title'     => esc_html__( 'h2 Font Size', 'vibranium' ),
        'default'   => '34',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__h2_font_size', array(
        'label'	      => esc_html__( 'h2 Font Size', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__h2_font_size_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 10,
            'max'  => 100,
            'step' => 1
        )
    )));
    $wp_customize->add_setting( 'vbm__h2_line_height_setting', array(
        'title'     => esc_html__( 'h2 Line Height', 'vibranium' ),
        'default'   => '1',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__h2_line_height', array(
        'label'	      => esc_html__( 'h2 Line Height', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__h2_line_height_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0.5,
            'max'  => 3.0,
            'step' => 0.1
        )
    )));
    $wp_customize->add_setting( 'vbm__h3_font_size_setting', array(
        'title'     => esc_html__( 'h3 Font Size', 'vibranium' ),
        'default'   => '24',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__h3_font_size', array(
        'label'	      => esc_html__( 'h3 Font Size', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__h3_font_size_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 10,
            'max'  => 100,
            'step' => 1
        )
    )));
    $wp_customize->add_setting( 'vbm__h3_line_height_setting', array(
        'title'     => esc_html__( 'h3 Line Height', 'vibranium' ),
        'default'   => '1',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__h3_line_height', array(
        'label'	      => esc_html__( 'h3 Line Height', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__h3_line_height_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0.5,
            'max'  => 3.0,
            'step' => 0.1
        )
    )));
    $wp_customize->add_setting( 'vbm__h4_font_size_setting', array(
        'title'     => esc_html__( 'h4 Font Size', 'vibranium' ),
        'default'   => '18',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__h4_font_size', array(
        'label'	      => esc_html__( 'h4 Font Size', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__h4_font_size_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 10,
            'max'  => 100,
            'step' => 1
        )
    )));
    $wp_customize->add_setting( 'vbm__h4_line_height_setting', array(
        'title'     => esc_html__( 'h4 Line Height', 'vibranium' ),
        'default'   => '1',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new Vibranium_Range_Option( $wp_customize, 'vbm__h4_line_height', array(
        'label'	      => esc_html__( 'h4 Line Height', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__h4_line_height_setting',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0.5,
            'max'  => 3.0,
            'step' => 0.1
        )
    )));
    $wp_customize->add_setting( 'vbm__header_font_weight_setting', array(
        'title'         => esc_html__( 'Header Font Weight', 'vibranium' ),
        'default'       => 'normal',
        'transport'     => 'postMessage',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vbm__header_font_weight', array(
        'label'	      => esc_html__( 'Header Font Weight', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__header_font_weight_setting',
        'type'        => 'select',
        'choices'     => array(
            '300'         => esc_html__( 'Light', 'Divi' ),
            'normal'      => esc_html__( 'Regular', 'Divi' ),
            '600'         => esc_html__( 'Semi Bold', 'Divi' ),
            'bold'        => esc_html__( 'Bold', 'Divi' ),
        ),
    )));
    $wp_customize->add_setting( 'vbm__header_font_style_setting', array(
        'title'         => esc_html__( 'Header Font Style', 'vibranium' ),
        'default'       => 'normal',
        'transport'     => 'postMessage',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vbm__header_font_style', array(
        'label'	      => esc_html__( 'Header Font Style', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__header_font_style_setting',
        'type'        => 'select',
        'choices'     => array(
            'normal'         => esc_html__( 'Normal', 'Divi' ),
            'italic'         => esc_html__( 'Italic', 'Divi' ),
        ),
    )));
    $wp_customize->add_setting( 'vbm__body_text_color_setting', array(
        'title'     => esc_html__( 'Body Text Color', 'vibranium' ),
        'default'   => '#444444',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vbm__body_text_color', array(
        'label'	      => esc_html__( 'Body Text Color', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__body_text_color_setting',
    )));
    $wp_customize->add_setting( 'vbm__heading_text_color_setting', array(
        'title'     => esc_html__( 'Heading Text Color', 'vibranium' ),
        'default'   => '#141414',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vbm__heading_text_color', array(
        'label'	      => esc_html__( 'Heading Text Color', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__heading_text_color_setting',
    )));
    $wp_customize->add_setting( 'vbm__body_link_color_setting', array(
        'title'     => esc_html__( 'Body Link Color', 'vibranium' ),
        'default'   => '#22d6d0',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vbm__body_link_color', array(
        'label'	      => esc_html__( 'Body Link Color', 'vibranium' ),
        'section'     => 'vbm__typography',
        'settings'    => 'vbm__body_link_color_setting',
    )));
    //================ End of Typography ==============


    /** =========================================
     * ========== End General Panel =============
     *==========================================*/
}
add_action('customize_register', 'vibranium_customize_register');
