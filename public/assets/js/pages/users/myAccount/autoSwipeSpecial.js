$(document).ready(function () {
    let idxSpcItm = 0;
    let nowTranslateX = 0;
    
    showSlidesSpecial();
    
    function showSlidesSpecial() {

        let spcItem = $('.ctr-spcItm');
        console.log(nowTranslateX);
        let nowClass = spcItem.eq(idxSpcItm).hasClass((index, className) => {
            return (spcItem.match());
        });
        
        // spcItem.eq(idxSpcItm).removeClass('translate-x-*').addClass('translate-x-[' + nowTranslateX + '%]');
        spcItem.eq(idxSpcItm).removeClass((index, className) => {
            return (className.match(/(^|\s)-translate-x-\[\S+\]/g) || []).join(' ');
        });
        spcItem.eq(idxSpcItm).addClass('-translate-x-[' + nowTranslateX + '%]');
        
        idxSpcItm++;
        nowTranslateX += 100;
        
        if (idxSpcItm > spcItem.length - 1) {
            idxSpcItm = 0;
            nowTranslateX = 0;
        }
        
        // spcItem.eq(idxSpcItm).removeClass('translate-x-*').addClass('translate-x-[' + nowTranslateX + '%]');
        spcItem.eq(idxSpcItm).removeClass((index, className) => {
            return (className.match(/(^|\s)-translate-x-\[\S+\]/g) || []).join(' ');
        });
        spcItem.eq(idxSpcItm).addClass('-translate-x-[' + nowTranslateX + '%]');
        
        setTimeout(showSlidesSpecial, 2000);
    }
});