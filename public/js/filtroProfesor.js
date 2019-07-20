function filtroProfesor() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInputprof");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myULcomi");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("p")[1];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}