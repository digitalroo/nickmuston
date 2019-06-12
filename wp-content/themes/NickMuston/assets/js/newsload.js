(function($) {
	jQuery(window).on('load', function(){
		$('.news-cards').masonry({
		  itemSelector: '.news-card',
		});
	})
})(jQuery);
