/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */
(function ($) {
	$(document).ready(function () {
		
		wp.customize('_cs_customize_options[vbm__box_layout_switch]', function(value) {
			value.bind(function (to) {
				if (to == true) {
					$('#vbm__page-container').addClass('vbm__box_layout');
					
					wp.customize('_cs_customize_options[vbm__box_layout_width]', function(value) {
						value.bind(function (to) {
							$('#vbm__page-container.vbm__box_layout').css('max-width', to + 'px');
						});
					});

				} else {
					$('#vbm__page-container').removeClass('vbm__box_layout');
					$('#vbm__page-container').css('max-width', '');
				}
			});
		});
		wp.customize('_cs_customize_options[vbm__box_layout_width]', function(value) {
			value.bind(function (to) {
				$('#vbm__page-container.vbm__box_layout').css('max-width', to + 'px');
			});
		});

	}); // Document Ready
})(jQuery);

    // //Update the site description in real time...
    // wp.customize('vbm__body_font_size_setting', function(value) {
    //     value.bind(function(to) {
    //         $('p, span, input, label, a, li').css('font-size', to + 'px');
    //     });
    // });
    // wp.customize('vbm__body_line_height_setting', function(value) {
    //     value.bind(function(to) {
    //         $('p, span, input, label, a, li').css('line-height', to);
    //     });
    // });

    // wp.customize('vbm__h1_font_size_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h1').css('font-size', to + 'px');
    //     });
    // });
    // wp.customize('vbm__h1_line_height_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h1').css('line-height', to);
    //     });
    // });

    // wp.customize('vbm__h2_font_size_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h2').css('font-size', to + 'px');
    //     });
    // });
    // wp.customize('vbm__h2_line_height_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h2').css('line-height', to);
    //     });
    // });

    // wp.customize('vbm__h3_font_size_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h3').css('font-size', to + 'px');
    //     });
    // });
    // wp.customize('vbm__h3_line_height_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h3').css('line-height', to);
    //     });
    // });

    // wp.customize('vbm__h4_font_size_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h4').css('font-size', to + 'px');
    //     });
    // });
    // wp.customize('vbm__h4_line_height_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h4').css('line-height', to);
    //     });
    // });
    // wp.customize('vbm__body_text_color_setting', function(value) {
    //     value.bind(function(to) {
    //         $('body').css('color', to);
    //     });
    // });
    // wp.customize('vbm__heading_text_color_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h1, h2, h3, h4, h5, h6').css('color', to);
    //     });
    // });
    // wp.customize('vbm__body_link_color_setting', function(value) {
    //     value.bind(function(to) {
    //         $('body a').css('color', to);
    //     });
    // });
    // wp.customize('vbm__header_font_weight_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h1, h2, h3, h4, h5, h6').css('font-weight', to);
    //     });
    // });
    // wp.customize('vbm__header_font_style_setting', function(value) {
    //     value.bind(function(to) {
    //         $('h1, h2, h3, h4, h5, h6').css('font-style', to);
    //     });
    // });

    // wp.customize('vbm__box_width_setting', function(value) {
    //     value.bind(function(to) {
    //         $('#vbm__page-container').css({
    //             'margin-left': 'auto',
    //             'margin-right': 'auto',
    //             'box-shadow': '0 0 10px rgba(0,0,0,.2)',
    //             'max-width': parseInt(to) + 100 + 'px'
    //         });
    //     });
    //     value.bind(function(to) {
    //         $('#vbm__page-container .container').css('max-width', to + 'px');
    //     });
    // });
