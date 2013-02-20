<footer id="contato">
	<article id="footer_wrap" class="centro clearfix">
		<div id="form_contato">
			<h1>Contato</h1>
			Entre em contato conosco
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
			echo form_input(array('class' => 'form_input placeholder', 'name' => 'nome', 'placeholder' => 'Nome', 'required' => '', 'pattern' => '.{3,10}', 'title' => 'Mínimo de 3 caracteres e máximo de 10'));
			echo form_input(array('class' => 'form_input placeholder', 'type' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'required' => '', 'pattern' => '[a-z|A-Z]{3,}(.[a-z|A-Z]+)?@gmail.com|[a-z|A-Z]{3,}(.[a-z|A-Z]+)?@hotmail.com|', 'title' => 'Digite um e-mail válido.'));
			echo form_textarea(array('class' => 'form_mensagem', 'name' => 'mensagem', 'cols' => '48', 'rows' => '6', 'placeholder' => 'Digite sua mensagem', ));
			echo form_submit(array('id' => 'formsubmit_buttom', 'class' => 'placeholder', ), 'Enviar');
			echo form_close();
			?>
		</div>
		
		<div id="mapa">
			<h1>Localização</h1>
			<iframe class="boxborder" width="400" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=+&amp;q=Acens&amp;ie=UTF8&amp;hq=Acens&amp;hnear=Fortaleza+-+Cear%C3%A1&amp;t=m&amp;cid=14690974754196196610&amp;ll=-3.786494,-38.553085&amp;spn=0.021496,0.034332&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
		</div>

	</article>
	
			<div id="form_newsletter">
			<h1>Newsletter</h1>
			Cadastre seu email e receba novidades em primeira mão.
			<?php
			echo form_open('principal/cadastrar_email');
			echo form_input(array('id' => 'newsletter_input', 'type' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'required' => '', 'pattern' => '[a-z|A-Z]{3,}(.[a-z|A-Z]+)?@gmail.com|[a-z|A-Z]{3,}(.[a-z|A-Z]+)?@hotmail.com|', 'title' => 'Digite um e-mail válido.'));
			echo form_submit(array('id' => 'send_buttom', 'name' => 'enviar'), 'Enviar');
			echo form_close();
			?>
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