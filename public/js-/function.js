$(document).ready(function () {
	$('.your-class').slick({
		lazyLoad: 'ondemand',
		//centerMode: true,
		centerPadding: '60px',
		slidesToScroll: 1,

		autoplay: true,
		autoplaySpeed: 2000,
		slidesToShow: 3,
		responsive: [{
			breakpoint: 1200,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 2
			}
		}, {
			breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}]
	});


	window.onscroll = function () {
		myFunction()
	};
	var navbar = document.getElementById("header");
	var sticky = navbar.offsetTop;

	function myFunction() {
		if (window.pageYOffset > sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	}
});

// Add scrollspy to <body>
$('body').scrollspy({
	target: ".navbar",
	offset: 50
});

// Add smooth scrolling on all links inside the navbar
$("#myScrollspy a").on('click', function (event) {
	// Make sure this.hash has a value before overriding default behavior
	if (this.hash !== "") {
		// Prevent default anchor click behavior
		event.preventDefault();

		// Store hash
		var hash = this.hash;

		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		// headerHeight = $(".header").height();

		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 800, function () {

			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
		});
	} // End if
});
