$(document).ready(function() {
	$('#webcirculo img').hover(function() {
		this.src = this.src.replace("sistemasweb", "sistemaswebhover");
	}, function() {
		this.src = this.src.replace("sistemaswebhover", "sistemasweb");
	});

	$('#midiascirculo img').hover(function() {
		this.src = this.src.replace("midiassociais", "midiassociaishover");
	}, function() {
		this.src = this.src.replace("midiassociaishover", "midiassociais");
	});
	
	$('#webcirculo').click(function() {
		$('.backdrop, #webservice_conteudo').css('display', 'block');
	});
	
	$('#deskcirculo').click(function() {
		$('.backdrop, #deskservice_conteudo').css('display', 'block');
	});
	
	$('#midiascirculo').click(function() {
		$('.backdrop, #midiasservice_conteudo').css('display', 'block');
	});
	
	$('.close').click(function() {
		$('.backdrop, #midiasservice_conteudo, #deskservice_conteudo, #webservice_conteudo').css('display','none');	
	});
});
