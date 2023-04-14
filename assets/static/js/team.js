(function ($) {
	function get_yt_code_from_url(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
    var match = url.match(regExp);
    
		return (match&&match[7].length==11)? match[7] : false;
	}

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
	
		// Spinner Heroes
		if($('.svm-spinner').length) {
			$('.svm-spinner').each(function() {
				var _snipper = $(this);
				var _childs = _snipper.data('interval');
				var _timeout = _childs * 600;
				var _delay = 600;
	
				setInterval(function() {
					_snipper.find('.svm-spinner-item').each(function() {
						_snipper.find('.svm-spinner-item').removeClass('svm-block');
						_snipper.find('.svm-spinner-item').addClass('svm-hidden');
	
						$(this).removeClass('svm-hidden');
						$(this).addClass('svm-block');
	
						setTimeout(function() {
	
						}, _delay)
					})
	
					setTimeout(function() {
						_snipper.find('.svm-spinner-item').removeClass('svm-block');
						_snipper.find('.svm-spinner-item').addClass('svm-hidden');
	
						_snipper.find('.svm-spinner-item').first().removeClass('svm-hidden');
						_snipper.find('.svm-spinner-item').first().addClass('svm-block');
					}, ((_childs + 1) * _delay))
				}, (_timeout + ((_childs + 1) * _delay)))
			})
		}

		// Open Media
		if($('.svm-open-media').length) {
			$('.svm-open-media').on('click', (function() {
				var _type = $(this).data('type');
				var _url = $(this).data('url');
				var _code = get_yt_code_from_url(_url);

				if(_type === 'video') {
					$('.svm-content-media').html('<iframe class="svm-w-[330px] md:svm-w-[660px] svm-h-[330px] md:svm-h-[440px] svm-mx-auto svm-rounded-3xl svm-shadow-xl" src="https://www.youtube.com/embed/' + _code + '?controls=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
				}

				if(_type === 'image') {
					$('.svm-content-media').html('<img class="svm-object-cover svm-w-[330px] md:svm-w-[660px] svm-h-[330px] md:svm-h-[440px] svm-mx-auto svm-rounded-3xl svm-shadow-xl" src="' + _url + '" alt="Media" loading="lazy">');
				}

				if(_type === 'video' || _type === 'image') {
					$('.svm-wrap-media').removeClass('svm-invisible');
					$('.svm-wrap-media').addClass('svm-visible');
					
					$('body').removeClass('svm-overflow-y-auto');
					$('body').addClass('svm-overflow-y-hidden');
				}
			}))
		}

		// Close Media
		if($('.svm-close-media').length) {
			$('.svm-close-media').on('click', (function() {
				$('.svm-wrap-media').removeClass('svm-visible');
				$('.svm-wrap-media').addClass('svm-invisible');

				$('body').removeClass('svm-overflow-y-hidden');
				$('body').addClass('svm-overflow-y-auto');

				$('.svm-content-media').html('');
			}))
		}
	}))
})(jQuery);