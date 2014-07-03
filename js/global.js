var help = $('#help');
var h1 = $('h1');

$(window).resize(function() {
  if ($(window).width() < 1184) {
    help.addClass('group');
    h1.addClass('red');
  }
  else {
    help.removeClass('group');
    h1.removeClass('red');
  }
});