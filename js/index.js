// Randomly rotates through silhouette images of musicians on landing page

function musicianSilhouetteRandomizer() {
	
	images = new Array(5);  
	  
	images[0] = "<img src='img/landing-page/rock-band.png' alt='Rock band silhouette'>";  
	  
	images[1] = "<img src='img/landing-page/jazz-band.png' alt='Jazz band silhouette'>";  
	  
	images[2] = "<img src='img/landing-page/bluegrass-band.png' alt='Bluegrass band silhouette'>";  
	  
	images[3] = "<img src='img/landing-page/hip-hop-duo.png' alt='Hip-hop duo silhouette'>";  
	  
	images[4] = "<img src='img/landing-page/dj-with-crowd.png' alt='Silhouette of DJ with crowd'>";  
	  
	index = Math.floor(Math.random() * images.length);  
  
	document.write(images[index]);  

}


