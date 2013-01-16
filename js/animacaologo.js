$(document).ready(function(){
	$(".seta3").fadeIn(800);
	$(".seta2").delay(800).fadeIn(800);
	$(".seta1").delay(1600).fadeIn(800);
	$('.circulologo').easyPieChart({
        barColor: '#FFFFFF',
        trackColor: '#0A2E4E',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 10,
        animate: 1600,
		size: 250
    });
});