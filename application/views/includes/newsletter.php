<div class="newsletter">
    <fieldset id="fildsetNewsletter">
        <legend>
            NEWSLETTER
        </legend>
        <p id="textonew">
            Cadastre seu email e receba novidades em primeira mão
        </p>
        <?php
            echo form_open('includes/newsletter');
            echo form_input(array('id'=>'emailNewsletter','name'=>'email','placeholder'=>'E-MAIL'),'','');
            echo form_submit(array('id'=>'enviar','name'=>'enviar'),'Enviar');
            echo form_close();
        ?>
    </fieldset>
</div>
