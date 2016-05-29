jQuery(document).ready(function($){

	var clickedAChile = false;

	$('.menu-item').click(function(event){
		if (clickedAChile === true) {
			clickedAChile = false;
		} else {
			var chileItem = $(this).children('.sub-menu');
			if (chileItem.length){
				event.preventDefault();
				if (chileItem.css('display') === 'none') {
					chileItem.animate({height: 'toggle'}, 500 );
				} else {
					chileItem.animate({height: 'toggle'}, 200);
				}
				
			} else {
				clickedAChile = true;
			}
		}
	});
});