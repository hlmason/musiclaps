var sign_in_out = $('.sign-in-out-js');

// Makes record buttons larger upon hover
$(sign_in_out).mouseenter(function() {
  	$(this).css('width', '100%').css('margin-top', -20);
});

$(sign_in_out).mouseleave(function() {
		$(this).css('width', '90%').css('margin-top', -15);
});