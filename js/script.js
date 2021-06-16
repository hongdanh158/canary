if($('.datetimepicker').length) {
	$('.datetimepicker').datetimepicker({
		autoclose: true,
   		format: 'dd-mm-yyyy hh:ii'
	});
}
if ($('.slider').length) {
	$('.slider').slick({
		autoplay: true,
		fade : true,
		// arrows : false,
		adaptiveHeight: true,
		prevArrow: $('.main-slider-prev'),
	  	nextArrow: $('.main-slider-next'),
	});
}
if ($('.promotion-banner').length) {
	$('.promotion-banner').slick({
		dots: true,
		autoplay: true,
		arrows : false,
		adaptiveHeight: true,
	});
}
if ($('.promotion-slider').length) {
	$('.promotion-slider').slick({
		autoplay: true,
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
if ($('.partner-slider').length) {
	$('.partner-slider').slick({
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
}