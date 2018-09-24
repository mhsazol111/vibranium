<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Heading
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_heading extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo esc_attr( $this->element_before() );
    echo esc_attr( $this->field['content'] );
    echo esc_attr( $this->element_after() );

  }

}
