        <footer id="contato">
            <article>
                <hgroup>
                    <h1>Contato</h1>
                    <h2>Texto sobr contato etc....</h2>
                </hgroup>
                <form>
                    <label>Nome:
                        <input type="text" name="nome" />
                    </label>
                    <br />
                    <label>E-mail:
                        <input type="email" name="email" />
                    </label>
                    <br />
                    <textarea name="menssagem" cols="40" rows="5">
                </textarea><br />         
                <input type="button" value="Enviar" />
                </form>
            </article>  
            <?php
                //$this->load->view('newsletter');
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