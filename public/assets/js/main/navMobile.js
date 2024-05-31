$(document).ready(function () {
    var icnShwNavMobile = $('#clckShwNavMobile');
    var icnClsNavMobile = $('#clckClsNavMobile');
    var contentNavMobile = $('#container-utilsMobile');
    let wWidth = $( window ).width();

    icnShwNavMobile.click(() => {
        contentNavMobile.show();
        if (wWidth < 640) {
            $('body').css({
                'overflow': 'hidden'
            });
        }
    });
    icnClsNavMobile.click(() => {
        contentNavMobile.hide();
        $('body').removeAttr('style');
    });
    
    $(document).on('mouseup', function (e) {
        if (!contentNavMobile.is(e.target) && contentNavMobile.has(e.target).length === 0) {
            contentNavMobile.hide();
        }
    });
    
    $(window).on('resize', (e) => {
        contentNavMobile.hide();
        wWidth = $( window ).width();
        
        $('body').removeAttr('style');
    });
});