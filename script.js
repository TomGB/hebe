$(document).ready(function() {
  $('.subject').on('click',function () {
    var content = $(this).closest('.dropdown').children('.topics');

    console.log(content);

    if (content.hasClass('visible')) {
      content.removeClass('visible');
    } else {
      content.addClass('visible');
    }
  })
});
