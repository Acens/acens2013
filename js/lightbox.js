$(document).ready(function() {

	$('.fancybox').fancybox({
		openEffect : 'fade',
		closeEffect : 'fade',
		helpers : {
			buttons : {
				position : 'top'
			},
			overlay : {
            css : {
                'background' : 'rgba(0, 0, 0, 0.80)'
            }
        }
		}
	});

});
