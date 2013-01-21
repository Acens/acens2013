<!DOCTYPE html>
<!-- The new doctype -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Acens - Mentes em desenvolvimento</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css" />
	
        <!-- Internet Explorer HTML5 enabling code: -->
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

        <style type="text/css">  
        .clear {
        zoom: 1;
        display: block;
        }
        .gradient {
		filter: none;
		}
        </style>

        <![endif]-->
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">/**/</script>
        <script src="<?php echo base_url(); ?>/js/jquery.scrollTo-min.js">/**/</script>
        <script src="<?php echo base_url(); ?>/js/script.js">/**/</script>
		<script src="<?php echo base_url(); ?>/js/animacaologo.js">/**/</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.easy-pie-chart.js"></script>
		
    </head>
    <body>
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
                    <a href="#cursos">Cursos</a>
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
        
        <header id="homeacens">
			<div class="conteudo_home">
				<div class="circulologo" data-percent="100">
					<div href="#" class="seta1" ></div>
					<div href="#" class="seta2" ></div>
					<div href="#" class="seta3" ></div>
				</div>
				<hgroup>
					<p class="home_text1">acens</p>
					<p class="home_text2">mentes em desenvolvimento</p>
				</hgroup>
				<p class="home_text3">Idealizando sonhos, desenvolvendo projetos.</p>
			</div>
        </header>
        
        <section id="sobre">
            <article>
                <h1>Sobre a Acens</h1>
                <div class="articleBody clear">
                    <b>A Acens</b>
                    <p>&nbsp; &nbsp; &nbsp; A Acens - Empresa Júnior - foi fundada em 28 de março de 2008, sendo uma iniciativa empreendedora e ousada de um grupo de aluno do curso de Ciências da Computação da Universidade Estadual do Ceará(UECE).
                        Nossa missão é: "Toranar-se referência do MEJ nacional, oferecer serviços de quaidade e buscar reconhecimento pelo departamento de computação da UECE como uma fonto de capacitação para os alunos da graduação".</p>
                    <b>O que fazemos</b>
                    <p> &nbsp; &nbsp; &nbsp;Atuando há 5 anos na área de TI, a Acens vem facilitando o dia a dia de empresas, oferecendo produtos como o desenvolvimento de sites, sistemas web, cursos in company, treinamento e capacitação em TI.    
                        Sempre atentos ao mercado de trabalho ultizamos o que há de mais moderno em ferramentas de desenvolvimento, sempre visando a qualidade de nosso serviços e a satisfação dos nossos clientes.</p>
                </div>
            </article>
        </section>

        <section id="portfolio">
            <article>
                <h1>Portfólio</h1>
                <div id="telafora" class="centro">
                    <div id="teladentro">
                        
                    </div>
                    <div id="postit"><a href="#">Veja mais<br /> dos nossos<br />trabalhos!</a></div>
                </div>
                <div id="baseport" class="centro"><!----></div>
            </article>
        </section>

        <section id="servicos">
            <article>
                <h1>Serviços</h1>
                
                <div class="centro largurabase">
                <a href="#" class="circular" target="_blank">
					<div id="webcirculo" class="circular servicocirculo"><!-- --></div>
				</a>
				<a href="#" class="circular" target="_blank">
					<div id="webcirculo" class="circular servicocirculo"><!-- --></div>
				</a>
				<a href="#" class="circular" target="_blank">
					<div id="webcirculo" class="circular servicocirculo"><!-- --></div>
				</a>
				<div class="clear"><!----></div>
				</div>
            </article>
        </section>

        <section id="cursos">
            <h1>Nossos cursos</h1>
        </section>
       
       
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
            <div class="center">
                <p>
                    2013 - Desenvolvido por Acens - Todos os direitos reservados. 
                </p>
            </div>
        </footer>
    </body>
</html>
