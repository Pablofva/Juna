// console.log('todo piola');
function materias(numero){

    // console.log('dentro de la funcion');
    // console.log(numero);
    const miajax= new XMLHttpRequest();
    var url='ajax/json.php?q='+numero;
    miajax.open('GET',url,true);
    miajax.send();
    miajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // console.log(this.responseText);
          let datos=JSON.parse(this.responseText);
          //  console.log(datos);
          let res=document.querySelector('#res');
           res.innerHTML='';
           
          for(let item of datos.data){
            // console.log(item);
            //  res.innerHTML +=`<p>${item.NOMBRE}</p><br>`
            
            res.innerHTML +=`<tr>
            <th scope="row" ><p id='incremental'></p></th>
            <td>${item.NOMBRE}</td>
            
          </tr>`
          }
        }
      }
        
    
}
