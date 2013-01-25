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
});
