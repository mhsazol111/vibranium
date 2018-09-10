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
	class ET_Divi_Font_Style_Option extends WP_Customize_Control {
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
					<span class="et_font_style et_font_value_<?php echo esc_attr( $value ); echo $checked_class; ?>">
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


function mytheme_customize_css() {
    ?>
         <style type="text/css" id="vbm__customizer_css">
             body, ul, li, a, span, p, input, textarea, label { 
                 font-size: <?php echo get_theme_mod( 'vbm__body_font_size_setting', '14'); ?>px; 
                 line-height: <?php echo get_theme_mod( 'vbm__body_line_height_setting', '1.7'); ?>; 
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
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');