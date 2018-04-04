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

	<div class="gallery-modal" id="mybtn"> </div>
		<div class="gallery" id="dlgbox">
			<aside class="gallery-lateral">
						<hgroup>
							<h1 id="gallery-title">Website Rizzieri Eventos</h1>
							<h2 id="gallery-subtitle"><br>Website produzido para a empresa de locação de equipamentos de som e luz Rizzieri Eventos.</h2>
						</hgroup>
					<div id="gallery-thumb"></div>
				<article id="gallery-article">
				<p><br>O projeto <br/><br/></p>
				<p>A <strong>Rizzieri Eventos</strong> possuia um site construído em 1999 e que não atendia as regras mais atuais de desenvolvimento web. O dono da empresa solicitou então um site que oferecesse um visual moderno e que trouxesse, de forma rápida e limpa, as informações ao cliente.</p>
				<p>A partir do escopo do cliente foi montado um layout que, após apresentado, serviu de base para a criação do atual site da empresa.</p>
				</article>
			</aside>
				<figure class="album">
							<div id="big-image-container" class="galleryPreviewContainer">
								<div class="big-image">
									<?php
										for($i = 1;$i <= $imagesTotal; $i++){
											echo '<img class="previewImage' . $i . '" src="gallery/imagens/1/' . $i . '.png" width="auto" height="auto" alt="" />';
										}
									?>
								</div>
									<div class="galleryPreviewArrows">
										<a href="#" class="previousSlideArrow">&lt;</a>
										<a href="#" class="nextSlideArrow">&gt;</a>
									</div>
							</div>
						<div id="thumb-container" class="galleryThumbnailsContainer">
							<ul class="small-img">
								
								<?php
								     for($t = 1; $t<=$imagesTotal; $t++){
								     	echo '<li id="thumb_1" class="img-holder">
								     		<a href="javascript: changeimage(' . $t . ')" class="thumbnailsimage' . $t . '"><img src="gallery/imagens/1/thumbnail/' . $t . '.png" width="auto" height="auto" alt=""></a>
								     		</li>';
								     }
								?>
								
							</ul>   
						<div/>
				</figure>
		</div>
	</div>
	<button onclick="dlgClose1()" class="modal-close" id="close" for="modal"></button>

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