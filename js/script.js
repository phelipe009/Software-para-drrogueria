$(document).ready(function() {

	// OWL CAROUSEL INSTALLATION
	$("#testimonial-carousel").owlCarousel({
		items:1,
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,1], // betweem 900px and 601px
      	itemsTablet: [600,1],
		itemsMobile :[479,1],
		pagination:true
	});
	$("#home-slider").owlCarousel({
		items:1,
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,1], // betweem 900px and 601px
      	itemsTablet: [600,1],
		itemsMobile :[479,1],
		pagination:false,
		navigation:true,
		navigationText:["<i class='ion-ios-arrow-left'></i>","<i class='ion-ios-arrow-right'></i>"]

	});

	/* Navigation Menu*/
	var offsettop = $('.navbar').offset().top;
	if (offsettop > 50) {
        $('.navbar').css('background-color', 'black');
        $("#scroll-top-div").fadeIn('500');
        $( "#con button" ).css("height", "90.5%");
        $( "#con button" ).css("width", "11%");
        $( ".navbar" ).css("opacity", "0.9");
    } else {
        $("#scroll-top-div").fadeOut('500');
        $( "#con button" ).css("height", "100%");
        $( "#con button" ).css("width", "13%");
        $( ".navbar" ).css("opacity", "0.8");
    }
	var num = 50; //number of pixels before modifying styles

	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() > num) {
	        $('.navbar').addClass('colored-nav');
	        $('.navbar').css('background-color', 'black');
	        $("#scroll-top-div").fadeIn('500');
	        $( "#con button" ).css("height", "90.5%");
	        $( "#con button" ).css("width", "11%");
	        $( ".navbar" ).css("opacity", "0.9");
	    } else {
	        $('.navbar').removeClass('colored-nav');
	        $('.navbar').removeClass('gradient-violat');
	        $("#scroll-top-div").fadeOut('500');
	         $( "#con button" ).css("height", "100%");
	        $( "#con button" ).css("width", "13%");
	        $( ".navbar" ).css("opacity", "0.8");
	    }
	});



	/* SMOOTH SCROLLING SCRIPT*/
	// Add smooth scrolling to all links
	$(".navbar-nav li a").on('click', function(event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function(){

				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		} // End if
	});

	/****************************BACK TO TOP************************************/
	$('#scroll-top-div').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
 
});