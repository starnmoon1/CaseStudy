$(document).ready(function(){

    $('.fa-eye').mousedown(function () {
        $('.pass').attr('type', 'text');
    })

    $('.fa-eye').mouseup(function () {
        $('.pass').attr('type', 'password');
    })

    $('.fa-eye').mouseleave(function () {
        $('.pass').attr('type', 'password');
    });
});
