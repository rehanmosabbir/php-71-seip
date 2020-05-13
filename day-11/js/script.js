var btnElement = document.getElementById('btn');
btnElement.onclick = function () {
    var firstNameValue = document.getElementById('firstName').value;
    var lastNameValue = document.getElementById('lastName').value;
    var fullName = firstNameValue + ' ' + lastNameValue;
    document.getElementById('fullName').value = fullName;
}

// Calculator
document.getElementById('addition').onclick = function () {
    var firstNumberValue = Number(document.getElementById('firstNumber').value);
    var lastNumberValue = Number(document.getElementById('lastNumber').value);
    var result = firstNumberValue + lastNumberValue;
    document.getElementById('result').value = result;
}
document.getElementById('subtraction').onclick = function () {
    var firstNumberValue = document.getElementById('firstNumber').value;
    var lastNumberValue = document.getElementById('lastNumber').value;
    var result = firstNumberValue - lastNumberValue;
    document.getElementById('result').value = result;
}
document.getElementById('multiplication').onclick = function () {
    var firstNumberValue = document.getElementById('firstNumber').value;
    var lastNumberValue = document.getElementById('lastNumber').value;
    var result = firstNumberValue * lastNumberValue;
    document.getElementById('result').value = result;
}
document.getElementById('division').onclick = function () {
    var firstNumberValue = document.getElementById('firstNumber').value;
    var lastNumberValue = document.getElementById('lastNumber').value;
    var result = firstNumberValue / lastNumberValue;
    document.getElementById('result').value = result;
}
document.getElementById('remainder').onclick = function () {
    var firstNumberValue = document.getElementById('firstNumber').value;
    var lastNumberValue = document.getElementById('lastNumber').value;
    var result = firstNumberValue % lastNumberValue;
    document.getElementById('result').value = result;
}
// var x;
// x = 10;
// document.write(x);

// var a = new Array();
// var b = Array();

// var data = [];
// data[0] = 10;
// data[1] = 20;
// data[2] = 30;
//
// data['name'] = 'Mosabbir';
// data['age'] = 31;
// data['country'] = 'Bangladesh';
// data['city'] = 'Dhaka';

// document.write(data[1]);
// document.write('<br>');
// document.write(data['age']);
// document.write('<br>');
// document.write(data['country']);

// for (var key in data) {
//     document.write(data[key]);
//     document.write('<br>');
// }
//
// document.write(typeof (data));
// document.write('<br>');
// document.write(data.length - 1);

// var paragraphElement = document.getElementsByTagName('p');
// for (var key in paragraphElement) {
//     document.write(paragraphElement[key].innerHTML+ '<br>');
// }

// for(var i = 0;i < paragraphElement.length;i++){
//     document.write(paragraphElement[i].innerHTML+ '<br>');
// }

// function demo(firstname,lastname) {
//     var fullname = firstname + ' ' + lastname;
//     document.write(fullname);
// }
//
// demo('Mosaabbir','Rehan');