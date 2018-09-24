<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

class CSFramework_Option_slider extends CSFramework_Options {
    public function __construct($field, $value = '', $unique = '') {
        parent::__construct( $field, $value, $unique );
    }

    public function output() {
        $options = array(
            'step'  => ( empty( $this->field['options']['step'] ) ) ? 1 : $this->field['options']['step'],
            'unit'  => ( empty( $this->field['options']['unit'] ) ) ? '' : $this->field['options']['unit'],
            'min'   => ( empty( $this->field['options']['min'] ) ) ? 0 : $this->field['options']['min'],
            'max'   => ( empty( $this->field['options']['max'] ) ) ? 200 : $this->field['options']['max']
        );

        echo esc_attr( $this->element_before() );
        echo '<div class="cs-slider"><div></div></div>';
        echo '<input data-slider=\'' . json_encode( $options ) . '\' type="' . $this->element_type() . '" name="' . $this->element_name() . '" value="' . $this->element_value() . '"' . $this->element_class() . $this->element_attributes() . ' data-reset_value="'. $this->element_value() .'" />';
        echo '<span style="display:none" class="vbm__reset_slider"><span class="dashicons dashicons-update"></span></span>';
        echo esc_attr( esc_attr( $this->element_after() ) );
    }
}