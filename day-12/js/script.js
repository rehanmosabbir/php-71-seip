


$('#btn').click(function () {
    var firstNameValue = $('#firstName').val();
    var lastNameValue = $('#lastName').val();
    var fullName = firstNameValue + ' ' + lastNameValue;
    $('#fullName').val(fullName);
});
// alert($('#h1').text());

// $('#h1').html('Hello World!');



















// var redBtnElement = document.getElementById('redBtn');
// redBtnElement.onclick = function () {
//     var divOneElement = document.getElementById('divOne');
//     // divOneElement.style.backgroundColor = 'red';
//     divOneElement.className = 'class-one';
// }
//
// var greenBtnElement = document.getElementById('greenBtn');
// greenBtnElement.onclick = function () {
//     var divOneElement = document.getElementById('divOne');
//     divOneElement.style.backgroundColor = 'green';
// }
// var blueBtnElement = document.getElementById('blueBtn');
// blueBtnElement.onclick = function () {
//     var divOneElement = document.getElementById('divOne');
//     divOneElement.style.backgroundColor = 'blue';
// }
// var defaultBtnElement = document.getElementById('defaultBtn');
// defaultBtnElement.onclick = function () {
//     var divOneElement = document.getElementById('divOne');
//     divOneElement.style.backgroundColor = 'grey';
// }














// var btnElement = document.getElementById('btn');
// btnElement.onclick = function () {
//     var startingNumberValue = document.getElementById('startingNumber').value;
//     var endingNumberValue = document.getElementById('endingNumber').value;
//     var res = '';
//     for (var i = startingNumberValue;i <= endingNumberValue;i++){
//         res += i;
//     }
//     document.getElementById('result').value = res;
// }