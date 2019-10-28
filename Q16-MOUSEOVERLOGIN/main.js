function newColor(val){
    document.getElementById(val).style.backgroundColor = "green";
}

function oldColor(val){
    document.getElementById(val).style.backgroundColor = "white";
}

function validate() {
    var password = document.getElementById('pass').value;
    
    
    var reg = /^([a-z A-Z 0-9]{12,20})$/
    if(password == ""){
        document.getElementById('passtext').innerHTML = "Password cannot be empty";
        document.getElementById('passtext').style.color = "red";
    } else if(password.length < 12){
        document.getElementById('passtext').innerHTML = "Password should be greater than 12 characters";
        document.getElementById('passtext').style.color = "red";
    } else if(reg.test(password)){
        document.getElementById('passtext').innerHTML = "Valid";
        document.getElementById('passtext').style.color = "green";
    } else {
        document.getElementById('passtext').innerHTML = "Password must be alphanumeric only";
        document.getElementById('passtext').style.color = "red";
    }
    return false;
}