function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('contain').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","test.html",true);
    xhttp.send();
    return false;
}