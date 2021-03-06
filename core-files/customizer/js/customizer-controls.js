(function($) {
    $(document).ready(function($) {
        // cs-slider
        $('.cs-field-slider').each(function() {
            var dis = $(this),
                input = $('input', dis),
                slider = $('.cs-slider > div', dis),
                data = input.data('slider'),
                val = input.val() || 0,
                step = data.step || 1,
                min = data.min || 0,
                max = data.max || 200;
            slider.slider({
                range: "min",
                value: parseInt(val),
                step: step,
                min: parseInt(min),
                max: parseInt(max),
                slide: function(e, o) {
                    input.val(o.value).trigger('change');
                }
            });
            input.keyup(function() {
                slider.slider("value", parseInt(input.val()));
            });
            
            $('input[type="slider"]').keypress(function(e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    return false
                }
            });

            $('.vbm__reset_slider').on('click', function(event) {
                var $this_input = $(this).closest('li').find('input'),
                    input_name = $this_input.data('customize-setting-link'),
                    input_default = $this_input.data('reset_value');
                $this_input.val(input_default);
                $this_input.change();
            });
        });
        // =========================== Range Slider =====================
        $('input[type=range]').on('mousedown', function() {
            var $range = $(this),
                $range_input = $range.parent().children('.vbm__range-input');
            value = $(this).attr('value');
            $range_input.val(value);
            $(this).mousemove(function() {
                value = $(this).attr('value');
                $range_input.val(value);
            });
        });
        var vibranium_range_input_number_timeout;

        function vibranium_autocorrect_range_input_number(input_number, timeout) {
            var $range_input = input_number,
                $range = $range_input.parent().find('input[type="range"]'),
                value = parseFloat($range_input.val()),
                reset = parseFloat($range.attr('data-reset_value')),
                step = parseFloat($range_input.attr('step')),
                min = parseFloat($range_input.attr('min')),
                max = parseFloat($range_input.attr('max'));
            clearTimeout(vibranium_range_input_number_timeout);
            vibranium_range_input_number_timeout = setTimeout(function() {
                if (isNaN(value)) {
                    $range_input.val(reset);
                    $range.val(reset).trigger('change');
                    return;
                }
                if (step >= 1 && value % 1 !== 0) {
                    value = Math.round(value);
                    $range_input.val(value);
                    $range.val(value);
                }
                if (value > max) {
                    $range_input.val(max);
                    $range.val(max).trigger('change');
                }
                if (value < min) {
                    $range_input.val(min);
                    $range.val(min).trigger('change');
                }
            }, timeout);
            $range.val(value).trigger('change');
        }
        $('input.vbm__range-input').on('change keyup', function() {
            vibranium_autocorrect_range_input_number($(this), 1000);
        }).on('focusout', function() {
            vibranium_autocorrect_range_input_number($(this), 0);
        });
        //Slider Reset
        // $('.vbm__reset_slider').on('click', function(event) {
        //     var $this_input = $(this).closest('label').find('input'),
        //         input_name = $this_input.data('customize-setting-link'),
        //         input_default = $this_input.data('reset_value');
        //     $this_input.val(input_default);
        //     $this_input.change();
        // });
    }); //Document Ready
})(jQuery);