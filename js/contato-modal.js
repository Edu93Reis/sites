	"use strict";

	function dlg_cont_Close(){
		var contmodal = document.getElementById("showbox");
		var contdlg = document.getElementById("showform");
		var contclose = document.getElementById("close_contato");
		contmodal.style.display = "none";
		contdlg.style.display = "none";
		contclose.style.display = "none";
	}

	function showModal(){
		var contmodal = document.getElementById("box");
		var contdlg = document.getElementById("showform");
		var contclose = document.getElementById("close_contato");
		if(contmodal.style.display == 'none'){ //o erro é aqui
			contmodal.style.display = 'block';
			alert('Funfou');			
		}
		contdlg.style.display = 'block';
		contclose.style.display = 'block';
	}

/********************************************/