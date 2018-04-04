<?php
echo ('<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Cadastro</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script type="text/javascript">
		 function validaForm()
		 {
		    erro = false;
		    if($("#name").val() == "")
		    {
		        alert("Você precisa preencher o campo Nome");
		        erro = true;
		    }
		    if($("#email").val() == "" !erro)
		    {
		        alert("Você; precisa preencher o campo E-mail");
		        erro = true;
		    }
		    if($("#message").val() == "" !erro)
		    {
		        alert("Você precisa preencher o campo Mensagem");
		        erro = true;
		    }

		    if(!erro)
		    {
		        $("#form_contato").submit();
		    }
		 }
	</script>
		
		<script type="text/javascript" src="js/gallery.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/modal.js"></script>
			<link rel="stylesheet" type="text/css" href="css/includes/gallery.css">			
			<link rel="stylesheet" type="text/css" href="css/includes/footer.css">

</head>
<body>

	<nav class="work_block">
		<div class="work_block-wrapper">
			<ul class="first_block">
				<li><button onclick="showDialog1()" class="mybtn"><img src="portfolio/01.png" alt="Catálogo" class="mybtn" for="gallery/gallery-1.php"></button></li>
				<li><button onclick="showDialog2()" class="mybtn"><img src="portfolio/02.png" alt=""></button></li>
				<li><button onclick="showDialog3()" class="mybtn"><img src="portfolio/03.png" alt=""></button></li>
				<li><button onclick="showDialog4()" class="mybtn"><img src="portfolio/05.png" alt="Propaganda" class="mybtn" for="gallery/gallery-4.php"></button></li>
			</ul>

			<!-- <ul class="second_block">
				<li><button onclick="showDialog3()" class="mybtn""><img src="portfolio/04.png" alt=""></button></li>
				<li><button onclick="showDialog4()" class="mybtn"><img src="portfolio/03.png"  alt="Propaganda" class="mybtn" for="gallery/gallery-4.php"></button></li>
				<li><button onclick="showDialog4()" class="mybtn"><img src="portfolio/" alt=""></button></li>
				<li><button onclick="showDialog4()" class="mybtn"><img src="portfolio/" alt=""></button></li>
			</ul> -->
		</div>	
	</nav> <!-- portfolio links --> 

    <footer class="data">
		<hgroup class="footer">
			<h2 class="footer_spacing">Desenvolvimento web que atende as suas necessidades</h3>
			<h5 class="footer_spacing">O website como produto de marketing para oferecer resultados poderosos</h5>
		</hgroup>
	  <form action="php/contato.php" method="post" class="footer">
		<p class="form_space" >Nome:<input type="name" name="Nome" class="form_footer" id="name" placeholder="Seu nome"></p>
		<p class="form_space" >Email:<input type="email" name="email" class="form_footer" id="email" Placeholder="exemplo@seuemail.com.br"></p>
		<p class="form_space"">Mensagem:
		<br><textarea name="Mensagem" class="message" id-"message" type="text" placeholder="Digite Mensagem"></textarea></p>
		<input type="submit" name="Enviar" label="Enviar" class="button" id="form_contato" >
	  </form>
	<figure class="sociais">
		<!-- <a href="https://www.facebook.com/edureismultimidia/" alt="Facebook" target="new"><img src="img/facebook_placeholder.png" alt="Facebook" /></a>-->
		<a href="https://www.instagram.com/edureismultimdia/" alt="Instagram" target="new"><img src="img/insta_placeholder.png" alt="Instagram" /></a>
		<a href="https://twitter.com/edureismulti" alt="Twitter" target="new"><img src="img/twitter_placeholder.png" alt="Twitter" target="new" ></a>
	</figure>
	<small><h5> 2017 | Edu Reis - Multimídia | (11) 97042-3033 | (13) 99771-6451</h5></small>
	</footer>
</body>
</html>');

?>