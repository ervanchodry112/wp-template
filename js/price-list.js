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


var accordionHeader = $('# .accordion-row .accordion-header');
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
