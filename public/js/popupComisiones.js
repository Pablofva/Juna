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
<<<<<<< HEAD
     <p class="popupcomi">${idOb.direccion}</p>
=======
     <p class="popupcomi">${idOb.edificio}</p>
>>>>>>> Alex1
      <img src="/img/${idOb.imagen}" class="img-fluid" width="500"/>
      </div>
	 `;
	 contenidoFooter.innerHTML +=`
<<<<<<< HEAD
	  ${idOb.edificio}
=======
	  ${idOb.direccion}
>>>>>>> Alex1
	 `;
     

}