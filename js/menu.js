$(document).ready(function() {
	var windowH = $(window).height();
	var stickToBot = windowH - $('#menuWrapper').outerHeight(true);

	$('#menuWrapper').css({
		'top' : stickToBot + 'px'
	});

	$(window).scroll(function() {
		var scrollVal = $(this).scrollTop();
		if (scrollVal > stickToBot) {
			$('#menuWrapper').css({
				'position' : 'fixed',
				'top' : '0px'
			});
			$('#home').animate({
				'top' : 10,
			}, 0);

			$('#home').attr('class', 'logosombra');
		} else {
			$('#menuWrapper').css({
				'position' : 'absolute',
				'top' : stickToBot + 'px'
			});
			$('#home').animate({
				'top' : -33,
			}, 0);

			$('#home').removeAttr('class', 'logosombra');
		}
	});
});
