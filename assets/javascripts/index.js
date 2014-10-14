// Randomly rotates through silhouette images of musicians on landing page

function musicianSilhouetteRandomizer() {
	
	images = new Array(5);  
	  
	images[0] = "<img src='assets/images/landing-pg/rock-band.png' alt='Rock band silhouette'>";  
	  
	images[1] = "<img src='assets/images/landing-pg/jazz-band.png' alt='Jazz band silhouette'>";  
	  
	images[2] = "<img src='assets/images/landing-pg/bluegrass-band.png' alt='Bluegrass band silhouette'>";  
	  
	images[3] = "<img src='assets/images/landing-pg/hip-hop-duo.png' alt='Hip-hop duo silhouette'>";  
	  
	images[4] = "<img src='assets/images/landing-pg/dj-with-crowd.png' alt='Silhouette of DJ with crowd'>";  
	  
	index = Math.floor(Math.random() * images.length);  
  
	document.write(images[index]);  

}


// Makes logo lighter if you hover over it

// $(document).ready(function() {

// 	var navbarBrandImg = $('.navbar-brand-img-js');

// 	$(navbarBrandImg).hover(function() 
// 	{	
// 		if (navbarBrandImg.attr('src') == 'assets/images/header-and-footer/musiclaps-logo-original-lighter.png')
// 		{
// 			navbarBrandImg.attr('src', 'assets/images/header-and-footer/musiclaps-logo-original-darker.png');
// 		} else {
// 			navbarBrandImg.attr('src', 'assets/images/header-and-footer/musiclaps-logo-original-lighter.png');
// 		}
// 	});

// });


