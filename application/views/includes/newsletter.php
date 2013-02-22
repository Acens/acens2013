<div id="fieldsetNewsletter">
	<legend>
		Cadastre seu email e receba novidades em primeira mão.
	</legend>
	<?php
	echo form_open('includes/newsletter');
	echo form_input(array('class' => 'form', 'id' => 'newsletter_input', 'type' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'required' => '', 'pattern' => '\b[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}\b', 'title' => 'Digite um e-mail válido.'));

	echo form_submit(array('id' => 'send_buttom', 'name' => 'enviar'), 'Enviar');
	echo form_close();
	?>
</div>
