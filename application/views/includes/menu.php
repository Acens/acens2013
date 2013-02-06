        <div id="menuWrapper" class="sombra">
	        <nav>
	            <ul class="centro">
	                <li>
	                    <a href="#sobre">Sobre</a>
	                </li>
	                <li>
	                    <a href="#portfolio">Portfólio</a>
	                </li>
	                <li>
	                    <a href="#servicos">Serviços</a>
	                </li>
	                <li id="home">
	                    <a href="#homeacens"></a>
	                </li>
	                <li>
	                	<?php 
	                	$temcurso = false;
	                		if($temcurso == false){
	                	?>
	                    <a href="#cursos" id="naocurso" title="Não temos cursos no momento">Cursos</a>
	                    <?php }else{?>
	                    <a href="#cursos">Cursos</a>	
	                    <?php }?>
	                </li>
	                <li>
	                    <a href="#contato">Contato</a>
	                </li>
	                <li>
	                    <a href="#">Blog</a>
	                </li>
	            </ul>
	        </nav>
        </div>