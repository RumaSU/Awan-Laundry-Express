$(document).ready(function () {
    var icnShwNavMobile = $('#clckShwNavMobile');
    var icnClsNavMobile = $('#clckClsNavMobile');
    var contentNavMobile = $('#container-utilsMobile');

    icnShwNavMobile.click(() => {
        contentNavMobile.show();
    });
    icnClsNavMobile.click(() => {
        contentNavMobile.hide();
    });
    
    $(document).on('mouseup', function (e) {
        // Periksa apakah event target bukan bagian dari contentNavMobile
        if (!contentNavMobile.is(e.target) && contentNavMobile.has(e.target).length === 0) {
            contentNavMobile.hide();
        }
    });
    
    $(window).on('resize', (e) => {
        contentNavMobile.hide();
    });
    
});