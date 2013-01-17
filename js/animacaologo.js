$(document).ready(function(){
	$(".seta3").delay(200).fadeIn(800);
	$(".seta2").delay(1000).fadeIn(800);
	$(".seta1").delay(1800).fadeIn(800);
	$('.circulologo').easyPieChart({
        barColor: '#FFFFFF',
        trackColor: '#0A2E4E',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 10,
        animate: 2000,
		size: 250
    });
});