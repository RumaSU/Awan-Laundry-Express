$(document).ready(function () {
    const $ICN_SHOWDET_PROMO = $('.ctr-promoItm');
    const $ICN_CLSDET_PROMO = $('#icnClsXMdlDetThsPromo');
    const $CNT_MDLDET_PROMO = $('.ctr-shwMdlDetPromo');
    const $DAT_MDLDET_PROMO = $CNT_MDLDET_PROMO.find('.ctr-mdlDetPromo');
    const ACTV_MDLDET_PROMO = "w-full md:w-[640px]";
    const HIDE_MDLDET_PROMO = "w-0 md:w-[0]";
    const TRANSITION_MDLDET_ORDER = $CNT_MDLDET_PROMO.find();
    
    let SIZE_CMDL_ORDER, CLS_SCMDL_ORDER;
    let statusMdlOrd = false;
    
    $ICN_SHOWDET_PROMO.click((e) => {
        const $PAR_ELEMN_ORDER = $(e.target.closest('.ctr-promoItm'));
        const $THS_ORDID = $PAR_ELEMN_ORDER.find('.ctr-cPromoItm').attr('data-promoId');
        
        showModalDetOrder();
        $DAT_MDLDET_PROMO.attr('data-promoMdlId', $THS_ORDID);
        console.log($THS_ORDID)
    });
    $ICN_CLSDET_PROMO.click((e) => {
        $DAT_MDLDET_PROMO.removeAttr('data-promoMdlId');
        HideModalDetOrder();
    });
    
    
    function showModalDetOrder() {
        $CNT_MDLDET_PROMO.removeClass('hidden');
        $CNT_MDLDET_PROMO.removeClass(HIDE_MDLDET_PROMO);
        $CNT_MDLDET_PROMO.addClass(ACTV_MDLDET_PROMO);
        statusMdlOrd = true;
    }
    function HideModalDetOrder() {
        $CNT_MDLDET_PROMO.removeClass(ACTV_MDLDET_PROMO);
        $CNT_MDLDET_PROMO.addClass(HIDE_MDLDET_PROMO);
        statusMdlOrd = false;
        $CNT_MDLDET_PROMO.addClass('hidden');
    }
});
