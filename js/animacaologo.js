$(document).ready(function(){
	$('.seta3').delay(200).fadeIn(800);
	$('.seta2').delay(1000).fadeIn(800);
	$('.seta1').delay(1800).fadeIn(800);
	$('.circulologo').delay(200).easyPieChart({
        barColor: '#FFFFFF',
        trackColor: '#0A2E4E',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 10,
        animate: 2000,
		size: 250
    });
	$('.home_text1').delay(200).animate({
		'margin-left': 20,
		'opacity': 1
	},800);
	$('.home_text2').delay(1000).animate({
		'margin-left': 30,
		'opacity': 1
	},800);
	$('.home_text3').delay(1800).animate({
		'margin-left': 20,
		'opacity': 1
	},800);
});