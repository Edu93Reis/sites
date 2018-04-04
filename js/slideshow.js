function setImage(){

	var settings = {

		first_Img: function(){
			elemento = document.querySelector("#slider a:first-child");
			elemento.classList.add("ativo");
				this.legenda(elemento);
		},
			slide: function(){
				elemento = document.querySelector(".ativo");
				if(elemento.nextElementSibling){
					elemento.nextElementSibling.classList.add("ativo");
						settings.legenda(elemento.nextElementSibling);
					elemento.classList.remove("ativo");
				}else{
					elemento.classList.remove("ativo");
					settings.first_Img();
				}
			},

	proximo: function(){

		clearInterval(intervalo);
		elemento = document.querySelector(".ativo");

		if(elemento.nextElementSibling){
			elemento.nextElementSibling.classList.add("ativo");
			settings.legenda(elemento.nextElementSibling);
			elemento.classList.remove("ativo");
		}else{
				elemento.classList.remove("ativo");
			settings.first_Img();
		}
		intervalo = setInterval(settings.slide,15000)
	},


	anterior: function(){

		clearInterval(intervalo);
		elemento = document.querySelector(".ativo");

		if(elemento.previousElementSibling){
			elemento.previousElementSibling.classList.add("ativo");
			settings.legenda(elemento.previousElementSibling);
			elemento.classList.remove("ativo");
		}else{
			elemento.classList.remove("ativo");
			elemento = document.querySelector("a:last-child");
			elemento.classList.add("ativo");
			this.legenda(legenda);
		}
		intervalo = setInterval(settings.slide,15000);
	},

	legenda: function(obj){
				var legenda = obj.querySelector("img").getAttribute("alt");
				document.querySelector("figcaption").innerHTML = legenda;
			}

	}

	settings.first_Img();

	settings.legenda(elemento);

		var intervalo = setInterval(settings.slide,15000);

		document.querySelector(".next").addEventListener("click",settings.proximo,false);
		document.querySelector(".prev").addEventListener("click",settings.proximo,false);

	}

	window.addEventListener("load",setImage,false);