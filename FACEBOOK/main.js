function validate(){
    //for name
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var password = document.getElementById('password').value;

    if(fname == "" || lname =="") {
        document.getElementById('name').style.visibility = "visible";
        return false;
    } else if(email == "") {
        document.getElementById('mail').innerHTML = "Email cannot be blank!";
        document.getElementById('mail').style.visibility = "visible";
        return false;        
    } else if(mobile == ""){
        document.getElementById('mail').innerHTML = "Mobile No cannot be blank!";
        document.getElementById('mail').style.visibility = "visible";
        return false;
    } else if(password == "") {
        document.getElementById('pass').style.visibility = "visible";
        return false;
    }

    if(fname.length < 3 || lname.length < 3) {
        document.getElementById('name').innerHTML = "Enter valid name!";
        document.getElementById('name').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('name').innerHTML = "Valid!";
        document.getElementById('name').style.visibility = "visible";
        document.getElementById('name').style.color = "green";       
    }

    if (password.length < 8) {
        document.getElementById('pass').innerHTML = "Weak Password";
        document.getElementById('pass').style.visibility = "visible"; 
        return false;       
    } else {
        document.getElementById('pass').innerHTML = "Strong Password";
        document.getElementById('pass').style.visibility = "visible"; 
        document.getElementById('pass').style.color = "green";       
    }

    var email_reg = /^([a-z A-Z 0-9 \. -]+)@([a-z A-Z 0-9 -]+)\.([a-z]{2,5})(\.[a-z]{2,8})?$/;

    if(email_reg.test(email)) {
        document.getElementById('mail').innerHTML = "Valid!";
        document.getElementById('mail').style.visibility = "visible";
        document.getElementById('mail').style.color = "green";
    } else {
        document.getElementById('mail').innerHTML = "Invalid Email!";
        document.getElementById('mail').style.visibility = "visible";
        return false;
    }

    var mno_reg = /^[0-9]\d{9}$/;

    if(mno_reg.test(mobile)) {
        document.getElementById('mail').innerHTML = "Valid!";
        document.getElementById('mail').style.visibility = "visible";
        document.getElementById('mail').style.color = "green";

    } else {
        document.getElementById('mail').innerHTML = "Invalid Mobile No.!";
        document.getElementById('mail').style.visibility = "visible";
        return false;
    }
    
    var gender = document.getElementsByName("gender");
    if(gender[0].checked == false && gender[1].checked == false && gender[2].checked == false) {
        document.getElementById('gender').style.visibility = "visible";
    } else {
        document.getElementById('gender').innerHTML = "Valid!";
        document.getElementById('gender').style.visibility = "visible";
        document.getElementById('gender').style.color = "green";
    }
    return false;


}
