$(function() {
	if($('#appointment-2').length) {
		$('#appointment-2').datetimepicker({
			autoclose: true,
	   		format: 'dd-mm-yyyy hh:ii',
		});
	}
	if($('#appointment').length) {
		$('#appointment').datetimepicker({
			autoclose: true,
	   		format: 'dd-mm-yyyy hh:ii',
		});
	}
	// if($('#start-date').length) {
	// 	$('#start-date').datetimepicker({
	// 		autoclose: true,
	//    		format: 'dd-mm-yyyy',
	// 	});
	// }
	// if($('#birthday').length) {
	// 	$('#birthday').datetimepicker({
	// 		autoclose: true,
	//    		format: 'dd-mm-yyyy',
	// 	});
	// }
});
$(function() {
	if ($('.slider').length) {
		$('.slider').not('.slick-initialized').slick({
			dots: true,
			autoplay: true,
			fade : true,
			adaptiveHeight: true,
			prevArrow: $('.main-slider-prev'),
		  	nextArrow: $('.main-slider-next'),
		});
	}
	if ($('.video-slider').length) {
		$('.video-slider').not('.slick-initialized').slick({
			autoplay: true,
			fade : true,
			adaptiveHeight: true,
			prevArrow: $('.video-slider-prev'),
		  	nextArrow: $('.video-slider-next'),
		});
	}
	if ($('.promotion-banner').length) {
		$(".promotion-banner").not('.slick-initialized').slick({
			dots: true,
			autoplay: true,
			arrows : false,
			adaptiveHeight: true,
		});
	}
	if ($('.promotion-slider').length) {
		$('.promotion-slider').not('.slick-initialized').slick({
			autoplay: false,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			prevArrow: $('.promotion-slider-prev'),
			nextArrow: $('.promotion-slider-next'),
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});
	}
	if ($('.comments-slider').length) {
		$('.comments-slider').not('.slick-initialized').slick({
			autoplay: false,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			prevArrow: $('.comments-slider-prev'),
			nextArrow: $('.comments-slider-next'),
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});
	}
	if ($('.partner-slider').length) {
		$('.partner-slider').not('.slick-initialized').slick({
			dots: true,
			autoplay: true,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			prevArrow: $('.partner-slider-prev'),
			nextArrow: $('.partner-slider-next'),
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});
	};
	if ($('.certificate-slider').length) {
		$('.certificate-slider').not('.slick-initialized').slick({
			dots: true,
			autoplay: true,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			prevArrow: $('.certificate-slider-prev'),
			nextArrow: $('.certificate-slider-next'),
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});
	};
	if ($('.library-slider').length) {
		$('.library-slider').not('.slick-initialized').slick({
			dots: true,
			autoplay: true,
			infinite: false,
			arrows: false,
			speed: 300,
		});
	};
	if ($('.about-campus-slider').length) {
		$('.about-campus-slider').not('.slick-initialized').slick({
			autoplay: true,
			fade : true,
			// arrows : false,
			adaptiveHeight: true,
			prevArrow: $('.about-campus-slider-prev'),
		  	nextArrow: $('.about-campus-slider-next'),
		});
	}
	if ($('.datepicker').length) {
		$('.datepicker').datepicker({
			format: 'dd-mm-yyyy',
		});
	}
});
if ($('.counter').length) {
	$('.counter').countUp();
}
