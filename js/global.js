// Makes logo lighter if you hover over it

$(document).ready(function() {

	var navbarBrandImg = $('.navbar-brand-img-js');

	$(navbarBrandImg).hover(function() 
	{	
		if (navbarBrandImg.attr('src') == 'img/nav-and-footer/musiclaps-logo-original-darker.png')
		{
			navbarBrandImg.attr('src', 'img/nav-and-footer/musiclaps-logo-original-lighter.png');
		} else {
			navbarBrandImg.attr('src', 'img/nav-and-footer/musiclaps-logo-original-darker.png');
		}
	});

});