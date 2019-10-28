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

    var country = document.getElementById('country').value;

    //Country Validation
     
    if(country == 0) {
        document.getElementById('country-text').innerHTML = "Please select a country!";
        document.getElementById('country-text').style.color = "red";
    } else {
        document.getElementById('country-text').innerHTML = "Valid!";
        document.getElementById('country-text').style.color = "green";
    }

    var zip = document.getElementById('zip').value;

    //Zip Code Validation
    var zip_reg = /^([0-9]\d+)$/;
    if(zip.length == "") {
        document.getElementById('zip-text').innerHTML = "Zip Code cannot be empty!";
        document.getElementById('zip-text').style.color = "red";
    } else if(zip_reg.test(zip)) {
        document.getElementById('zip-text').innerHTML = "Valid!";
        document.getElementById('zip-text').style.color = "green";
    } else {
        document.getElementById('zip-text').innerHTML = "Zip Code should contain only numbers!";
        document.getElementById('zip-text').style.color = "red";
    }

    var username = document.getElementById('username').value;

    //Username Validation
    var user_reg = /^([a-z A-z])([a-z A-Z 0-9 @ \. - # &]{5,12})$/;
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
    var pass_reg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])[A-Z a-z \d !@#\$%\^&\*]{7,12}$/;
    if(password.length == "") {
        document.getElementById('pass-text').innerHTML = "Password cannot be empty!";
        document.getElementById('pass-text').style.color = "red";
    } else if(password.length < 7) {
        document.getElementById('pass-text').innerHTML = "Password should be greater than 7 characters!";
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

    //Gender Validation

    var gender = document.getElementById('gender');

    if(gender.checked){
        document.getElementById('gender-text').innerHTML = "Valid!";
        document.getElementById('gender-text').style.color = "green";
    } else {
        document.getElementById('gender-text').innerHTML = "Gender cannot be empty!";
        document.getElementById('gender-text').style.color = "red";
    }

    //Language Validation

    var lang = document.getElementById('lang');

    if(lang.checked){
        document.getElementById('lang-text').innerHTML = "Valid!";
        document.getElementById('lang-text').style.color = "green";
    } else {
        document.getElementById('lang-text').innerHTML = "Language cannot be empty!";
        document.getElementById('lang-text').style.color = "red";
    }

    return false;
}