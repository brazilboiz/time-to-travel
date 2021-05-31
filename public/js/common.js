$(function () {
    $('.basket__icon').on('click',function () {
        $('.basket__box').show();
    });

    $('.close').on('click',function () {
        $('.basket__box').hide();
    })
})