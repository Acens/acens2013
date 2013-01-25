function troca(img) {
	$('#slider').cycle('pause');
	$('#site').fadeIn(1000);
	$('#slider').fadeOut(300);
	link = "http://www." + img + ".com.br";
	imagem = "img/" + img + ".png";
	window.document.getElementById("site").src=imagem;
	window.document.getElementById("link").href=link;
}

function ligar() {
	$('#slider').fadeIn(1000);
	$('#site').fadeOut(300);
    $('#slider').cycle('resume');
}
/*
- Tipos de Efeitos para slides:
blindX, blindY, blindZ, cover, curtainX, curtainY, fade, fadeZoom, growX, growY,
scrollUp, scrollDown, scrollLeft, scrollRight, scrollHorz, scrollVert, shuffle,
slideX, slideY, toss, turnUp, turnDown, turnLeft, turnRight, uncover, wipe e zoom
*/
function slider() {
	$("#slider").cycle({
		fx: 'toss',
		speed: 2000,
		timeout: 3000,
		prev: '#anterior',
		next: '#proximo',
		pager: '#pager',
	})
}