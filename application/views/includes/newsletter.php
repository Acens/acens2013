<div class="newsletter">
    <form class="formsletter">
        <fieldset>
            <legend>
                NEWSLETTER
            </legend>
            <p id="textonew">
                Cadastre seu email e receba novidades em primeira mão
            </p>
            <?php
                echo form_open('includes/newsletter');
                echo form_input(array('type'=>'email','name'=>'email','placeholder'=>'E-MAIL'),'','autofocus');
                echo form_submit(array('id'=>'enviar'),'Enviar');
                echo form_close();
            ?>
        </fieldset>
    </form>
</div>
