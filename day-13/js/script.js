
$('#subImage1').click(function () {
    var subImage = $(this).attr('src');
    $('#mainImage').attr('src',subImage);
});
$('#subImage2').click(function () {
    var subImage = $(this).attr('src');
    $('#mainImage').attr('src',subImage);
});
$('#subImage3').click(function () {
    var subImage = $(this).attr('src');
    $('#mainImage').attr('src',subImage);
});




// document.getElementById('btn').onclick = function () {
//     var newHeadingElement = document.createElement('h1');
//     var newParagraphElement = document.createElement('p');
//
//     newHeadingElement.innerHTML = 'This is a heading';
//     newParagraphElement.innerHTML = 'This is a paragraph.'
//     document.getElementById('divOne').appendChild(newParagraphElement);
//     document.getElementById('divOne').appendChild(newHeadingElement);
// }



// $('#firstName').keyup(function () {
//     var firstNameValue = $('#firstName').val();
//     $('#res1').text(firstNameValue);
// });
//
// $('#lastName').keyup(function () {
//     var lastNameValue = $('#lastName').val();
//     $('#res2').text(lastNameValue);
// });
//
// $('#lastName').blur(function () {
//     var firstNameValue = $('#firstName').val();
//     var lastNameValue = $('#lastName').val();
//     $('#res3').text(firstNameValue + ' ' + lastNameValue);
// });