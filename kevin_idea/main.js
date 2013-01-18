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
			$('.message').css({'height':'80px','padding':'1em 0','border-top':'1px solid #eee'});
			$('.triangle').css({'transform':'rotate(90deg)','margin-top':'12px','margin-left':'-15px'});
			$('.notifier').css('margin-left','15px');
			toggle_switch = 1;
		} else {
			$('.message').css({'height':'0','padding':'0','border':'none'});
			$('.triangle').css({'transform':'rotate(0deg)','margin-top':'2px','margin-left':'0'});
			$('.notifier').css('margin-left','0px');
			toggle_switch = 0;
		}
	})
	
	var mastHeight = $('.mast_head').outerHeight();
	$('.message_center').css('margin-top',mastHeight);
	
	$(window).scroll(function() {
	
		var position = $(window).scrollTop();
		
		var headerHeight = $('header').outerHeight();
		
		console.log($(window).scrollTop());
		
		var startPos = (mastHeight - 300);
		var target = (mastHeight - startPos);
		var adjPos = (position + headerHeight);
		
		$('.mast_head').css('opacity', (1 - (position/(mastHeight-50))));
		
		if (adjPos <= (startPos-1)) {
			$('header').css('top', '-100px');
		} else if ((adjPos <= mastHeight) && (adjPos >= startPos)) {
			$('header').css('top',('-' + ( 100 - ((adjPos - startPos)/3) ) + 'px'));
		} else {
			$('header').css('top','0');
		}
		
	});
	
});