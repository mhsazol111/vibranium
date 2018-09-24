<?php
/**
 * Configs for codestar framework
 */

define('CS_ACTIVE_FRAMEWORK', false); // default true
define('CS_ACTIVE_METABOX', false); // default true
define('CS_ACTIVE_TAXONOMY', false); // default true
define('CS_ACTIVE_SHORTCODE', false); // default true
define('CS_ACTIVE_CUSTOMIZE', true); // default true

/** ========================================================= *
 *  ========================= Customizer ===================== *
 *  ========================================================= */

function vibranium_customizer_options($options) {
    // $options = array();

    $options[] = array(
        'name'        => 'vbm__general_panel',
        'title'       => __('General Settings', 'vibranium'),
        'description' => 'General Settings Panel',
        'sections'    => array(
            // Website Layout
            array(
                'name'     => 'vbm__site_layout',
                'title'    => __('Website Layout', 'vibranium'),
                'settings' => array(
                    array(
                        'name'      => 'vbm__site_layout_details',
                        'control'   => array(
                            'type'      => 'cs_field',
                            'options'   => array(
                                'type'      => 'notice',
                                'class'     => 'success',
                                'content'   => 'You can define wheather your website will be fullwidth or in boxed layout. You can set your website\'s max-width, content width, sidebar width from here.'
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__site_layout_type',
                        'title'     => __( 'Site Layout', 'vibranium' ),
                        'default'   => 'fullwidth',
                        'transport' => 'postMessage',
                        'control'   => array(
                            'title'     => __( 'Website Layout', 'vibranium' ),
                            'type'      => 'cs_field',
                            'options'   => array(
                                'type'      => 'select',
                                'options'   => array(
                                    'fullwidth' => __('Fullwidth', 'vibranium'),
                                    'boxed'     => __('Boxed', 'vibranium')
                                )
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__fullwidth_layout_max_width',
                        'transport' => 'postMessage',
                        'default'   => '1200',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'title'      => __( 'Site container max-width (px)', 'vibranium' ),
                                'type'       => 'slider',
                                'dependency' => array('vbm__site_layout_type', 'any', 'fullwidth'),
                                'options'    => array(
                                    'step' => 1,
                                    'min'  => 960,
                                    'max'  => 2500,
                                )
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__fullwidth_layout_width',
                        'transport' => 'postMessage',
                        'default'   => '90',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'title'      => __( 'Site container width (%)', 'vibranium' ),
                                'type'       => 'slider',
                                'dependency' => array('vbm__site_layout_type', 'any', 'fullwidth'),
                                'options'    => array(
                                    'step' => 1,
                                    'min'  => 60,
                                    'max'  => 100,
                                )
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__box_layout_max_width',
                        'transport' => 'postMessage',
                        'default'   => '1200',
                        'control'   => array(
                            'type'      => 'cs_field',
                            'id'        => 'some_id',
                            'options'   => array(
                                'title'      => __( 'Box layout max-width (px)', 'vibranium' ),
                                'type'       => 'slider',
                                'dependency' => array('vbm__site_layout_type', 'any', 'boxed'),
                                'options'    => array(
                                    'step' => 1,
                                    'min'  => 960,
                                    'max'  => 2500,
                                )
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__box_layout_width',
                        'transport' => 'postMessage',
                        'default'   => '90',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'title'      => __( 'Box layout width (%)', 'vibranium' ),
                                'type'       => 'slider',
                                'dependency' => array('vbm__site_layout_type', 'any', 'boxed'),
                                'options'    => array(
                                    'step' => 1,
                                    'min'  => 60,
                                    'max'  => 100,
                                )
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__custom_sidebar_switch',
                        'transport' => 'postMessage',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'type'  => 'switcher',
                                'title' => __('Custom Sidebar Layout?', 'vibranium'),
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__custom_sidebar_width',
                        'transport' => 'postMessage',
                        'default'   => '25',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'title'      => __( 'Custom Sidebar Width (%)', 'vibranium' ),
                                'type'       => 'slider',
                                'dependency' => array('vbm__custom_sidebar_switch', '==', 'true'),
                                'options'    => array(
                                    'step' => 1,
                                    'min'  => 15,
                                    'max'  => 35,
                                )
                            )
                        )
                    )
                ),
            ),
            //Typography
            array(
                'name'     => 'vbm__typography',
                'title'    => __('Typography', 'vibranium'),
                'settings' => array(
                    array(
                        'name'      => 'vbm__typography_details',
                        'control'   => array(
                            'type'      => 'cs_field',
                            'options'   => array(
                                'type'      => 'notice',
                                'class'     => 'success',
                                'content'   => 'Here you will find global typography options for your body copy and headings, while more specific typography options for elements like your navbar are found grouped with that element to make customization more streamlined. If you are using Google Fonts, you can also enable custom subsets here for expanded character sets.'
                            )
                        )
                    ),
                    array(
                        'name'    => 'vbm__section_head_1',
                        'control' => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'type'      => 'notice',
                                'class'     => 'info text-center',
                                'content'   => __('Body Typography Options', 'vibranium'),
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__body_font_size',
                        'default'   => '14',
                        'transport' => 'postMessage',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'title'     => __('Body font size (px)', 'vibranium'),
                                'type'      => 'slider',
                                'options'   => array(
                                    'step'  => 1,
                                    'min'   => 5,
                                    'max'   => 50,
                                )
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__body_line_height',
                        'default'   => '1.4',
                        'transport' => 'postMessage',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'title'   => __('Body line height', 'vibranium'),
                                'type'    => 'slider',
                                'options' => array(
                                    'step' => 0.1,
                                    'min'  => 0.5,
                                    'max'  => 5,
                                )
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__body_letter_spacing',
                        'default'   => '0',
                        'transport' => 'postMessage',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'title'   => __('Body letter spacing', 'vibranium'),
                                'type'    => 'slider',
                                'options' => array(
                                    'step' => 0.1,
                                    'min'  => 0,
                                    'max'  => 10,
                                )
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__body_font_family',
                        'transport' => 'postMessage',
                        'default'   => array(
                            'family'  => 'Open Sans',
                            'variant' => 'regular',
                        ),
                        'chosen'    => true,
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'title'     => __('Body font family', 'vibranium'),
                                'type'      => 'typography',
                            )
                        )
                    ),
                    array(
                        'name'      => 'vbm__body_font_color',
                        'transport' => 'postMessage',
                        'default'   => '#444444',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'title'     => __('Body font color', 'vibranium'),
                                'type'      => 'color_picker',
                            )
                        )
                    ),
                ),
            ),
        ),
    );

    return $options;
}
add_filter('cs_customize_options', 'vibranium_customizer_options');
