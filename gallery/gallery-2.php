<!Doctype html>
<html lang="pt-br">
<head>
<title>Campanha Copa do Mundo</title>
<link rel="stylesheet" type="text/css" href="../hostinho/css/gallery.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/modal-teste.js"></script>-->

</head>
<body>
<?php 
	$imagesTotal = 3;
?>

	<div class="gallery-modal" id="mybtn2"> </div>
		<div class="gallery" id="dlgbox2">
			<aside class="gallery-lateral">
						<hgroup>
							<h1 id="gallery-title">Vinheta Academia Power Boxe</h1>
							<h2 id="gallery-subtitle"><br>Vídeo propaganda produzida para a Academia Power Boxe/Clube dos Ingleses - Santos.</h2>
						</hgroup>
					<div id="gallery-thumb"></div>
				<article id="gallery-article">				
					<p><br>O projeto <br/><br/></p>
					<p>Projeto criado para a página de Facebook da academia a ideia era mostrar o treino do esporte na academia por todos ângulos envolvidos: combate, treino físico e até mesmo a evolução.</p>
					<p>O projeto foi muito bem recebido e teve, até o momento em que este texto foi escrito, um alcance de 3648 pessoas, sendo 1340 de alcance não pago e o restante por alcance direcionado (pago).</p>
				</article>
			</aside>			
				<figure class="album">
							<div id="big-image-container" class="galleryPreviewContainer">
								<div class="big-image">
									<video width="480" controls id="video" >										
										<source src="gallery/imagens/2/power_boxe.mp4" type="video/mp4" class="previewImage" >
									</video>						
								</div>									
							</div>						
				</figure>
		</div>
	</div>
	<button onclick="dlgClose2()" class="modal-close" id="close2" for="modal"></button>

<script type="text/javascript">
var imagesTotal = <?php echo $imagesTotal; ?>;
var currentImage = 1;

$('a.thumbnailsimage'+currentImage).addClass("active");

//prev
$('a.previousSlideArrow').click(function() {
	$('img.previewImage' + currentImage).hide();
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	  currentImage--;

		if(currentImage == 0){
		     currentImage = imagesTotal;
		}

		$('a.thumbnailsimage'+currentImage).addClass("active");
		$('img.previewImage'+currentImage).show();

	return false;
});

//next
$('a.nextSlideArrow').click(function(){
	$('img.previewImage'+currentImage).hide();
	$('a.thumbnailsimage'+currentImage).removeClass("active");

	  currentImage++;

		if(currentImage == imagesTotal+1){
		     currentImage = 1;
		}

		$('a.thumbnailsimage'+currentImage).addClass("active");
		$('img.previewImage'+currentImage).show();

	return false;
});

//thumbnails
function changeimage(imageNumber) {
	$('img.previewImage' + currentImage).hide();
	currentImage = imageNumber;
	$('img.previewImage' + imageNumber).show();
	$('.galleryThumbnails a').removeClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");

return false;
}

</script>

</body>
</html>