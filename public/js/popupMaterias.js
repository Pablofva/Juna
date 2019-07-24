contenidoMate = document.getElementById('listarMaterias');
function materiasAjax(url){
     console.log(url);
    const miajax= new XMLHttpRequest();
    miajax.open('GET',url,true);
    miajax.send();
    miajax.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            
            let datos=JSON.parse(this.responseText);
            console.log(datos);
            // CON ESTA FUNCION LO PROYECTO EN LA TABLA
            proyeccion(contenidoMate,datos);
            return datos;
        }
       
    }
    
}
// FUNCION PARA PROYECTAR
function proyeccion (contenido, listaCarreras){
    contenido.innerHTML='';
    for(let item of listaCarreras){
        contenido.innerHTML +=`
        <tr>
        <td>
        ${item.nombre}
        </td>
        <td>
        <h4 class="boton-carreras">${item.anio}</h4>
        </td>
        <td>
        <a href="/listarComisiones/${item.id}" class="btn btn-success" role="button">Buscar</a>
        </td>
        </tr>
        `
    }
    
}