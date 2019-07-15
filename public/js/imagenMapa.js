function llamarImagen(idedi){
    conten = document.getElementById('myimagen');
    const miajax= new XMLHttpRequest();
		var url='http://juna.test/devolverImagen/'+idedi;
		 console.log(url);
		miajax.open('GET',url,true);
		miajax.send();
		miajax.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			//    console.log('estoy aqui');
			//    console.log(this.responseText);
			  	let datos=JSON.parse(this.responseText);
				console.log(datos);
				// LLAMO A LA FUNCION AGREGAR CARRERAS
				proyectarImagen(conten,datos);
				// guardarID(datos);
			 	
			}
			// console.log("no entre");
		  }

}
function proyectarImagen (conten, listaCarreras){
    var i;
    //   console.log("hola ya estoy en agregar carreras");
    // console.log(listaCarreras.length);
    conten.innerHTML='';
    for(let item of listaCarreras){
      conten.innerHTML +=`
      <img src="/img/${item.imagen}" width="500"/>
     `;
    }
}