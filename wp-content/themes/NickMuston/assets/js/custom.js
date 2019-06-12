AOS.init({
    once: true,
});

/* sticky header */
function myFunction(x) {
  x.classList.toggle("change");
}

jQuery(document).ready(function(){
  jQuery(".menu-icon-main").click(function(){
      jQuery(".navigation").slideToggle(300);
      jQuery("body").toggleClass("body-hide");
  });
  jQuery(".mobile-menu .menu-item-has-children > a").click(function(){
      jQuery(this).parent('li').find('ul').slideToggle(300);
  });

  /* phone number */
  jQuery('[id^=input_2_2]').keypress(validateNumber);
  jQuery('[id^=input_1_3]').keypress(validateNumber);
});
  
function validateNumber(event) {
  var key = window.event ? event.keyCode : event.which;
  if (event.keyCode === 8 || event.keyCode === 46) {
    return true;
    } else if ( key < 48 || key > 57 ) {
    return false;
    } else {
  return true;
  }
};

$(window).on("scroll", function() {
	if($(window).scrollTop() > 100) {
		$(".header").addClass("sticky");
	} else {
		$(".header").removeClass("sticky");
	}
});

(function($) {
  $('#recentValuations').masonry({
    itemSelector: '.valuation',
    horizontalOrder: true
  });
  
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items:1,
      nav:true,
      loop:true,
      autoplay:false,
      autoplayTimeout:7000,
      slideSpeed :5000,
      slideTransition: 'linear',
		autoHeight:true	
    });
  });
})(jQuery);