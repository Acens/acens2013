        <footer id="contato">
            <article>
                <hgroup>
                    <h1>Contato</h1>
                    <h2>Texto sobr contato etc....</h2>
                </hgroup>
                <div id="contato_local">
                    <fieldset id="fieldsetContato">
                        <legend>
                            Entre em contato conosco
                        </legend>
                        <?php
                            echo form_open('includes/contato');
                            echo form_input(array('class'=>'form','name'=>'nome','placeholder'=>'NOME',),'','autofocus');
                            echo form_input(array('class'=>'form','type'=>'email','name'=>'email','placeholder'=>'E-MAIL',),'','autofocus');
                            echo form_textarea(array('id'=>'mensagem','name'=>'mensagem','cols'=>'48','rows'=>'6','placeholder'=>'MENSAGEM',),'','autofocus');
                            echo form_submit(array('id'=>'formsubmit',),'Enviar');
                            echo form_close();
                        ?>
                    </fieldset>
                </div>
                <div id="map"></div>
            </article>  
            <?php
                include "newsletter.php";
            ?>
            <div class="center">
                <p>
                    2013 - Desenvolvido por Acens - Todos os direitos reservados. 
                </p>
            </div>
        </footer>
    </body>
</html>