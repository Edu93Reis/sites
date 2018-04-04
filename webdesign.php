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
<meta name="description" content="Pacotes de desenvolvimento de websites para pequenos e micro empresários" />
<title>Edu Reis - Soluções Web</title>
	<script type="text/javascript" src="js/slideshow.js"></script>
	<script type="text/javascript" src="js/gallery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/webdesign.css">
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
			<h2> O céu é o limite </h2>
				<aside class="photo_me"><img src="img/eu.jpg" alt="Foto de Edu Reis" /></aside>
				<p>Acredite!</p>
				<p>O crescimento da sua empresa depende apenas da sua vontade!
				Oferecemos produtos planejados para oferecer os melhores resultados (de acordo com o seu orçamento*).</p>
				<p>Trabalhamos com um processo em três fases:</p>
					<p><ul>
						 <li>	Reunião (on ou offline) para levantamento de informações e direcionamento junto ao cliente; <br></li>
						 <li>	Pesquisa de mercado;</br></li>
						 <li>	Criação da solução com base nos dados levantados (processo com acompanhamento periódico do cliente para maior transparência e resultado mais efetivo).</br></li>
					</ul></p>
				<small class="extra_info"><em><p>*conforme planos oferecidos.</p></em></small>
 </article>
	</div>
</content> <!--coteúdo-->
	
	<?php
		include("includes/slider.php");
	?>

	<!--slider-->

		<!--começa_produtos ao clicar abre animações -->

		<article class="prod">
			<h2 class="title_style"> Desenvolvimento Web </h2>
				<h4> Pacotes planejados para a sua empresa. </h4>
					<div id="plano_basico" class="description">
						<aside class="description_img"><img src="img/webdesign/basico.jpg" alt="" /></aside>
							<content class="description_text">
								<h3 class="planos">Plano Básico</h3>
								<p> Nosso pacote intermediário foi feito para o usuário que busca uma opção de qualidade e com as melhores práticas atuais. Um site construído todo em HTML e CSS (seguindo os moldes mais atuais). Um sistema leve, funcional e focado na economia de detalhes, para quem não precisa de sistemas complexos. </p>							
	 						</content>
					</div>
					
					</form>
					
					<a href="https://pag.ae/bkqk5CN" alt="Botão para compra do pacote básico" target="_new"><span class="buy_btn" > Compre </span></a>
										
						<div id="plano_intermediario" class="description">
							<aside class="description_img"><img src="img/webdesign/intermediario.jpg" alt="Plano Intermediário" /></aside>
							<content class="description_text"> 
								<h3 class="planos">Plano Intermediário</h3>
								<p> Buscando uma opção de menor custo e ainda assim eficiente? </p>
								<p>Baseado em sistemas Wordpress nosso pacote básico combina menor custo e rapidez, para quem precisa de um sistema eficiente e simples.</p>
							</content>
						</div>
						<a href="https://pag.ae/bgqk5JQ" alt="Botão para compra do pacote intermediário" target="_new"><span class="buy_btn"> Compre </span></a>
							<div id="plano_avancado" class="description">
								<aside class="description_img"><img src="img/webdesign/avancado.jpg" alt="" /></aside>
								<content class="description_text"> 
									<h3 class="planos">Plano Avançado</h3>
									<p> Se a sua empresa precisa de amplos bancos de dados, possui um sistema de vendas, chats de atendimento, sistemas de consulta ou animações complexas.<em>O seu pacote é o pacote completo</em>, com serviços de programação que contam com php e javascript, este pacote oferece o que há de melhor para o sucesso da sua empresa. </p>
								</content>
							</div>
							<a href="https://pag.ae/blqk5MK" alt="Botão para compra do pacote avançado" target="_new"><span class="buy_btn"> Compre </span></a>
			</article>
			<!-- web e mkt-->

<!-- Footer -->
	
	<?php include('includes/footer.php'); ?>
</div>
</body>
</html>