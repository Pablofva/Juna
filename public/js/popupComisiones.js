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
     <p class="popupcomi">${idOb.direccion}</p>
      <img src="/img/${idOb.imagen}" class="img-fluid"/>
      </div>
	 `;
	 contenidoFooter.innerHTML +=`
	  ${idOb.edificio}
	 `;
     

}