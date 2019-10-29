$(document).ready(function(){
    $("#submit").click(function(){
        return validate();
    });
});

function validate() {
                
        //Name Validation
        var fname = $("#fname").val();                
        var lname = $("#lname").val();
        var name_reg = /^([a-z A-Z]+)$/;

        if(fname == ""){
            $("#fname-text").css("color","red");
            $("#fname-text").text("First Name cannot be blank.");
        } else if(name_reg.test(fname)){
            $("#fname-text").css("color","green");
            $("#fname-text").text("Valid");
        } else {
            $("#fname-text").css("color","red");
            $("#fname-text").text("Enter a valid First Name.");
        }

        if(lname == ""){
            $("#lname-text").css("color","red");
            $("#lname-text").text("Last Name cannot be blank.");
        } else if(name_reg.test(lname)){
            $("#lname-text").css("color","green");
            $("#lname-text").text("Valid");
        } else {
            $("#lname-text").css("color","red");
            $("#lname-text").text("Enter a valid Last Name.");
        }

        //Gender Validation
        var gender = $("#gender").val();

        if(gender == 0){
            $("#gender-text").css("color","red");
            $("#gender-text").text("Please select a gender.");
        } else {
            $("#gender-text").css("color","green");
            $("#gender-text").text("Valid.");
        }

        //Address Validation
        var address = $("#address").val();
        if(address == ""){
            $("#address-text").css("color","red");
            $("#address-text").text("Address cannot be blank.");
        } else {
            $("#address-text").css("color","green");
            $("#address-text").text("Valid.");
        }

        //Mobile Validation
        var mobile = $("#mobile").val();
        var mobile_reg = /^([0-9]\d+)$/;
        if(mobile == ""){
            $("#mobile-text").css("color","red");
            $("#mobile-text").text("Mobile Number cannot be blank.");
        } else if(mobile_reg.test(mobile)){
            $("#mobile-text").css("color","green");
            $("#mobile-text").text("Valid");
        } else {
            $("#mobile-text").css("color","red");
            $("#mobile-text").text("Enter a valid Mobile Number.");
        }

        //Email Validation
        var email = $("#email").val();
        var email_reg = /^([a-z A-Z 0-9 \. -]+)@([a-z A-Z 0-9 -]{2,8})\.([a-z]{2,8})(\.[a-z]{2,8})?$/;
        if(email == ""){
            $("#email-text").css("color","red");
            $("#email-text").text("Email cannot be blank.");
        } else if(email_reg.test(email)){
            $("#email-text").css("color","green");
            $("#email-text").text("Valid");
        } else {
            $("#email-text").css("color","red");
            $("#email-text").text("Enter a valid Email.");
        }
    return false;
}