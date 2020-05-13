$('#firstName').keyup(function () {
    var firstNameValue = $('#firstName').val();
    $('#res1').text(firstNameValue);
});

$('#lastName').keyup(function () {
    var lastNameValue = $('#lastName').val();
    $('#res2').text(lastNameValue);
});

$('#lastName').blur(function () {
    var firstNameValue = $('#firstName').val();
    var lastNameValue = $('#lastName').val();
    $('#res3').text(firstNameValue + ' ' + lastNameValue);
});