<section id="sobre">
	<h1><?php echo lang('sobre_titulo');?></h1>
	<div>
		<ul>
			<?php
				$limite = 30; //Limite de fotos do instagram
				$cont = 0;

				function API_instagram($url) {
					global $limite, $cont;
					$array_instagram = file_get_contents($url);
					if($array_instagram) {
						$dados = json_decode($array_instagram, true);
						foreach ($dados['data'] as $data) {
							if($cont++ >= 30)
								return;
							$url_link = $data['link'];
							$url_image = $data['images']['thumbnail']['url'];
							echo "<a href='$url_link' target='_blank'><img class='img_instagram' src='$url_image'/></a>";
						}
						if($dados['pagination'])
							API_instagram($dados['pagination']['next_url']);
					}
				}


				$link = "https://api.instagram.com/v1/users/319761938/media/recent/?access_token=274595891.f59def8.7c42a76b630046a59ee1252279929271";
				API_instagram($link);
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
				<p>O <span class="azul">MEJ</span> (Movimento Empresa Júnior) surgiu na França, em 1967, possuindo como principal objetivo complementar a formação acadêmica de seus participantes fornecendo experiências práticas.Na década de 80 o modelo francês consolidou-se e começou...</p>
				<a class="button icon chat" href="http://www.fejece.com.br/mej/movimento-empresa-junior/" target="_blank"><span>Saiba Mais</span></a>
			</li>
			<li class="float_left">
				<h4>Conheça a FEJECE</h4>
				<hr />
				<p>A <span class="amarelo">FEJECE</span> (Federação das Empresas Juniores do Estado do Ceará) foi fundada por Empresas Juniores locais com o intuito de incentivar e regulamentar o MEJ cearense, ainda jovem. Com projetos arrojados a FEJECE lançou desde o inicio projetos... </p>
				<a class="button icon chat" href="http://www.fejece.com.br/" target="_blank"><span>Saiba Mais</span></a>
			</li>
			<li class="float_left">
				<h4>Conheça a Brasil Júnior</h4>
				<hr />
				<p>A <span class="verde">Brasil Júnior</span> (Confederação Brasileira de Empresas Juniores) tem como finalidades representar as empresas juniores em nível nacional e desenvolver o Movimento Empresa Júnior como agente de educação empresarial e gerador de novos negócios. </p>
				<a class="button icon chat" href="http://www.brasiljunior.org.br" target="_blank"><span>Saiba Mais</span></a>
			</li>
		</ul>
	</div>
</section>