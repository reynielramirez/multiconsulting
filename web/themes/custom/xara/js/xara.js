/* Load jQuery.
--------------------------*/
jQuery(document).ready(function ($) {

	const header = document.getElementById('header');
	const space_top = document.getElementById('space-top');
	const scrollTopBtn = document.getElementById('scrolltop');
	const scrollOffset = 50;

    AOS.init();
 
    $(".region-content-home-top .block, .region-content-home-bottom .block").wrapInner( '<div class="container"></div>' );
  	
	window.addEventListener('scroll', function() {
		
		if (window.scrollY > 40) { 
			header.classList.remove('in-top');
			space_top.classList.remove('in-top');
		} else {
			header.classList.add('in-top');
			space_top.classList.add('in-top');
		}

		const scrollPosition = window.innerHeight + window.scrollY;
    	const pageHeight = document.body.offsetHeight;

		if (scrollPosition >= pageHeight - scrollOffset) {
			const distanceFromEnd = pageHeight - scrollPosition;
			const newBottom = 60 - (scrollOffset - distanceFromEnd);
			scrollTopBtn.style.bottom = `${Math.min(60, Math.max(10, newBottom))}px`;
		} else {
			scrollTopBtn.style.bottom = '10px';
		}

	});
  
/* End document
--------------------------*/
});