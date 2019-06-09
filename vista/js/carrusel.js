// Ejemplo de listas

let listaCarreraING = ["Bioingeniería", "Ingeniería Electromecánica", "Ingeniería en Informática", 
					"Ingeniería Industrial", "Tecnicatura en Producción Vegetal Intensiva", 
					"Tecnicatura en Emprendimientos Agropecuarios", "Licenciatura en Administración Agraria",
					"Licenciatura en Ciencias Agrarias", "Ingeniería en Transporte"];

let listaCarreraSOC = ["Licenciatura en Economía", "Licenciatura en Trabajo Social", "Licenciatura en Administración", 
						"Licenciatura en Gestión Ambiental", "Licenciatura en Relaciones del Trabajo"];

// Importo las ID de los elementos a usar

var ingenieria = document.getElementById('ingenieria'),
	salud = document.getElementById('salud'),
	sociales = document.getElementById('sociales'),
	iniciales = document.getElementById('iniciales'),

	contenido = document.getElementById('contenido-body'),
	imagen = document.getElementById('selector-imagen');



// Verifica donde se hace click y realiza la accion indicada

ingenieria.addEventListener('click', function(){
	limpiarCarreras(contenido);
	agregarCarreras(contenido, listaCarreraING);
	guardarID(listaCarreraING);
	
//	imagen.setAttribute('src', 'vista/img/buffet.jpg');
})

salud.addEventListener('click', function(){
	limpiarCarreras(contenido);
})

sociales.addEventListener('click', function(){
	limpiarCarreras(contenido);
	agregarCarreras(contenido, listaCarreraSOC);
	guardarID(listaCarreraSOC);
	
})

iniciales.addEventListener('click', function(){
	limpiarCarreras(contenido);
})


// Crea una etiqueta <a> para cada materia y la muestra en pantalla

function agregarCarreras (contenido, listaCarreras){
	var i;
	for (i = 0; i < listaCarreras.length; i++) {
		var a = document.createElement('a');
		var h4 = document.createElement('h4');
//		h4.setAttribute('class', 'boton-carreras');
		a.setAttribute('class', 'carousel-control-next');
		a.classList.add('boton-carreras');
		a.setAttribute('id', "carrera"+i);
		a.setAttribute('href', '#carousel');
		a.setAttribute('role', 'button');
		a.setAttribute('data-slide', 'next');


		a.appendChild(h4);
		contenido.appendChild(a);
		h4.innerHTML = listaCarreras[i];
	}

}

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
		var carrera = "carrera" + i;
		var carrera = document.getElementById(("carrera"+i));
		filtrarMaterias(carrera, i);
	}

}

// Filtra las materias que les corresponde a cada carrera (aun no terminado)

function filtrarMaterias (carrera, id){
	carrera.addEventListener('click', function(){
		alert("Estas buscando las materias del ID: " + id);
	})
}