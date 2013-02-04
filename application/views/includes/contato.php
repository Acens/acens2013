<footer id="contato">
	<article id="contato">
		<hgroup>
			<h1>Contato</h1>
		</hgroup>
		<div id="contato_local">
			<div id="fieldsetContato">
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
	<h1>Localização</h1>	
		<div id="map"></div>
	</article>
	<?php
	include "newsletter.php";
	?>
</footer>
<div id="creditos" class="center">
	<p>
		2013 - Desenvolvido por Acens - Todos os direitos reservados.
	</p>
</div>
</body>
</html>