$(document).ready(function () {
    let hCPromo = $('.ctr-cPromoItm').height();
    $('.accsPrmItm').css({
        'height': hCPromo + 'px'
    });
    $(window).on('resize', (e) => {
        hCPromo = $('.ctr-cPromoItm').height();
        $('.accsPrmItm').css({
            'height': hCPromo + 'px'
        });
        console.log(hCPromo + 'px');
    });
});