        <div id="menuWrapper" class="sombra">
	        <nav>
	            <ul class="centro">
	                <li>
	                    <a href="#sobre" class="scroll">Sobre</a>
	                </li>
	                <li>
	                    <a href="#portfolio" class="scroll">Portfólio</a>
	                </li>
	                <li>
	                    <a href="#servicos" class="scroll">Serviços</a>
	                </li>
	                <li id="home" class="scroll">
	                    <a href="#slides"></a>
	                </li>
	                <li>
	                	<?php 
	                		if($curso == "false"){
	                	?>
	                    	<a id="naocurso" title="Não temos cursos no momento">Cursos</a>
	                    <?php }else{?>
	                    	<a href="#cursos" class="scroll">Cursos</a>	
	                    <?php }?>
	                </li>
	                <li>
	                    <a href="#contato" class="scroll">Contato</a>
	                </li>
	                <li>
	                    <a href="http://www.acens.com.br/blog" target="_blank">Blog</a>
	                </li>
	            </ul>
	        </nav>
        </div>