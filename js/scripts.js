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
	
	$('#playpause').hover(function(){
		$('#slides').superslides('stop');
		$(this).removeAttr('class', 'pause');
		$(this).attr('class', 'play');
		$('#slides').updated.slides();
	}, function(){
		$('#slides').superslides('play');
		$(this).removeAttr('class', 'play');
		$(this).attr('class', 'pause');
		$('#slides').updated.slides();	
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

	/*Fancybox*/
	$('.fancybox').fancybox({
		openEffect : 'fade',
		closeEffect : 'fade',
		helpers : {
			buttons : {
				position : 'top'
			},
			overlay : {
				css : {
					'background' : 'rgba(0, 0, 0, 0.85)'
				}
			}
		}
	});

	/*ANIMAÇÃO DA LOGO - PÁGINA INICIAL*/
	$('.seta3').delay(200).fadeIn(800);
	$('.seta2').delay(1200).fadeIn(800);
	$('.seta1').delay(2000).fadeIn(800);
	$('.circulologo').delay(200).easyPieChart({
		barColor : '#FFFFFF',
		trackColor : '#0A2E4E',
		scaleColor : false,
		lineCap : 'butt',
		lineWidth : 10,
		animate : 2000,
		size : 250
	});
	$('.home_text1').delay(1200).animate({
		'margin-left' : 20,
		'opacity' : 1
	}, 800);
	$('.home_text2').delay(2000).animate({
		'margin-left' : 30,
		'opacity' : 1
	}, 800);
	$('.home_text3').delay(2800).animate({
		'margin-left' : 20,
		'opacity' : 1
	}, 800);	
	
	/*Efeito do portfolio*/
	$(function() {

		$(' #da-thumbs > li ').each(function() {
			$(this).hoverdir();
		});

	});
	
	/*Efeito do grid de imagem pag sobre*/
	$(function() {

		$('#ri-grid').gridrotator({
			rows : 3,
			columns : 15,
			animType : 'fadeInOut',
			animSpeed : 1000,
			interval : 900,
			step : 1,
			w320 : {
				rows : 3,
				columns : 4
			},
			w240 : {
				rows : 3,
				columns : 4
			}
		});

	});
}); 