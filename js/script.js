$(function() {
	//Menu
	if ($('.main-nav').length) {
	    $(".main-nav ul li").each(function (index, obj) {
	      if ($(this).has("ul").length) {
	        $(this).find('a').eq(0).append('<span class="icon"><i class="fal fa-chevron-down"></i></span>');
	        $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
	      };
	    });
	    $('.header .main-nav > ul li').hover(
		    function() {
		        $('.header .main-nav > ul li').removeClass('activeX');
		        $(this).find('ul').eq(0).stop(false, true).slideDown(200);
		        $(this).parent().css('overflow', 'visible');
		    },
		    function() {
		        $('.header .main-nav > ul li').removeClass('activeX');
		        $(this).find('ul').eq(0).stop(false, true).slideUp(200);
		    }
	    );
	};
	function addOverlay(parent) {
    	if (!$(parent + ' .overlay').length) {
  			$(parent).prepend('<div class="overlay"></div>');
  		}
    }
    function removeOverlay(parent) {
    	if ($(parent + ' .overlay').length) {
  			$(parent + ' .overlay').remove();
  		}
    }
    $('.overlay').click(function (e) {
    	alert('sfdsdfsf');
    	$(".main-nav ul > li").removeClass('active');
    	$(this).remove();
    });
	//DateTimepicker
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

	//Datepiker
	if ($('.datepicker').length) {
		$('.datepicker').datepicker({
			format: 'dd-mm-yyyy',
		});
	}


	//Slider
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
	if ($('.customer-information-slider').length) {
		$('.customer-information-slider').not('.slick-initialized').slick({
			autoplay: false,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			prevArrow: $('.customer-information-slider-prev'),
			nextArrow: $('.customer-information-slider-next'),
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
	
});
if ($('.counter').length) {
	$('.counter').countUp();
}

$('.bubble-buttons .main-icon').click(function (e) {
	if ($('.bubble-buttons').hasClass('active')) {
		$('.bubble-buttons').removeClass('active');
	}
	else {
		$('.bubble-buttons').addClass('active');
	}
});
$('#register-form-show').click(function (e) {
	$('#login-form').modal('toggle')
	$('#register-form').modal('toggle')
});