function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            convertText(this);
        }
    };
    xhttp.open("GET","collection.xml",true);
    xhttp.send();
    return false;
}

function convertText(xml) {
    var i;
    var xmlDoc = xml.responseXML;
    var table = "<tr><th>TITLE</th><th>COMPANY</th><th>PRICE</th><th>YEAR</th></tr>";
    var x = xmlDoc.getElementsByTagName("cd");
    for(i = 0; i < x.length; i++){
        table += "<tr><td>" + x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue + "</td>" + "<td>" + x[i].getElementsByTagName("COMPANY")[0].childNodes[0].nodeValue + "</td>" + "<td>" + x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue + "</td>" + "<td>" + x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue + "</td></tr>";
    }
    document.getElementById('contain').innerHTML = table;
}