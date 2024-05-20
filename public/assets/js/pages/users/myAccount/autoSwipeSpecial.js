$(document).ready(function () {
    let idxSpcItm = 0;
    let nowTranslateX = 0;
    
    // setInterval(showSlidesSpecial, 3000);
    // whatValueTranslateX();
    
    function whatValueTranslateX() {
        let spcItem = $('.ctr-spcItm');
        let nowClass = spcItem.eq(idxSpcItm).attr('class');
        let nowClassAndRegex = spcItem.eq(idxSpcItm).attr('class').match(/translate-x-\[(.*?)%\]/)[1];
        
        console.log("class : " + nowClass);
        console.log("class regex : " + nowClassAndRegex);
        
        let splitValue = nowClass.split('translate-x-[').pop().split('%]')[0];
        // let changeValue = parseInt(splitValue) - 100;
        
        console.log("class : " + nowClass);
        console.log("class split : " + splitValue);
        
        let getCSSVal1 = spcItem.eq(0).css('transform');
        let getCSSVal2 = spcItem.eq(1).css('transform');
        console.log("class : " + nowClass);
        console.log("css1 : " + getCSSVal1);
        console.log("css2 : " + getCSSVal2);
    }
    
    function resetSlide() {
        let spcItem = $('.ctr-spcItm');
        
        for (let i = 0; i < spcItem.length; i++) {

            spcItem.eq(i).removeClass((index, className) => {
                return className.match(/translate-x-\[(.*?)%\]/)[0];
            }).addClass('translate-x-[' + ((i * 100) - 100) + '%]');
            
            spcItem.eq(i).removeClass('invisible opacity-0');
        }
    }
    
    function showSlidesSpecial() {
        
        let spcItem = $('.ctr-spcItm');
        
        for (let i = idxSpcItm; i < spcItem.length; i++) {
            let thisVal = parseInt(spcItem.eq(i).attr('class').match(/translate-x-\[(.*?)%\]/)[1]);
            
            spcItem.eq(i).removeClass((index, className) => {
                return className.match(/translate-x-\[(.*?)%\]/)[0];
            }).addClass('translate-x-[' + (thisVal - 100) + '%]');
        }
        
        for (let i = 0; i < idxSpcItm; i++) {
            let thisVal = parseInt(spcItem.eq(i).attr('class').match(/translate-x-\[(.*?)%\]/)[1]);
            
            spcItem.eq(i).removeClass((index, className) => {
                return className.match(/translate-x-\[(.*?)%\]/)[0];
            }).addClass('translate-x-[' + ((i * 100) + 100) + '%]');
            
            spcItem.eq(i).addClass('invisible opacity-0');
        }
        
        idxSpcItm++;
        if (idxSpcItm > spcItem.length - 1) {
            // spcItem.eq(1).removeClass((index, className) => {
            //     return className.match(/translate-x-\[(.*?)%\]/)[0];
            // }).addClass('translate-x-[' + ((1 * 100) - 100) + '%]');
            // spcItem.eq(1).removeClass('invisible opacity-0');
            // let thisVal = parseInt(spcItem.eq(idxSpcItm).attr('class').match(/translate-x-\[(.*?)%\]/)[1]);
            // spcItem.eq(idxSpcItm).removeClass((index, className) => {
            //     return className.match(/translate-x-\[(.*?)%\]/)[0];
            // }).addClass('translate-x-[' + ((i * 100) + 100) + '%]');
            // spcItem.eq(idxSpcItm).addClass('invisible opacity-0');
            
            resetSlide();
            idxSpcItm = 0;
        }
    }
});