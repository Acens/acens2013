<div class="newsletter">
    <div id="fildsetNewsletter">
        
        <h1>Newsletter</h1>
        
        <legend>
            Cadastre seu email e receba novidades em primeira mão.
        </legend>
        <?php
            echo form_open('includes/newsletter');
			echo form_input(array('id'=>'emailNewsletter', 'type' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'required' => '', 'pattern' => '[a-z|A-Z]{3,}(.[a-z|A-Z]+)?@gmail.com|[a-z|A-Z]{3,}(.[a-z|A-Z]+)?@hotmail.com|', 'title' => 'Digite um e-mail válido.'));
            
            echo form_submit(array('id'=>'enviar','name'=>'enviar'),'Enviar');
            echo form_close();
        ?>
    </div>
</div>
