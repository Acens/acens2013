<footer id="contato">
	
	<div id="contatowrap" class="clearfix">
		<article id="contatoform">
		<h1>Contato</h1>
		Entre em contato conosco
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
			echo form_input(array('class' => 'forminput', 'name' => 'nome', 'placeholder' => 'Nome', 'required' => '', 'pattern' => '.{3,10}', 'title' => 'Mínimo de 3 caracteres e máximo de 10'));
			echo form_input(array('class' => 'forminput', 'type' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'required' => '', 'pattern' => '\b[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}\b', 'title' => 'Digite um e-mail válido.'));
			echo form_textarea(array('class' => 'formtextarea', 'id' => 'mensagem', 'name' => 'mensagem', 'cols' => '48', 'rows' => '6', 'placeholder' => 'Digite sua mensagem', ));
			echo $captcha['image'];
			echo form_input(array('id' => 'forminputcaptcha', 'class' => 'forminputcaptcha', 'name' => 'captcha', 'placeholder' => 'Digite os números ao lado.', 'required' => '', 'title' => 'Digite os números que aparecem na imagem ao lado.'));
			echo form_hidden('code',$captcha['word']);
			echo validation_errors();
			echo form_submit(array('id' => 'formsubmit_buttom', 'class' => 'enviar'), 'Enviar');
			echo form_close();
			?>
		</article>
		
		<article id="localizacao" class="clearfix">
			<h1>Localização</h1>
			<div id="map"></div>
		</article>
	</div>
	
	<div id="newsletterform" class="clearfix">
		<h1>Newsletter</h1>
		Cadastre seu email e receba novidades em primeira mão.
		<?php
		echo form_open('includes/newsletter');
		echo form_input(array('class' => 'forminputnewsletter', 'id' => 'newsletter_input', 'type' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'required' => '', 'pattern' => '\b[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}\b', 'title' => 'Digite um e-mail válido.'));
		echo form_submit(array('id' => 'send_buttom', 'class' => 'enviar', 'name' => 'enviar'), 'Enviar');
		echo form_close();
		?>
	</div>

	<div id="face_twitter" class="clearfix">
		<div class="fb-like-box" data-href="http://www.facebook.com/pages/Acens-Empresa-J%C3%BAnior/187676691323618?ref=ts&amp;fref=ts" data-width="292" data-height="170" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-border-color="#1D1D1D" data-header="false"></div>
		<div id="twitter"><a href="https://twitter.com/acensjr" class="twitter-follow-button" data-show-count="false" data-lang="pt" data-size="large">Seguir @acensjr</a><div>
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
</div>
</body>
</html>