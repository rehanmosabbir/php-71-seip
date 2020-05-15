

function checkFirstName () {
    var firstNameLength = $('#firstName').val().length;
    if(firstNameLength >= 6 && firstNameLength <= 15){
        $('#firstNameError').text(' ');
        return true;
    } else {
        $('#firstNameError').text('First name should be between 6 to 15 characters');
        return false;
    }
}
// $('#firstName').click(function () {
//     checkFirstName();
// });
$('#firstName').blur(function () {
    checkFirstName();
});

$('#firstName').keyup(function () {
    checkFirstName();
});


function checkLastName () {
    var lastNameLength = $('#lastName').val().length;
    if(lastNameLength >= 6 && lastNameLength <= 15){
        $('#lastNameError').text(' ');
        return true;
    } else {
        $('#lastNameError').text('Last name should be between 6 to 15 characters');
        return false;
    }
}
// $('#lastName').click(function () {
//     checkLastName();
// });
$('#lastName').blur(function () {
    checkLastName();
});

$('#lastName').keyup(function () {
    checkLastName();
});

function checkEmailAddress(){
    var pattern = new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
    );
    if(pattern.test($('#emailAddress').val())){
        $('#emailAddressError').text(' ');
        return true;
    } else {
        $('#emailAddressError').text('Email Address is invalid');
        return false;
    }
}

// $('#emailAddress').click(function () {
//     checkEmailAddress();
// });
$('#emailAddress').blur(function () {
    checkEmailAddress();
});

$('#emailAddress').keyup(function () {
    checkEmailAddress();
});


function checkPassword () {
    var passwordLength = $('#password').val().length;
    if(passwordLength >= 8){
        $('#passwordError').text(' ');
        return true;
    } else {
        $('#passwordError').text('password should be at least 8 characters');
        return false;
    }
}
// $('#lastName').click(function () {
//     checkLastName();
// });
$('#password').blur(function () {
    checkPassword();
});

$('#password').keyup(function () {
    checkPassword();
});

$('#showHide').click(function () {
    var attrValue = $('#password').attr('type');
    if (attrValue === 'password'){
        $('#password').attr('type','text');
    } else {
        $('#password').attr('type','password');
    }
});

function checkConfirmPassword () {
    var confirmPassword = $('#confirmPassword').val();
    var password = $('#password').val();
    if(confirmPassword === password){
        $('#confirmPasswordError').text(' ');
        return true;
    } else {
        $('#confirmPasswordError').text('password and confirm password does not match');
        return false;
    }
}
// $('#confirmPassword').click(function () {
//     $('#confirmPasswordError').text('password and confirm password should be match');
// });
$('#confirmPassword').blur(function () {
    checkConfirmPassword();
});

$('#confirmPassword').keyup(function () {
    checkConfirmPassword();
});

function checkGenderInfo() {
    var genderInfo = $('input[type="radio"]:checked').val();
    if(genderInfo === 'male' || genderInfo === 'female'){
        $('#genderError').text(' ');
        return true;
    } else {
        $('#genderError').text('Please give your gender information');
        return false;
    }
}


function checkDistrictName() {
    var districtNameValue = $('#districtName').val();
    if(districtNameValue === ' '){
        $('#districtNameError').text('Please give your district information');
        return false;
    }else {
        $('#districtNameError').text(' ');
        return true;
    }
}
$('#districtName').blur(function () {
    checkDistrictName();
});






$('#registrationForm').submit(function () {
    if(checkFirstName() === true && checkLastName() === true && checkEmailAddress() === true && checkPassword() === true && checkConfirmPassword() === true && checkGenderInfo() === true && checkDistrictName() === true){
        return true;
    } else {
        return false;
    }
});