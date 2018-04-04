//modal

"use strict";

	function dlgClose1(){
		var modal = document.getElementById("mybtn");
		var dlg = document.getElementById("dlgbox");
		var close = document.getElementById("close");
		modal.style.display = "none";
		dlg.style.display = "none";
		close.style.display = "none";
	}

	function showDialog1(){
		var modal = document.getElementById('mybtn');
		var dlg = document.getElementById('dlgbox');
		var close = document.getElementById('close');
		if(modal.style.display == 'none'){
			modal.style.display = 'block';
		}
		dlg.style.display = 'block';
		close.style.display = 'block';
	}

/********************************************/

	function dlgClose2(){
		var modal = document.getElementById("mybtn2");
		var dlg = document.getElementById("dlgbox2");
		var close = document.getElementById("close2");		
		modal.style.display = "none";
		dlg.style.display = "none";
		close.style.display = "none";
		$('#video').remove();
	}

	function showDialog2(){
		var modal = document.getElementById('mybtn2');
		var dlg = document.getElementById('dlgbox2');
		var close = document.getElementById('close2');
		if(modal.style.display == 'none'){
			modal.style.display = 'block';
		}
		dlg.style.display = 'block';
		close.style.display = 'block';
		$('#video').parent().append('<source src="gallery/imagens/2/power_boxe.mp4" type="video/mp4" class="previewImage" >');
	}

/*********************************************/	

	function dlgClose3(){
		var modal = document.getElementById("mybtn3");
		var dlg = document.getElementById("dlgbox3");
		var close = document.getElementById("close3");
		modal.style.display = "none";
		dlg.style.display = "none";
		close.style.display = "none";
	}

	function showDialog3(){
		var modal = document.getElementById('mybtn3');
		var dlg = document.getElementById('dlgbox3');
		var close = document.getElementById('close3');
		if(modal.style.display == 'none'){
			modal.style.display = 'block';			
		}
		dlg.style.display = 'block';
		close.style.display = 'block';		

	}

	/*******************************************/
		function dlgClose4(){
		var modal = document.getElementById("mybtn4");
		var dlg = document.getElementById("dlgbox4");
		var close = document.getElementById("close4");
		modal.style.display = "none";
		dlg.style.display = "none";
		close.style.display = "none";
	}

	function showDialog4(){
		var modal = document.getElementById('mybtn4');
		var dlg = document.getElementById('dlgbox4');
		var close = document.getElementById('close4');
		if(modal.style.display == 'none'){
			modal.style.display = 'block';
		}
		dlg.style.display = 'block';
		close.style.display = 'block';
	
	}