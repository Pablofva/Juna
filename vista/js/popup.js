
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
	imagen.setAttribute('src', 'vista/img/buffet.jpg');
})

abrirSala.addEventListener('click', function(){
	imagen.setAttribute('src', 'vista/img/sala.jpg');
})

abrirFotocopiadora.addEventListener('click', function(){
	imagen.setAttribute('src', 'vista/img/foto.jpg');
})

abrirDepartamentos.addEventListener('click', function(){
	imagen.setAttribute('src', 'vista/img/3.jpg');
})

abrirLaboratorio.addEventListener('click', function(){
	imagen.setAttribute('src', 'vista/img/3.jpg');
})

abrirBaños.addEventListener('click', function(){
	imagen.setAttribute('src', 'vista/img/3.jpg');
})

