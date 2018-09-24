<?php



if ( class_exists( 'WP_Customize_Control' ) ) {

    /**
    * Range-based sliding value picker for Customizer
    */
    class Vibranium_Range_Option extends WP_Customize_Control {
        public $type = 'range';
        
        public function render_content() {
            ?>
    <label>
        <?php if ( !empty( $this->label ) ) : ?>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <?php endif;
            if ( !empty( $this->description ) ) : ?>
            <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
        <?php endif; ?>
        <input type="<?php echo esc_attr( $this->type ); ?>" <?php $this->input_attrs(); ?> value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> data-reset_value="<?php echo esc_attr( $this->setting->default ); ?>" />
        <input type="number" <?php $this->input_attrs(); ?> class="vbm__range-input" value="<?php echo esc_attr( $this->value() ); ?>" />
        <span class="vbm__reset_slider"><span class="dashicons dashicons-update"></span></span>
    </label>
    <?php
        }
    }

    /**
	 * Font style control for Customizer
	 */
	class Vibranium_Font_Style_Option extends WP_Customize_Control {
		public $type = 'font_style';
		public function render_content() {
			?>
			<label>
				<?php if ( ! empty( $this->label ) ) : ?>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php endif;
				if ( ! empty( $this->description ) ) : ?>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php endif; ?>
			</label>
			<?php $current_values = explode('|', $this->value() );
			if ( empty( $this->choices ) )
				return;
			foreach ( $this->choices as $value => $label ) :
				$checked_class = in_array( $value, $current_values ) ? ' et_font_style_checked' : '';
				?>
					<span class="et_font_style et_font_value_<?php echo esc_attr( $value ); echo esc_attr( $checked_class ); ?>">
						<input type="checkbox" class="et_font_style_checkbox" value="<?php echo esc_attr( $value ); ?>" <?php checked( in_array( $value, $current_values ) ); ?> />
					</span>
				<?php
			endforeach;
			?>
			<input type="hidden" class="et_font_styles" <?php $this->input_attrs(); ?> value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> />
			<?php
		}
    }


}