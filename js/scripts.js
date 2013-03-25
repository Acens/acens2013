$(document).ready(function() {
	/*SCROLL DA PÁGINA*/
	$('.scroll').click(function(e) {
		$.scrollTo(this.hash || 0, 500);
		e.preventDefault();
	});

	/*MENU*/
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

	/*Superslide*/
	$('#slides').superslides({
		slide_easing : 'easeInOutCubic',
		slide_speed : 800,
		pagination : true,
		scrollable : false,
	});
	
	/*Hack para o placeholder do IE*/
	$('input[placeholder], textarea[placeholder]').each(function() {
		var ph = $(this).attr('placeholder')
		$(this).val(ph).focus(function() {
			if ($(this).val() == ph)
				$(this).val('')
		}).blur(function() {
			if (!$(this).val())
				$(this).val(ph)
		})
	});
	
	/*Colorbox*/
	$(".inline").colorbox({inline:true, transition:"fade", width:"85%", height:"85%"});
	$(".portfolioimg").colorbox({rel:'portfolioimg', transition:"fade"});
	
	/*Tooltips*/
	$('#naocurso').tipsy({
		gravity : $.fn.tipsy.autoNS
	});

	$('#html5icon, #css3icon').tipsy({
		gravity : 'se'
	});

	/*Efeito do portfolio*/
	$(function() {
		$(' #da-thumbs > li ').each(function() {
			$(this).hoverdir();
		});

	});

}); 