$(function() {
  $('.projects-btn').on('click', function() {
    $(document).scrollTo($('.my-projects'), 500, {easing:'easeOutQuart'});
  })
  $('.hacks-btn').on('click', function() {
    $(document).scrollTo($('.my-hacks'), 500, {easing:'easeOutQuart'});
  })
});