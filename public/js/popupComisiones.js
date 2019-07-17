function llamarImagen(idOb){
	console.log(idOb);
	//let datos=JSON.parse(idedi);
	//console.log(datos);
    contenidoHeader = document.getElementById('header');
    contenidoBody = document.getElementById('body');
    contenidoFooter = document.getElementById('footer');
    contenidoHeader.innerHTML='';
    contenidoBody.innerHTML='';
    contenidoFooter.innerHTML='';
    contenidoHeader.innerHTML +=`
    ${idOb.sede}
     `;
     contenidoBody.innerHTML +=`<div class="container">
      <img src="/img/${idOb.imagen}" class="img-fluid"/>
      </div>
	 `;
	 contenidoFooter.innerHTML +=`
	  ${idOb.edificio}
	 `;
     
    // const miajax= new XMLHttpRequest();
	// 	var url='http://juna.test/devolverImagen/'+idedi;
	// 	 console.log(url);
	// 	miajax.open('GET',url,true);
	// 	miajax.send();
	// 	miajax.onreadystatechange = function() {
	// 		if (this.readyState == 4 && this.status == 200) {
	// 		//    console.log('estoy aqui');
	// 		//    console.log(this.responseText);
	// 		  	let datos=JSON.parse(this.responseText);
	// 			console.log(datos);
	// 			// LLAMO A LA FUNCION AGREGAR CARRERAS
	// 			proyectarImagen(conten,datos);
	// 			// guardarID(datos);
			 	
	// 		}
	// 		// console.log("no entre");
	// 	  }

}