<footer id="contato">
	
	<div id="contatowrap" class="clearfix">
		<article id="contatoform">
		<h1><?php echo lang('contato_titulo');?></h1>
	<?php $this->lang->load('contact'); ?>
		<?php echo lang('contatosub_titulo');?>
	<?php echo form_open('index.php/contact', array('name' => 'form_contact', 'id' => 'form_contact', 'class' => '', 'onsubmit' => 'document.getElementById(\'submit\').disabled=true;'));?>

	<input type="text" name="subject" value="<?php echo set_value('subject');?>" placeholder="<?php echo lang('subject_label');?>" id="subject" class="forminput" tabindex="1" autofocus>
	<?php echo form_error('subject');?>
	
	<textarea type="textarea" name="message" placeholder="<?php echo lang('message_label');?>" cols="40" rows="10" id="message" class="formtextarea" tabindex="2"><?php echo set_value('message');?></textarea>
	<?php echo form_error('message');?>

	<input type="text" name="name" required="" placeholder="<?php echo lang('name_label');?>" value="<?php echo set_value('name');?>" id="name" class="forminput" tabindex="3">
	<?php echo form_error('name');?>

	
	<input type="email" name="email" value="<?php echo set_value('email');?>" placeholder="<?php echo lang('email_label');?>" id="email" class="forminput" tabindex="4">
	<?php echo form_error('email');?>

	<input type="email" name="email_confirm" value="" id="email_confirm" class="" style="position:absolute;left:-9999px;" tabindex="-1">
	
	<br />
	<input type="submit" name="submit" value="<?php echo lang('submit_button');?>" id="submit" class="enviar" tabindex="5" />

</form>
		</article>
		
		<article id="localizacao" class="clearfix">
			<h1><?php echo lang('localizacao_titulo');?></h1>
			<div id="map"></div>
		</article>
	</div>
	
	<div id="newsletterform" class="clearfix">
		<h1><?php echo lang('newsletter_titulo');?></h1>
		<?php echo lang('newslettersub_titulo');?>
		<?php
		$attributes = array('class' => '', 'id' => '');
		echo form_open('index.php/newsletter', $attributes);
		echo form_error('e_mail');?>
		<input id="email" class="forminputnewsletter" type="email" name="email" maxlength="60" placeholder="<?php echo lang('newsletter_label');?>" value="<?php echo set_value('email'); ?>"/>
		<?php
     	echo form_submit(array('id' => 'send_buttom', 'class' => 'enviar', 'name' => 'enviar'), lang('submit_button'));
		echo form_close();
		?>
	</div>

	<div id="face_twitter" class="clearfix">
		<div class="fb-like-box" data-href="http://www.facebook.com/pages/Acens-Empresa-J%C3%BAnior/187676691323618?ref=ts&amp;fref=ts" data-width="292" data-height="170" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-border-color="#1D1D1D" data-header="false"></div>
		<div id="twitter"><a href="https://twitter.com/acensjr" class="twitter-follow-button" data-show-count="false" data-lang="pt" data-size="large">Seguir @acensjr</a><div>
	</div>

</footer>
<div id="creditos" class="center">
	<div id="logoFooter"></div>
	<p><?php echo lang('endereco_titulo');?></p>
	<p><?php echo lang('telefone_titulo');?></p>
	<p><?php echo lang('creditos_titulo');?></p>
	<ul id="tecnologias">
		<li><a class="html5logo" title="Site feito usando HTML5"/>
		</li>
		<li><a class="css3logo" title="Site feito usando CSS3"/>
		</li>
	</ul>
</div>
</body>
</html>