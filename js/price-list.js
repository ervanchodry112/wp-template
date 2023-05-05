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
