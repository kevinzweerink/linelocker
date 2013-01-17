function equalHeights (element) {
	
	var elementHeight = 0;
	
	element.each(function(i) {
		tmpHeight = $(this).outerHeight();
		if (tmpHeight > elementHeight) {
			elementHeight = tmpHeight;
		}
	});
	
	element.css('height', elementHeight);
	
	
}

$(document).ready(function() {

	$('.message').css({'height':'0','padding':'0','border':'none'});

	equalHeights($('.line_descrip'));
	equalHeights($('.footer_el'));
	
	$('header').css('top','-100px');
	
	var toggle_switch = 0;
	
	$('.notifier a').click(function(event) {
		event.preventDefault();
		if (toggle_switch == 0) {
			$('.message').css({'height':'65px','padding':'1em 0','border-top':'1px solid #eee'});
			toggle_switch = 1;
		} else {
			$('.message').css({'height':'0','padding':'0','border':'none'});
			toggle_switch = 0;
		}
	})
	
	var mastHeight = $('.mast_head').outerHeight();
	$('.message_center').css('margin-top',mastHeight);
	
	$(document).scroll(function() {
	
		var position = $('body').scrollTop();
		
		if (position > mastHeight-100) {
			$('header').css('top','0');
		} else {
			$('header').css('top','-100px');
		}
		
		$('.mast_head').css('opacity',1 - (position/(mastHeight-50)));
		
	});
	
});