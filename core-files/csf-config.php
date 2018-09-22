<?php
/**
* Configs for codestar framework
*/

define( 'CS_ACTIVE_FRAMEWORK', false ); // default true
define( 'CS_ACTIVE_METABOX', false ); // default true
define( 'CS_ACTIVE_TAXONOMY', false ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', true ); // default true

/** ========================================================= *
*  ========================= Customizer ===================== *
*  ========================================================= */

function vibranium_customizer_options($options) {
    $options = array();

    $options[] = array(
        'name'              => 'vbm__general_panel',
        'title'             => __( 'General Settings', 'vibranium' ),
        'description'       => 'General Settings Panel',
        'sections'          => array(
            // Website Layout
            array(
                'name'          => 'vbm__site_layout',
                'title'         => __( 'Website Layout', 'vibranium' ),
                'settings'      => array(
                    array(
                        'name'      => 'vbm__box_layout_switch',
                        'transport' => 'postMessage',
                        'control'   => array(
                            'type'    => 'cs_field',
                            'options' => array(
                                'type'  => 'switcher',
                                'title' => __( 'Enable Box Layout?', 'vibranium' ),
                            ),
                        ),
                    ),
                    array(
                        'name'      => 'vbm__box_layout_width',
                        'transport' => 'postMessage',
                        'default'      => '1200',
                        'control'   => array(
                            'type'         => 'cs_field',
                            'options'      => array(
                                'type'         => 'number',
                                'title'        => __( 'Fixed Layout Width (px)', 'vibranium' ),
                                'dependency'   => array('vbm__box_layout_switch', '==', 'true'),
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
                                'title' => __( 'Custom Sidebar Layout?', 'vibranium' ),
                            ),
                        ),
                    ),
                    array(
                        'name'      => 'vbm__custom_sidebar_width',
                        'transport' => 'postMessage',
                        'default'      => '25',
                        'control'   => array(
                            'type'      => 'cs_field',
                            'options'   => array(
                                'type'         => 'number',
                                'title'        => __( 'Custom Sidebar Width (%)', 'vibranium' ),
                                'dependency'   => array('vbm__custom_sidebar_switch', '==', 'true'),
                            )
                        )
                    ),
                ),
            ),
        ),
    );

    return $options;
}
add_filter( 'cs_customize_options', 'vibranium_customizer_options' );
