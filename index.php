<!Doctype html>
<html lang="pt-br">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-62093788-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-62093788-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Desenvolvimento de websites para pequenos e micro empresários e assessoria de marketing digital." />
<meta name="robots" content="index,follow" /> 
	<title>Edu Reis - Multimídia</title>
		<script type="text/javascript" src="hostinho/js/slideshow.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/modal.js"></script>		
		<script type="text/javascript" src="js/login.js"></script>
			<link rel="stylesheet" type="text/css" href="css/home.css">
			<link rel="stylesheet" type="text/css" href="css/includes/menu.css">
			<link rel="stylesheet" type="text/css" href="css/includes/slider.css">
			<link rel="stylesheet" type="text/css" href="css/includes/gallery.css">			
			<link rel="stylesheet" type="text/css" href="css/includes/footer.css">
			<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<body>
<div id="container">
<?php include("includes/menu.php"); ?> 

 <!--menu-->
<content class="about"> 
<div class="wrapper_about">	
	<article class="main_about">
	<div class="logo"><img src="img/logo.png" alt="Logotipo Edu Reis - Multimídia" /></div>
			<h2> "Planejamento, estruturação e pesquisas que são convertidas em resultados." </h2>
				<aside class="photo_me"><img src="img/eu.jpg" alt="Foto de Edu Reis" /></aside>
				Graduado em Produção Multimídia (Universidade Santa Cecília - Unisanta) e estudante em Análise e Desenvolvimento de Sistemas (Fatec), ofereço um sistema especializado em desenvolvimento de websites para pequenos e micro empresários, focando o uso deste como uma poderosa ferramenta de marketing. Todo o processo é feito através de reuniões – na empresa ou online – para levantamento das necessidades do cliente e de processo especializado de construção.
				</br>
				Ampla pesquisa de mercado e concorrência e o sistema de construção de layout aprovado em fases junto ao cliente; garantem um site não apenas visualmente bonito, mais eficiente em sua proposta.</article>

	</div>
</content> <!--coteúdo-->
	
	<?php
		include("includes/slider.php");
	?>

	 <!--slider-->
		<!--começa_produtos-->

		<h2 class="title_style">Desenvolvimento Web</h2>

		<nav class="list_web"> 

			<h2 class="mobile_title_style">Desenvolvimento Web</h2>

			<div class="produtos_web">				
					<h3>Pacote Básico</h3>
					<hr>
					<ul class="txt_container">
						<li>
							<p>Qualidade e simplicidade
								(planejado p/ sistemas leves)
								HTML+CSS
							</p>							
						</li>					
					</ul>
					<p class="posiciona"><a href="https://pag.ae/bkqk5CN" alt="Botão para compra do pacote básico" target="_new"><span class="buy_btn" > Compre </span></a></p>								
			</div>
			<div class="produtos_web">
				<h3>Pacote Intermediário</h3>
					<hr>
						<ul class="txt_container"> 
							<li>
								<p>Menor custo e rápida entrega</p>

								<p>Websites baseados no sistema wordpress</p>								

							</li>
						</ul>
					<p class="posiciona"><a href="https://pag.ae/bgqk5JQ" alt="Botão para compra do pacote intermediário" target="_new"><span class="buy_btn"> Compre </span></a></p>	
			</div>
			<div class="produtos_web">				
					<h3>Pacote Premium</h3>
					<hr>					
							<ul class="txt_container">
								<li>
									<p>E-commerces/Banco de Dados/Animações</p>									
									<p>PHP+Javascript</p>
								</li>								
							</ul>
							<p class="posiciona"><a href="https://pag.ae/blqk5MK" alt="Botão para compra do pacote avançado" target="_new"><span class="buy_btn"> Compre </span></a></p>	
			</div> 
		</nav> <!-- #termina_produtos_web -->
		
			<!--web e mkt-->
			<figure class="description_group">
					<div class="buy_btn" >
					<p class="_buy">Web</p>
					<!--<button onclick="showModal()" alt="Botão para reserva de produto" id="reserve" class="highlights-button">Reserve</button>-------------- Consertar Botão--> 
						<img src="img/web.jpg" alt="Web Design" class="prod_img" /> 
						<figcaption class="mkt"></figcaption>
					</div>
							
					<div class="buy_btn" >
					<p class="_buy">Mkt</p>
					<!-- <button onclick="showModal()" alt="Botão para reserva de produto" id="reserve" class="highlights-button">Reserve</button>-->
					<img src="img/mkt.jpg" alt="Marketing Digital" class="prod_img" /> 
						<figcaption class="mkt"></figcaption>
					</div>
			</figure>					 
			<!-- web e mkt-->

<?php include('includes/footer.php'); ?>
</div>
</body>
</html>