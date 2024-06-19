$(document).ready(function () {
    const $ICN_CREATE_PROMO = $('#crtNewPrmStr');
    const $ICN_EDIT_PROMO = $('.cLftEditThsPrm');
    const $ICN_CLSCRT_PROMO = $('#icnClsXMdlCrtThsPromo');
    const $CNT_MDLCRT_PROMO = $('.ctr-shwMdlCrtPromo');
    const $CNT_CHECKUSR_FRCRTPROMO = $('.ctr-searchUsrSpclCrtPromo .fldSearchUsrSpclCrtPromo .cntTotlChsdUsrSpcl p');
    const ACTV_MDLDET_PROMO = "w-full md:w-[640px]";
    const HIDE_MDLDET_PROMO = "w-0 md:w-[0]";
    const ELEM_CHECK = '<span class="icnChck block text-xl text-center"><i class="fas fa-check"></i></span>';
    
    let SIZE_CMDL_ORDER, CLS_SCMDL_ORDER;
    let statusMdlOrd = false;
    let countCkUsrChsd = 0;
    
    $ICN_CREATE_PROMO.click((e) => {
        // const $PAR_ELEMN_ORDER = $(e.target.closest('.ctr-promoItm'));
        // const $THS_ORDID = $PAR_ELEMN_ORDER.find('.ctr-cPromoItm').attr('data-promoId');
        
        showModalDetOrder();
        // $DAT_MDLDET_PROMO.attr('data-promoMdlId', $THS_ORDID);
    });
    $ICN_EDIT_PROMO.click((e) => {
        e.stopPropagation();
        showModalDetOrder();
    });
    $ICN_CLSCRT_PROMO.click((e) => {
        // $DAT_MDLDET_PROMO.removeAttr('data-promoMdlId');
        // CLS_SCMDL_ORDER = SIZE_CMDL_ORDER * 0.08;
        // console.log(CLS_SCMDL_ORDER);
        HideModalDetOrder();
    });
    
    
    function showModalDetOrder() {
        $CNT_MDLCRT_PROMO.removeClass('hidden');
        $CNT_MDLCRT_PROMO.removeClass(HIDE_MDLDET_PROMO);
        $CNT_MDLCRT_PROMO.addClass(ACTV_MDLDET_PROMO);
        statusMdlOrd = true;
    }
    function HideModalDetOrder() {
        $CNT_MDLCRT_PROMO.removeClass(ACTV_MDLDET_PROMO);
        $CNT_MDLCRT_PROMO.addClass(HIDE_MDLDET_PROMO);
        statusMdlOrd = false;
        $CNT_MDLCRT_PROMO.addClass('hidden');
    }
    
    $('#inpSearchClthsCrtPromo').on('keyup', function () {
        let valS = $(this).val().toLowerCase();
        $('.cLstSlctClthsFrPromo .itmClthsFrPromo').filter(function () {
            let name = $(this).find('.txLbl p').text().toLowerCase();
            $(this).toggle(name.indexOf(valS) > -1);
        });
    });
    
    $('#inpSearchUsrSpclCrtPromo').on('keyup', function () {
        let valS = $(this).val().toLowerCase();
        $('.cLstChsdUsrCrtSpclPromo .itmUsrCrtSpclPromo').filter(function () {
            let name = $(this).find('.nmeUsr p').text().toLowerCase();
            $(this).toggle(name.indexOf(valS) > -1);
        });
    });
    
    $('.inpChckUsrFrCrtPromoSpcl').on('change', (e) => {
        let countCheck = $('.inpChckUsrFrCrtPromoSpcl:checked').length;
        
        $CNT_CHECKUSR_FRCRTPROMO.text((countCheck > 99) ? '99+' : countCheck);
        
        console.log(e);
    });
});