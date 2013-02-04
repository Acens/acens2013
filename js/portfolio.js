var img = new Array(4);
img[0] = new Image();
img[0].src = "img/portfolio/acens.png"; 
img[1] = new Image();
img[1].src = "img/portfolio/harmonyfortaleza.png";
img[2] = new Image();
img[2].src = "img/portfolio/janinesimoes.png";
img[3] = new Image();
img[3].src = "img/portfolio/rict.png";

function ampliar(number) {
	window.document.getElementById('ampliacao').style.opacity = 1;
	window.document.getElementById('ampImag').style.opacity = 1;
	$('#ampliacao').fadeIn();
	$('#ampliacao').transition({ scale: [4,1] },400);
	$('#ampliacao').transition({ scale: [4,8] },500);
	$('#ampImag').delay(1500).fadeIn(500);

	var texto;
	switch(number) {
		case 0: texto = "&nbsp; &nbsp; &nbsp; Texto do site Acens"; break;
		case 1: texto = "&nbsp; &nbsp; &nbsp; O site desenvolvido para o condomínio Harmony Medical Center, possui um design arrojado e foi implementado com tecnologias robustas de desenvolvimento Web. Ele traz um sistema desenvolvido pela nossa empresa que simula uma ‘rede social’ do condomínio, onde cada médico, clínica e serviço, podem possuir uma página com algumas informações importantes. Podendo assim estreitar ainda mais os laços com seus clientes."; break;
		case 2: texto = "&nbsp; &nbsp; &nbsp; Texto do site Janine"; break;
		case 3: texto = "&nbsp; &nbsp; &nbsp; Texto do site Rict"; break;
		default: break;
	}
	window.document.getElementById('ampImag').src = img[number].src;
	window.document.getElementById('texto').innerHTML = texto;
}
function fechar() {
	$('#ampImag').fadeOut(600);
	$('#ampliacao').transition({ scale: [0,0] },800);
	$('#ampliacao').fadeOut();
}
/*
var link = new Array(4);
link[0] = "http://www.acens.com.br";
link[1] = "http://www.harmonyfortaleza.com.br";
link[2] = "http://www.janinesimoes.com.br";
link[3] = "http://www.rict.com.br";

var number = -1;

function troca(num) {
	number = num-1;
	next();
}
function previous() {
	number--;
	if(number < 0)
		number = 3;
	window.document.getElementById("portImg").src = img[number].src;
	window.document.getElementById("portLink").href = link[number];
}
function next() {
	number++;
	if(number > 3)
		number = 0;
	window.document.getElementById("portImg").src = img[number].src;
	window.document.getElementById("portLink").href = link[number];
}
function slider() {
	next();
	setTimeout("slider()", 6*1000);
}
*/