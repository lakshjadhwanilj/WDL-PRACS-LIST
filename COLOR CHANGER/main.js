function colorChange(){

    var bgcolor = document.getElementById('bgcolor').value;
    var fgcolor = document.getElementById('fgcolor').value;

    document.getElementById('body').style.backgroundColor = bgcolor;
    document.getElementById('body').style.color = fgcolor;
return false;
}