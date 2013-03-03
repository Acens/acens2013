<section id="sobre">
	<h1>Sobre a Acens</h1>
	<div id="ri-grid" class="ri-grid ri-grid-size-2">
		<ul>
			<?php
				 $arquivos = directory_map('./img/medium', 1);
				 $caminho = base_url() . "img/medium";
				 
				 foreach($arquivos as $img){
			?>
			<li><a href="#"><img src="<?php echo $caminho . "/" . $img; ?>"/></a></li>
			<?php
			}
			?>
		</ul>
	</div>
	<article class="texto_sobre">
		<h3>A Acens</h3>
		<p>
			A Acens - Empresa Júnior - foi fundada em 28 de março de 2008, sendo uma iniciativa empreendedora e ousada de um grupo de aluno do curso de Ciências da Computação da Universidade Estadual do Ceará(UECE). Nossa missão é: "Tornar-se referência do MEJ nacional, oferecer serviços de quaidade e buscar reconhecimento pelo departamento de computação da UECE como uma fonte de capacitação para os alunos da graduação".
		</p>
		<br />
		<h3>O que fazemos</h3>
		<p>
			Atuando há 5 anos na área de TI, a Acens vem facilitando o dia a dia de empresas, oferecendo produtos como o desenvolvimento de sites, sistemas web, treinamento e capacitação em TI. Sempre atentos ao mercado de trabalho ultizamos o que há de mais moderno em ferramentas de desenvolvimento, sempre visando a qualidade de nosso serviços e a satisfação dos nossos clientes.
		</p>
	</article>
	<div id="saiba_mais" class="centro clearfix">
		<ul>
			<li class="float_left slidetop">
				<h4>Fazemos parte do MEJ</h4>
				<hr />
				<p>O <span class="azul">MEJ</span> (Movimento Empresa Júnior) é um fenômeno global...</p>
				<a class="button icon chat" href="http://www.fejece.com.br/mej/movimento-empresa-junior/" target="_blank"><span>Saiba Mais</span></a>
			</li>
			<li class="float_left">
				<h4>Conheça a FEJECE</h4>
				<hr />
				<p>A <span class="amarelo">FEJECE</span> (Federação das Empresas Juniores do Estado do Ceará) </p>
				<a class="button icon chat" href="http://www.fejece.com.br/" target="_blank"><span>Saiba Mais</span></a>
			</li>
			<li class="float_left">
				<h4>Conheça a Brasil Júnior</h4>
				<hr />
				<p>A <span class="verde">Brasil Júnior</span> (Confederação Brasileira de Empresas Juniores) tem como finalidades representar as empresas juniores em nível nacional e desenvolver o Movimento Empresa Júnior como agente de educação empresarial e gerador de novos negócios.</p>
				<a class="button icon chat" href="http://www.brasiljunior.org.br" target="_blank"><span>Saiba Mais</span></a>
			</li>
		</ul>
	</div>
</section>