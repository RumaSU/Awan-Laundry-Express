$(document).ready(function () {
    const $ICN_SHOWDET_ORDER = $('.shwThsDetTrsc');
    const $ICN_CLSDET_ORDER = $('#icnClsXMdlDetThsOrder');
    const $CNT_MDLDET_ORDER = $('.ctr-shwMdlDetOrder');
    const $DAT_MDLDET_ORDER = $CNT_MDLDET_ORDER.find('.ctr-mdlDetOrder');
    const ACTV_MDLDET_ORDER = "w-full md:w-[640px]";
    const HIDE_MDLDET_ORDER = "w-0 md:w-[0]";
    const TRANSITION_MDLDET_ORDER = $CNT_MDLDET_ORDER.find();
    
    let SIZE_CMDL_ORDER, CLS_SCMDL_ORDER;
    let statusMdlOrd = false;
    
    $ICN_SHOWDET_ORDER.click((e) => {
        const $PAR_ELEMN_ORDER = $(e.target.closest('.ctr-OrdersItm'));
        const $THS_ORDID = $PAR_ELEMN_ORDER.attr('data-orderId');
        
        showModalDetOrder();
        $DAT_MDLDET_ORDER.attr('data-orderMdlId', $THS_ORDID);
        console.log()
    });
    $ICN_CLSDET_ORDER.click((e) => {
        $DAT_MDLDET_ORDER.removeAttr('data-orderMdlId');
        CLS_SCMDL_ORDER = SIZE_CMDL_ORDER * 0.08;
        console.log(CLS_SCMDL_ORDER);
        HideModalDetOrder();
    });
    
    
    function showModalDetOrder() {
        $CNT_MDLDET_ORDER.removeClass('hidden');
        setTimeout(() => {
            $CNT_MDLDET_ORDER.removeClass(HIDE_MDLDET_ORDER);
            $CNT_MDLDET_ORDER.addClass(ACTV_MDLDET_ORDER);
        }, 50);
        statusMdlOrd = true;
    }
    function HideModalDetOrder() {
        $CNT_MDLDET_ORDER.removeClass(ACTV_MDLDET_ORDER);
        $CNT_MDLDET_ORDER.addClass(HIDE_MDLDET_ORDER);
        statusMdlOrd = false;
        setTimeout((e) => {
            $CNT_MDLDET_ORDER.addClass('hidden');
        }, 200);
    }
});
