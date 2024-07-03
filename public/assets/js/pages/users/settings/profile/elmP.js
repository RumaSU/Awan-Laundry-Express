$('.cMainSetting').on('click', '.btnEditUserData', (e) => {
    $('.popupContent').addClass('hidden');
    const elmnTr = $(e.target.closest('.profileContent'));
    
    const parentTable = elmnTr.closest('table');
    const elmnPopup = parentTable.nextAll('.popupContent');
    
    const elmnTrIdx = parentTable.find('.profileContent').index(elmnTr);
    const $SLCT_POPUP = $(elmnPopup[elmnTrIdx]);
    $SLCT_POPUP.removeClass('hidden');
});

$('.cMainSetting').on('click', '.closePopupContent', (e) => {
    const $THS_POPUP = $(e.target.closest('.popupContent'));
    $THS_POPUP.addClass('hidden');
});

$(document).click((e) => {
    const elmnPopup = $('.popupContent');
    elmnPopup.each((index, element) => {
        if (!element.contains(e.target) && !e.target.closest('button')) {
            $(element).addClass('hidden');
        }
    });
});