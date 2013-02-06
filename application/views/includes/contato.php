<footer id="contato">
	<article id="contato">
		<div id="contato_local">
			<div id="fieldsetContato">
				<h1>Contato</h1>
				<legend>
					Entre em contato conosco
				</legend>
				<?php
				function checar_email($string) {
					if (stristr($string, '@gmail.com') != FALSE)
						return TRUE;
					if (stristr($string, '@hotmail.com') != FALSE)
						return TRUE;

					$this -> form_validation -> set_message(email, 'Digite um e-mail válido!');
					return false;
				}

				echo form_open();
				echo form_input(array('class' => 'form', 'name' => 'nome', 'placeholder' => 'Nome', 'required' => '', 'pattern' => '.{3,10}', 'title' => 'Mínimo de 3 caracteres e máximo de 10'));
				echo form_input(array('class' => 'form', 'type' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'required' => '', 'pattern' => '[a-z|A-Z]{3,}(.[a-z|A-Z]+)?@gmail.com|[a-z|A-Z]{3,}(.[a-z|A-Z]+)?@hotmail.com|', 'title' => 'Digite um e-mail válido.'));
				echo form_textarea(array('id' => 'mensagem', 'name' => 'mensagem', 'cols' => '48', 'rows' => '6', 'placeholder' => 'Digite sua mensagem', ));
				echo form_submit(array('id' => 'formsubmit', ), 'Enviar');
				echo form_close();
				?>
			</div>
		</div>
	</article>
	<article id="localizacao">
		<div id="map"></div>
	</article>
	<?php
	include "newsletter.php";
	?>
</footer>
<div id="creditos" class="center">
	<img src="<?php echo base_url(); ?>/img/logoacensFooter.png" alt="" id="logoFooter"/>
	<p>Av Paranjana, 1700 - Campus do Itaperi - UECE - Dep. de Pós-Graduação em Computação - Sala 8</p>
	<p>Tel: +55 85 8585-6463</p>
	<p>2013 - Todos os direitos reservados.</p>
	<ul>
		<li><img src="<?php echo base_url(); ?>/img/html5logo.png" title="Site feito usando HTML5" alt="Usamos HTM5" id="html5icon" /></li>
		<li><img src="<?php echo base_url(); ?>/img/css3logo.png" title="Site feito usando CSS3" alt="CSS3" id="css3icon"/></li>
	</ul>
</div>
</body>
</html>