<footer id="contato">
	<hgroup></hgroup>
	<div id="contato_local" class="centro">
		<div id="fieldsetContato">
			<legend>
				Entre em contato conosco
			</legend>

			<?php
			$values = array(
							'id' => 'image_captcha',
							'word' => random_string('numeric', 6),
							'img_path' => '././captcha/',
							'img_url' => base_url() . 'captcha/',
							'font_path' => '././fontes/captcha.ttf',
							'expiration' => '100'
							);

			$captcha = create_captcha($values);

			echo form_open('index.php/formulario#contato');
			echo form_input(array('class' => 'form', 'name' => 'nome', 'placeholder' => 'Nome', 'required' => '', 'pattern' => '.{3,10}', 'title' => 'Mínimo de 3 caracteres e máximo de 10'));
			echo form_input(array('class' => 'form', 'type' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'required' => '', 'pattern' => '\b[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}\b', 'title' => 'Digite um e-mail válido.'));
			echo form_textarea(array('class' => 'form', 'id' => 'mensagem', 'name' => 'mensagem', 'cols' => '48', 'rows' => '6', 'placeholder' => 'Digite sua mensagem', ));
			echo $captcha['image'];
			echo form_input(array('id' => 'captcha_field', 'class' => 'form', 'name' => 'captcha', 'placeholder' => 'Digite os números ao lado.', 'required' => '', 'title' => 'Digite os números que aparecem na imagem ao lado.'));
			echo form_hidden('code',$captcha['word']);
			//echo form_hidden('code', 1);	// debug mode
			echo validation_errors();
			echo form_submit(array('id' => 'formsubmit_buttom'), 'Enviar');
			echo form_close();
			?>
		</div>
		<article id="localizacao">
			<legend>
				Nossa localização:
			</legend>
			<div id="map"></div>
		</article>
		<?php
			include "newsletter.php";
		?>
		<div id="social">
			<img src="<?php base_url() ?>img/face.png" />
			<img src="<?php base_url() ?>img/twitter.png" />
			<img src="<?php base_url() ?>img/youtube.png" />
		</div>
	</div>
</footer>

<div id="creditos" class="center">
	<img src="<?php echo base_url(); ?>/img/logoacensFooter.png" alt="" id="logoFooter"/>
	<p>
		Av Paranjana, 1700 - Campus do Itaperi - UECE - Dep. de Pós-Graduação em Computação - Sala 8
	</p>
	<p>
		Tel: +55 85 8585-6463
	</p>
	<p>
		2013 - Todos os direitos reservados.
	</p>
	<ul>
		<li><img src="<?php echo base_url(); ?>/img/html5logo.png" title="Site feito usando HTML5" alt="Usamos HTM5" id="html5icon" />
		</li>
		<li><img src="<?php echo base_url(); ?>/img/css3logo.png" title="Site feito usando CSS3" alt="CSS3" id="css3icon"/>
		</li>
	</ul>

	<div id="report" class="centro">
		<button>
			Reporte um erro
		</button>
		|
		<button>
			Termos de uso
		</button>
	</div>
</div>
</body>
</html>