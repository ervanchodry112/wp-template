(function ($) {
	$(window).on('load', (function() {
		// Match Height
		if($('.svm-match-height').length) {
			$('.svm-match-height').each(function() {
				var _max_height = 0;
	
				$('.svm-match-height .svm-match-item').each(function() {
					var _height = $(this).outerHeight();
	
					if(_height > _max_height) {
						_max_height = _height;
					}
				})
	
				$(this).find('.svm-match-item').css({
					'min-height': _max_height
				});
			})
		}
	
		// Prev Button
		if($('.svm-prev-button').length) {
			$('.svm-prev-button').on('click', (function() {
				var _disabled = $(this).attr('disabled');
				var _target = $(this).data('target');
				var _min_width = 0;
				var _gap = $(_target).data('gap');
				var _scroll_pos = $(_target).scrollLeft();
	
				if (typeof _disabled !== 'undefined' && _disabled !== false) {
					return false;
				}
	
				$(_target + ' .svm-slide-item').each(function() {
					var _width = $(this).outerWidth();
	
					if(_min_width == 0) {
						_min_width = _width;
					}
	
					if(_width < _min_width) {
						_min_width = _width;
					}
				})
	
				_min_width += _gap;
				
				$('.svm-prev-button').attr('disabled', 'disabled');
				$('.svm-next-button').attr('disabled', 'disabled');
					$(_target).animate({scrollLeft: _scroll_pos - _min_width}, 600);
	
				setTimeout(function() {
					$('.svm-prev-button').removeAttr('disabled');
					$('.svm-next-button').removeAttr('disabled');
				}, 1000)
			}))
		}
	
		// Next Button
		if($('.svm-next-button').length) {
			$('.svm-next-button').on('click', (function() {
				var _disabled = $(this).attr('disabled');
				var _target = $(this).data('target');
				var _min_width = 0;
				var _gap = $(_target).data('gap');
				var _scroll_pos = $(_target).scrollLeft();
	
				if (typeof _disabled !== 'undefined' && _disabled !== false) {
					return false;
				}
	
				$(_target + ' .svm-slide-item').each(function() {
					var _width = $(this).outerWidth();
	
					if(_min_width == 0) {
						_min_width = _width;
					}
	
					if(_width < _min_width) {
						_min_width = _width;
					}
				})
	
				_min_width += _gap;
				
				$('.svm-next-button').attr('disabled', 'disabled');
				$('.svm-prev-button').attr('disabled', 'disabled');
					$(_target).animate({scrollLeft: _scroll_pos + _min_width}, 600);
	
				setTimeout(function() {
					$('.svm-next-button').removeAttr('disabled');
					$('.svm-prev-button').removeAttr('disabled');
				}, 1000)
			}))
		}
	}))
})(jQuery);