<?php
$cesta = $_GET['cesta'];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Faça seu Pedido</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inicial-scale=1, maximum-scale=1, user-scalable=no"/>
	<meta name="description" content="Kits e Cestas Básicas de Natal e Ano Novo">
	<meta name="keywords" content="Cesta Básica, Cesta básica Rj, Cestas Básicas Preço, Kits de Natal">
	<meta name="author" content="Kit Alimentação">

	<meta property="og:url"         content="http://www.kitalimentacao.com.br/boasfestas/familia/" />
	<meta property="og:type"        content="website" />
	<meta property="og:title"       content="Cestas Especiais de Natal e Ano Novo" />
	<meta property="og:description" content="Kits Boas Festas 2015 - Kit Alimentação" />
	<meta property="og:image"       content="http://www.kitalimentacao.com.br/2014/wp-content/uploads/2015/01/popup.jpg" />
	
	<!-- Android Lolipop Theme Color -->
	<meta name="theme-color" content="#d91e48">

	<link rel="stylesheet" href="../source/css/bootstrap.min.css">
	<link rel="stylesheet" href="../source/css/familia.css">

</head>
<body class="obrigado">
	<div class="container" id="content">
		<header id="header">
			<div class="row">
				<div class="col-lg-12 logo text-center">
					<img src="../source/images/logo-kitalimentacao.png" alt="Kit Alimentação" >
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
		</header>
		<!-- /#header -->

		<main id="main">
			<div class="row">
				<div class="col-lg-12 text-center titulo">
					<hgroup>
						<h2>Você selecionou o</h2>
						<br>
						<h1><?php echo $cesta?></h1>
					</hgroup>
				
					<hr>

					<p class="descricao">Agora, Precisamos dos Seus Dados Básicos para podermos entrar em contato:</p>
					
					<div class="col-sm-12 formulario">
						<form name="sentMessage" id="contactForm" novalidate>
						    <div class="row control-group">
						        <div class="form-group col-xs-12 floating-label-form-group controls">
						            <label>Nome Completo: </label>
						            <input type="text" class="form-control" placeholder="Nome Completo" id="nome" required data-validation-required-message="Por favor digite o nome.">
						            <p class="help-block text-danger"></p>
						        </div>
						    </div>
						    <div class="row control-group">
						        <div class="form-group col-xs-12 floating-label-form-group controls">
						            <label>Telefone fixo com DDD: </label>
						            <input type="tel" class="form-control" placeholder="Telefone com DDD" id="telefone" required data-validation-required-message="Por favor informe o Número." >
						            <p class="help-block text-danger"></p>
						        </div>
						    </div>
						    <div class="row control-group">
						        <div class="form-group col-xs-12 floating-label-form-group controls">
						            <label>Celular com DDD: </label>
						            <input type="tel" class="form-control" placeholder="Celular com DDD" id="celular">
						        </div>
						    </div>
						    <div class="row control-group">
						        <div class="form-group col-xs-12 floating-label-form-group controls">
						            <label>CEP (só numeros): </label>
						            <input type="text" pattern="[0-9]*" class="form-control" placeholder="CEP" id="cep" required data-validation-required-message="Por favor informe o Número." >
						            <p class="help-block text-danger"></p>
						        </div>
						    </div>
						    <div class="row control-group">
						        <div class="form-group col-xs-12 floating-label-form-group controls">
						            <label>Endereço: </label>
						            <input type="text" class="form-control" placeholder="Endereço" id="endereco" required data-validation-required-message="Por favor informe o Endereço." >
						            <p class="help-block text-danger"></p>
						        </div>
						    </div>
						    <div class="row control-group">
						        <div class="form-group col-xs-12 floating-label-form-group controls">
						            <label>Complemento: </label>
						            <input type="text" class="form-control" placeholder="Complemento" id="complemento" required data-validation-required-message="Por favor informe o Complemento." >
						            <p class="help-block text-danger"></p>
						        </div>
						    </div>
						    <div class="row control-group">
						        <div class="form-group col-xs-12 floating-label-form-group controls">
						            <label>Bairro: </label>
						            <input type="text" class="form-control" placeholder="Bairro" id="bairro" required data-validation-required-message="Por favor informe o Bairro." >
						            <p class="help-block text-danger"></p>
						        </div>
						    </div>
						    <div class="row control-group">
						        <div class="form-group col-xs-12 floating-label-form-group controls">
						            <label>Cidade: </label>
						            <input type="text" class="form-control" placeholder="Cidade" id="cidade" required data-validation-required-message="Por favor informe a Cidade." >
						            <p class="help-block text-danger"></p>
						        </div>
						    </div>

						    <div class="load">
						    	<img src="../source/images/loading.gif" alt=""> 
						    </div>

						    <div class="form-group col-xs-12">
						    	<input type="hidden" id="cesta" value="">
						        <button type="submit" id="cliqueCadastrar" class="btn btn-success btn-lg">REALIZAR PEDIDO</button>
						    </div>

						</form>

						<br> 

						<p class="privacidade"><small>Visite nossa <a href="http://www.kitalimentacao.com.br/politica-de-privacidade.html" title="Política de Privacidade" class="pol">Política de Privacidade</a> para saber sobre o cadastro de seus dados em nosso site</small></p>
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			
		</main>
		<!-- /#main -->

		<footer>
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> &copy; Kit Alimentação - 2015</p>
				</div>
			</div>
		</footer>
	</div>
	<!-- /.container -->

	<!-- seguro -->
	<div class="portfolio-modal modal fade" id="seguro" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-content">
	    	<div id="estilo" class="corPagamento">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-8 col-lg-offset-2">
		                    <div class="modal-body seguro-content">
								<div class="titulo-cesta">
								    <h2>
								    	<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								    	<p>VOCÊ ESTÁ EM AMBIENTE SEGURO</p>
								    </h2>
									
								    <p class="descricao">Não se preocupe, temos uma <a href="http://www.kitalimentacao.com.br/politica-de-privacidade.html" title="Política de Privacidade" class="pol">Política de Privacidade</a> altamente eficaz que protege seus Dados de Fraude!</p>

								    <hr>

								    <p class="descricao">Pode preencher seus dados sem medo.</p>
								    <br> <br> <br> <br> 
								</div>
		           			</div>
		        		</div>
		        	</div>
		        </div>
		    </div>
	        <!-- container MODAL -->
	        <div class="close-modal" data-dismiss="modal">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
				  PREENCHER DADOS
	        </div>
		        
	        </div>
	    </div>
	</div>
	<!-- seguro -->
	<script type="text/javascript" src="../source/js/scripts.min.js"></script>
	<script src="../source/js/jqBootstrapValidation.js"></script>
	<script src="../source/js/pedido_familia.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-27285313-4', 'auto');
	  ga('send', 'pageview');
	</script>

</body>
</html>