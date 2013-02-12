$(document).ready(function() {
	/*SCROLL DA PÁGINA*/
	$('nav a').click(function(e) {
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

	/*Tooltips*/
	$('#naocurso').tipsy({
		gravity : $.fn.tipsy.autoNS
	});

	$('#html5icon, #css3icon').tipsy({
		gravity: 'se'
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
	$('.seta2').delay(1000).fadeIn(800);
	$('.seta1').delay(1800).fadeIn(800);
	$('.circulologo').delay(200).easyPieChart({
		barColor : '#FFFFFF',
		trackColor : '#0A2E4E',
		scaleColor : false,
		lineCap : 'butt',
		lineWidth : 10,
		animate : 2000,
		size : 250
	});
	$('.home_text1').delay(200).animate({
		'margin-left' : 20,
		'opacity' : 1
	}, 800);
	$('.home_text2').delay(1000).animate({
		'margin-left' : 30,
		'opacity' : 1
	}, 800);
	$('.home_text3').delay(1800).animate({
		'margin-left' : 20,
		'opacity' : 1
	}, 800);

	/*Mapa google*/
	$('#map').gmap().bind('init', function(ev, map) {
		$('#map').gmap('addMarker', {
			'position' : '57.7973333,12.0502107',
			'bounds' : true
		}).click(function() {
			$('#map').gmap('openInfoWindow', {
				'content' : 'Acens'
			}, this);
		});
	});

	/*EFEITOS HOVER DE SERVIÇOS*/
	$('#deskservice').hover(function() {
		this.src = this.src.replace("sistemasdesktop", "sistemasdesktophover");
	}, function() {
		this.src = this.src.replace("sistemasdesktophover", "sistemasdesktop");
	});

	$('#webservice').hover(function() {
		this.src = this.src.replace("sistemasweb", "sistemaswebhover");
	}, function() {
		this.src = this.src.replace("sistemaswebhover", "sistemasweb");
	});

	$('#midiaservice').hover(function() {
		this.src = this.src.replace("midiassociais", "midiassociaishover");
	}, function() {
		this.src = this.src.replace("midiassociaishover", "midiassociais");
	});

	/*Outros efeitos Hover*/
	$('#html5icon').hover(function() {
		this.src = this.src.replace("html5logo", "html5logoHover");
	}, function() {
		this.src = this.src.replace("html5logoHover", "html5logo");
	});

	$('#css3icon').hover(function() {
		this.src = this.src.replace("css3logo", "css3logoHover");
	}, function() {
		this.src = this.src.replace("css3logoHover", "css3logo");
	});
});
