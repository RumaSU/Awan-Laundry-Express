$(document).ready(function () {
    let rnLstAccOrder = ['Menunggu Pembayaran', 'Diproses'];
    
    $(window).resize((e) => { 
        console.log($('.ctr-OrdersItm').height());
    });
    
    $('.cSRejectTrsc').click((e) => {
        e.stopPropagation();
        let $parElm = e.target.closest('.ctr-OrdersItm');
        
        let $jqParElm = $($parElm);
        let $jqThsElm = $jqParElm.find('.cSRejectTrsc');
        let $sibElmThs = $jqParElm.find('.cSAccptTrsc');
        
        let statusOrder = false;
        
        $sibElmThs.removeClass('px-4 md:px-8');
        setTimeout(() => {
            $sibElmThs.find('.txSt strong').html('');
        }, 50);
        setTimeout(() => {
            $sibElmThs.remove();
            $jqThsElm.find('strong').html('Ditolak');
        }, 401);
    });
    
    $('.cSAccptTrsc').click((e) => {
        let $parElm = e.target.closest('.ctr-OrdersItm');
        
        let $jqParElm = $($parElm);
        let $jqThsElm = $jqParElm.find('.cSAccptTrsc');
        let $sibElmThs = $jqParElm.find('.cSRejectTrsc');
        
        let statusOrder = false;
        let randStatusOrder = Math.floor(Math.random() * 2);
                
        $sibElmThs.removeClass('px-4 md:px-8');
        setTimeout(() => {
            $sibElmThs.find('.txSt strong').html('');
        }, 50);
        setTimeout(() => {
            $sibElmThs.remove();
            $jqThsElm.find('strong').html(rnLstAccOrder[randStatusOrder]);
        }, 401);
    });
});