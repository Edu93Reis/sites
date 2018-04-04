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
// usando --> http://html-tuts.com/jquery-image-slider/
// opção caso não funfe (há de funfar) --> http://forum.imasters.com.br/topic/495838-galeria-de-foto-com-botao-next-e-prev/
// modal--> https://www.google.com.br/search?q=html-tuts%2Bmodal%20window&rct=j#q=html-tuts%2Bmodal+window