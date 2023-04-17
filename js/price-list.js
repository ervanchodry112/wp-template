/** @format */

// bootstrap tooltip
$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});

/* ----- ACCORDION ----- */
$(document).ready(function () {
	$('.radio-accordion-title').on('click', 'label', function (e) {
		var inputPressed = $(this).parent().prev('input[type=radio]');
		if (inputPressed.is(':checked')) {
			e.preventDefault();
			inputPressed.prop('checked', false);
		}
	});
});

// pricing accordion
$('ul').on('click', 'li', function () {
	var pos = $(this).index() + 2;
	$('tr').find('td:not(:eq(0))').hide();
	$('td:nth-child(' + pos + ')').css('display', 'table-cell');
	$('tr').find('th:not(:eq(0))').hide();
	$('li').removeClass('active');
	$(this).addClass('active');
});

var accordionHeader = $(
	'#pricing-with-accordion .accordion-row .accordion-header'
);
accordionHeader.each(function () {
	var accordionChild = $(this).parent().find($('.accordion-child'));
	var childCount = accordionChild.length;
	var fiturCol = $(this).find('.fitur');
	var angleDown = '<i class="uil uil-angle-down d-flex"></i>';
	var angleUp = '<i class="uil uil-angle-up"></i>';
	if (childCount > 0) {
		$(this).addClass('active');
		fiturCol.append(angleDown);
		fiturCol.append(angleUp);
	} else {
		$(this).removeClass('active');
		fiturCol.find('.uil').remove();
	}
});

var expandButton = $(
	'#pricing-with-accordion .accordion-row .accordion-header.active .fitur i'
);
expandButton.on('click', function () {
	$(this).closest('.accordion-row').toggleClass('expanded');
	var fiturCol = $(this).parent();
	var angleUp = fiturCol.find('.uil-angle-up');
	var angleDown = fiturCol.find('.uil-angle-down');
	angleUp.toggleClass('d-flex');
	angleDown.toggleClass('d-flex');
});

// Initialize the media query
var mediaQuery = window.matchMedia('(min-width: 990px)');

// Add a listen event
mediaQuery.addListener(doSomething);

// Function to do something with the media query
function doSomething(mediaQuery) {
	if (mediaQuery.matches) {
		$('.sep').attr('colspan', 6);
	} else {
		$('.sep').attr('colspan', 2);
	}
}

// On load
doSomething(mediaQuery);
