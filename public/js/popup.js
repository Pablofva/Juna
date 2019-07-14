// Importo las ID de los elementos a usar

var abrirBuffet = document.getElementById('buffet'),
	abrirSala = document.getElementById('sala'),
	abrirFotocopiadora = document.getElementById('fotocopiadora'),
	abrirDepartamentos = document.getElementById('departamentos'),
	abrirLaboratorio = document.getElementById('laboratorio'),
	abrirBaños = document.getElementById('baños'),

	imagen = document.getElementById('selector-imagen');

// Se agrega una imagen segun donde se haya hecho un click

abrirBuffet.addEventListener('click', function(){
	imagen.setAttribute('src', '../img/buffet.jpg');
})

abrirSala.addEventListener('click', function(){
	imagen.setAttribute('src', '../img/3.jpg');
})

abrirFotocopiadora.addEventListener('click', function(){
	imagen.setAttribute('src', '../img/3.jpg');
})

abrirDepartamentos.addEventListener('click', function(){
	imagen.setAttribute('src', '../img/3.jpg');
})

abrirLaboratorio.addEventListener('click', function(){
	imagen.setAttribute('src', '../img/3.jpg');
})

abrirBaños.addEventListener('click', function(){
	imagen.setAttribute('src', '../img/3.jpg');
})

