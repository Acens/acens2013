        <div id="menuWrapper" class="sombra">
	        <nav>
	            <ul class="centro">
	                <li>
	                    <a href="#sobre" class="scroll"><?php echo lang('sobre_menu');?></a>
	                </li>
	                <li>
	                    <a href="#portfolio" class="scroll"><?php echo lang('portfolio_menu');?></a>
	                </li>
	                <li>
	                    <a href="#servicos" class="scroll"><?php echo lang('servicos_menu');?></a>
	                </li>
	                <li id="home" class="scroll">
	                    <a href="#slides"></a>
	                </li>
	                <li>
	                	<?php 
	                		if($curso == "false"){
	                	?>
	                    	<a id="naocurso" title="Não temos cursos no momento"><?php echo lang('cursos_menu');?></a>
	                    <?php }else{?>
	                    	<a href="#cursos" class="scroll"><?php echo lang('cursos_menu');?></a>	
	                    <?php }?>
	                </li>
	                <li>
	                    <a href="#contato" class="scroll"><?php echo lang('contato_menu');?></a>
	                </li>
	                <li>
	                    <a href="http://www.acens.com.br/blog" target="_blank"><?php echo lang('blog_menu');?></a>
	                </li>
	            </ul>
	        </nav>
        </div>