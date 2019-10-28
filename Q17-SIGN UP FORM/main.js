function validate() {
    var name = document.getElementById('name').value;

    //Name Validation
    var name_reg = /^([a-z A-Z]+)$/;
    if(name.length == "") {
        document.getElementById('name-text').innerHTML = "Name cannot be empty!";
        document.getElementById('name-text').style.color = "red";
    } else if(name_reg.test(name)) {
        document.getElementById('name-text').innerHTML = "Valid!";
        document.getElementById('name-text').style.color = "green";
    } else {
        document.getElementById('name-text').innerHTML = "Name should contain only characters!";
        document.getElementById('name-text').style.color = "red";
    }

    var age = document.getElementById('age').value;

    //Age Validation
    var age_reg = /^([0-9]\d+)$/;
    if(age.length == "") {
        document.getElementById('age-text').innerHTML = "Age cannot be empty!";
        document.getElementById('age-text').style.color = "red";
    } else if(age_reg.test(age)) {
        document.getElementById('age-text').innerHTML = "Valid!";
        document.getElementById('age-text').style.color = "green";
    } else {
        document.getElementById('age-text').innerHTML = "Age should contain only numbers!";
        document.getElementById('age-text').style.color = "red";
    }

    var address = document.getElementById('address').value;

    //Address Validation
    if(address.length == "") {
        document.getElementById('address-text').innerHTML = "Address cannot be empty!";
        document.getElementById('address-text').style.color = "red";
    } else {
        document.getElementById('address-text').innerHTML = "Valid!";
        document.getElementById('address-text').style.color = "green";
    }

    var mobile = document.getElementById('mobile').value;

    //Mobile Validation
    var mobile_reg = /^([0-9]\d{9})$/;
    if(mobile.length == "") {
        document.getElementById('mobile-text').innerHTML = "Mobile cannot be empty!";
        document.getElementById('mobile-text').style.color = "red";
    } else if(mobile_reg.test(mobile)) {
        document.getElementById('mobile-text').innerHTML = "Valid!";
        document.getElementById('mobile-text').style.color = "green";
    } else {
        document.getElementById('mobile-text').innerHTML = "Mobile should contain only numbers!";
        document.getElementById('mobile-text').style.color = "red";
    }

    var username = document.getElementById('username').value;

    //Username Validation
    var user_reg = /^([a-z A-z])([a-z A-Z 0-9 @ \. - # &]+)$/;
    if(username.length == "") {
        document.getElementById('username-text').innerHTML = "Username cannot be empty!";
        document.getElementById('username-text').style.color = "red";
    } else if(user_reg.test(username)) {
        document.getElementById('username-text').innerHTML = "Valid!";
        document.getElementById('username-text').style.color = "green";
    } else {
        document.getElementById('username-text').innerHTML = "Invalid!";
        document.getElementById('username-text').style.color = "red";
    }

    var password = document.getElementById('password').value;

    //Password Validation
    var pass_reg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])[A-Z a-z \d !@#\$%\^&\*]{8,}$/;
    if(password.length == "") {
        document.getElementById('pass-text').innerHTML = "Password cannot be empty!";
        document.getElementById('pass-text').style.color = "red";
    } else if(password.length < 8) {
        document.getElementById('pass-text').innerHTML = "Password should be greater than 8 characters!";
        document.getElementById('pass-text').style.color = "red";
    }
     else if(pass_reg.test(password)) {
        document.getElementById('pass-text').innerHTML = "Valid!";
        document.getElementById('pass-text').style.color = "green";
    } else {
        document.getElementById('pass-text').innerHTML = "Invalid!";
        document.getElementById('pass-text').style.color = "red";
    }

    var email = document.getElementById('email').value;

    //Email Validation
    var email_reg = /^([a-z A-Z 0-9 \. -]+)@([a-z A-Z 0-9 -]+)\.([a-z]{2,5})(\.[a-z]{2,8})?$/;
    if(email.length == "") {
        document.getElementById('email-text').innerHTML = "Email cannot be empty!";
        document.getElementById('email-text').style.color = "red";
    } else if(email_reg.test(email)) {
        document.getElementById('email-text').innerHTML = "Valid!";
        document.getElementById('email-text').style.color = "green";
    } else {
        document.getElementById('email-text').innerHTML = "Enter a valid email!";
        document.getElementById('email-text').style.color = "red";
    }

    return false;
}