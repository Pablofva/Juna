// AGREGO COLORES A LOS BOTONES DE LOS INSTITUTOS
document.getElementById('INGENIERIA').className = "btn btn-danger btn-block boton-institutos",
document.getElementById('SALUD').className = "btn btn-success btn-block boton-institutos",
document.getElementById('SOCIALES').className = "btn btn-info btn-block boton-institutos",
document.getElementById('ESTUDIOS INICIALES').className = "btn btn-primary btn-block boton-institutos";



// Importo las ID de los elementos a usar

var ingenieria = document.getElementById('ingenieria'),
	salud = document.getElementById('salud'),
	sociales = document.getElementById('sociales'),
	iniciales = document.getElementById('iniciales'),

	contenido = document.getElementById('contenido-body'),
	contenidoMate = document.getElementById('contenidoMate-body'),
	imagen = document.getElementById('selector-imagen');
function carrerasAjax(id){
		// console.log('dentro de la funcion');
		const miajax= new XMLHttpRequest();
		var url='http://juna.test/listarCarreras/'+id;
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
				agregarCarreras(contenido,datos);
				// guardarID(datos);
			 	
			}
			// console.log("no entre");
		  }
		  
		}

		function agregarCarreras (contenido, listaCarreras){
			var i;
			//   console.log("hola ya estoy en agregar carreras");
			// console.log(listaCarreras.length);
			contenido.innerHTML='';
			for(let item of listaCarreras){
			  contenido.innerHTML +=`
			  <a href="#carousel" class="carousel-control-next boton-carreras" data-slide="next" onclick="llamarMaterias(${item.id})">
			  <h4 class="boton-carreras">
			  ${item.nombre}
			  </h4></a>
			 `;
			}
		}
		// PRIMERA FUNCION LLAMADA POR EL ONCLICK
		function llamarCarreras(id){
			console.log(id);
			limpiarCarreras(contenido);
			carrerasAjax(id);//LA VARIEBLE ARREGLO CONTIENE EL ARREGLO OBTENIDO POR AJAX DE LA FUNCION MATERIAS
			// agregarCarreras(contenido,arreglo);
			// guardarID(listaCarreraING);
			
		}
		// AJAX DE MATERIAS
		function materiasAjax(id){
			
			// console.log('dentro de la funcion materias ajax');
			 console.log(id);
			const miajax= new XMLHttpRequest();
			var url='http://juna.test/listarMaterias/'+id;
			miajax.open('GET',url,true);
			miajax.send();
			miajax.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) {
					// console.log('recien entre a materias fdsfsdfsdfsfsdfdsfsdf');
					// console.log(this.responseText);
					let datos=JSON.parse(this.responseText);
					console.log(datos);
					agregarMaterias(contenidoMate,datos);
					// guardarID(datos);
					return datos;
				}
				// console.log('no llegue a entrar a materias');
			}
			
		}
		function agregarMaterias (contenido, listaCarreras){
			var i;
			// console.log("hola ya estoy en agregar materias");
			// console.log(listaCarreras.length);
			contenido.innerHTML='';
			for(let item of listaCarreras){
				contenido.innerHTML +=`
				<form id="form1" action="{{route('listarCarreras')}}/{{$item->id}}" method="GET">
				</form>
				<a href="#carousel" class="carousel-control-next boton-carreras" data-slide="next" onclick="ajaxMaterias(${item.id})"><h4 class="boton-carreras">${item.nombre}</h4></a>
				`
			}
			
		}
		function llamarMaterias(id){
			// CAPTO EL URL DEL FORM ANTES DE BORRAR EL contenido;
			console.log('id de materias');
			console.log(id);
			limpiarCarreras(contenidoMate);
			materiasAjax(id);//LA VARIEBLE ARREGLO CONTIENE EL ARREGLO OBTENIDO POR AJAX DE LA FUNCION MATERIAS
			// agregarCarreras(contenido,arreglo);
			// guardarID(listaCarreraING);
	
	}
// Verifica donde se hace click y realiza la accion indicada

// Crea una etiqueta <a> para cada materia y la muestra en pantalla

	  
// borra el contenido del contenedor - esto sirve para cuando vuelven hacia atras

function limpiarCarreras (contenido){
	while (contenido.firstChild) {
		contenido.removeChild(contenido.firstChild);
	}
}

// Guarda las ID de cada carrera para poder seleccionar las materias correspondientes

function guardarID (listaCarreras){
	var i;
	for (i = 0; i < listaCarreras.length; i++) {
		var carrera =carrera + i;
		console.log(carrera);
		var carrera = document.getElementById(("carrera"+i));
		console.log(carrera);
		filtrarMaterias(carrera, i);
	}

}

// Filtra las materias que les corresponde a cada carrera (aun no terminado)

function filtrarMaterias (carrera, id){
	carrera.addEventListener('click', function(){
//		alert("Estas buscando las materias del ID: " + id);
	})
}